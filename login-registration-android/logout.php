<?php
include 'db_connection.php';
session_start(); // Memulai session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menghancurkan semua session yang ada (logout)
    session_unset();   // Menghapus semua variabel sesi
    session_destroy(); // Menghancurkan sesi

    // Mengembalikan response bahwa logout berhasil
    $response = [
        'status' => 'success',
        'message' => 'Logout berhasil!'
    ];

    // Mengirimkan response dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}

