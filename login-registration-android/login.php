<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip = $_POST['nip'] ?? null;
    $nim = $_POST['nim'] ?? null;
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($password) || empty($role)) {
        $response['status'] = 'fail';
        $response['message'] = 'Password atau role tidak boleh kosong';
        echo json_encode($response);
        exit();
    }

    if ($role == 'dosen' && !empty($nip)) {
        // Mengecek Login menggunakan nip dosen
        $sql = "SELECT * FROM dosen WHERE nip = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nip);
    } else if ($role == 'mahasiswa' && !empty($nim)) {
        // Mengecek Login menggunakan nim mahasiswa
        $sql = "SELECT * FROM mahasiswa WHERE nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nim);
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'NIP/NIM tidak valid';
        echo json_encode($response);
        exit();
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Login Berhasil
            $response['status'] = 'success';
            $response['message'] = 'Login Berhasil';
            if ($role == 'dosen') {
                $response['nip'] = $row['nip'];
            } else {
                $response['nim'] = $row['nim'];
            }
            $response['nama'] = $row['nama'];
        } else {
            // Password Salah
            $response['status'] = 'fail';
            $response['message'] = 'Password salah. Silakan Coba Lagi';

        }

    } else {
        // Pengguna Tidak Ditemukan
        $response['status'] = 'fail';
        $response['message'] = 'Login gagal, Pengguna tidak dapat ditemukan';
    }

    echo json_encode($response);

    $stmt->close();
    $conn->close();

}