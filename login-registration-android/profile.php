<?php
session_start(); // Memulai session

include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip = $_POST['nip'] ?? null;
    $nim = $_POST['nim'] ?? null;
    $program_studi = $_POST['program_studi'] ?? null;
    $semester = $_POST['semester'] ?? null;
    $no_telp = $_POST['no_telp'] ?? null;
    $email = $_POST['email'] ?? null;
    $nama = $_POST['nama'] ?? null;
    $jenis_kelamin = $_POST['jenis_kelamin'] ?? null;
    $foto = $_POST['foto'] ?? null;
    $role = $_POST['role'];

    if ($role == 'dosen' && !empty($nip)) {
        // Mengambil data menggunakan tabel dosen
        $sql = "SELECT * FROM dosen WHERE nip = ? AND nama = ? AND jenis_kelamin = ? AND email = ? AND no_telp = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nip, $nama, $jenis_kelamin, $email, $no_telp);
    } else if ($role == 'mahasiswa' && !empty($nim)) {
        // Mengambil data menggunakan tabel mahasiswa
        $sql = "SELECT * FROM mahasiswa WHERE nim = ? AND nama = ? AND program_studi = ? AND semester = ? AND email = ? AND jenis_kelamin = ? AND no_telp = ? AND foto = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $nim, $nama, $program_studi, $semester, $email, $jenis_kelamin, $no_telp, $foto);
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'NIP/NIM tidak valid';
        echo json_encode($response);
        exit();
    }

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $response['status'] = 'success';
        $response['data'] = $result->fetch_assoc();
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'Gagal mengambil data';
    }

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}