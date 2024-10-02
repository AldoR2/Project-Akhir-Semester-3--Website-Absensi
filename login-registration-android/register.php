<?php
include 'db_connection.php';

// Cek jika metode permintaan adalah POST untuk registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['password']) && !empty($_POST['program_studi']) && !empty($_POST['semester']) && !empty($_POST['email']) && !empty($_POST['jenis_kelamin']) && !empty($_POST['no_telp'])) {

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $program_studi = $_POST['program_studi'];
        $semester = $_POST['semester'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telp = $_POST['no_telp'];

        // Query untuk menyimpan data mahasiswa
        $sql = "INSERT INTO mahasiswa (nim, nama, password, program_studi, semester, email, jenis_kelamin, no_telp) VALUES ('$nim', '$nama', '$password', '$program_studi', '$semester', '$email', '$jenis_kelamin', '$no_telp')";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "Registration failed: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}

// Menutup koneksi
mysqli_close($conn);

