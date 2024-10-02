<?php
include 'db_connection.php';

// Cek jika metode permintaan adalah POST untuk registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['password']) && !empty($_POST['program_studi']) && !empty($_POST['semester']) && !empty($_POST['email']) && !empty($_POST['jenis_kelamin']) && !empty($_POST['no_telp']) ) {

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $program_studi = $_POST['program_studi'];
        $semester = $_POST['semester'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telp = $_POST['no_telp'];

        // Query untuk menyimpan data mahasiswa
        $sql = "INSERT INTO mahasiswa (nim, nama, password, program_studi, semester, email, jenis_kelamin, no_telp) VALUES ('$nim', '$nama', '$password', '$program_studi', '$golongan', '" . $_POST['kode_kelas'] . "')";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "Registration failed: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Cek jika metode permintaan adalah GET untuk mengambil data kelas
    $sql = "SELECT kode_kelas FROM kelas"; // Ganti 'kelas' dengan nama tabel Anda
    $result = mysqli_query($conn, $sql);

    $kelasArray = array();

    if (mysqli_num_rows($result) > 0) {
        // Ambil semua data kelas dan masukkan ke dalam array
        while ($row = mysqli_fetch_assoc($result)) {
            $kelasArray[] = $row;
        }
        // Mengembalikan data dalam format JSON
        echo json_encode($kelasArray);
    } else {
        echo json_encode([]);
    }
}

// Menutup koneksi
mysqli_close($conn);

