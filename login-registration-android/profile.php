<?php
session_start(); // Memulai session

include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip = $_POST['nip'] ?? null;
    $nim = $_POST['nim'] ?? null;

        // Menentukan role secara otomatis
        if (!empty($nip)) {
            $role = 'dosen';
        } else if (!empty($nim)) {
            $role = 'mahasiswa';
        } else {
            // Jika NIP dan NIM tidak diisi
            $response['status'] = 'fail';
            $response['message'] = 'NIP atau NIM harus diisi';
            echo json_encode($response);
            exit();
        }

    if ($role == 'dosen' && !empty($nip)) {
        // Mengambil data menggunakan tabel dosen
        $sql = "SELECT * FROM dosen WHERE nip = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nip);
    } else if ($role == 'mahasiswa' && !empty($nim)) {
        // Mengambil data menggunakan tabel mahasiswa
        $sql = "SELECT * FROM mahasiswa WHERE nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nim);
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'NIP/NIM tidak valid';
        echo json_encode($response);
        exit();
    }

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        if ($data) {
            $response['status'] = ['success'];
            $response['role'] = $role; // Tambahkan role ke dalam respons
            $response['data'] = $data;
        }
    } else {
        $response['status'] = 'fail';
        $response['message'] = 'Gagal mengambilf data';
    }

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}