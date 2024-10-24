<?php
include 'db_connection.php';

// Cek jika metode permintaan adalah POST untuk registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['password']) && !empty($_POST['id_prodi']) && !empty($_POST['semester']) && !empty($_POST['email']) && !empty($_POST['jenis_kelamin']) && !empty($_POST['no_telp']) 
    && !empty($_POST['tempat_tgl_lahir']) && !empty($_POST['alamat'])) {

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $id_prodi = $_POST['id_prodi'];
        $semester = $_POST['semester'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telp = $_POST['no_telp'];
        $ttl = $_POST['tempat_tgl_lahir'];
        $alamat = $_POST['alamat'];

        // Query untuk menyimpan data mahasiswa
        $sql = "INSERT INTO mahasiswa (nim, nama, password, id_prodi, semester, email, jenis_kelamin, no_telp, tempat_tgl_lahir, alamat) VALUES ('$nim', '$nama', '$password', '$id_prodi', '$semester', '$email', '$jenis_kelamin', '$no_telp', '$ttl' ,'$alamat')";


        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "Registration failed: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}

// Query untuk mengambil data program_studi
$sql2 = "SELECT * FROM program_studi";
$stmt = $conn->prepare($sql2);

$response = [];

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $programStudiList = [];

    // Mengambil data hasil query
    while ($row = $result->fetch_assoc()) {
        $programStudiList[] = [
            'id_prodi' => $row['id_prodi'],
            'nama_prodi' => $row['nama_prodi']
        ];
    }

    // Menyiapkan respons JSON
    if (!empty($programStudiList)) {
        $response['status'] = 'success';
        $response['data'] = $programStudiList;
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'Tidak ada data program studi yang ditemukan';
    }
} else {
    $response['status'] = 'fail';
    $response['message'] = 'Gagal mengambil data';
}

// Mengubah daftar program studi ke dalam JSON
echo json_encode($programStudiList);

// Menutup koneksi
mysqli_close($conn);