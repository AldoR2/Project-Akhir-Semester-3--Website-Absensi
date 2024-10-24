<?php
// Memasukkan file koneksi database
require_once 'db_connection.php';

// Mengatur header response
header('Content-Type: application/json'); // Menentukan tipe konten sebagai JSON
header('Access-Control-Allow-Origin: *'); // Mengizinkan akses dari semua domain (CORS)
header('Access-Control-Allow-Methods: GET'); // Hanya mengizinkan method GET
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Inisialisasi array response dengan nilai default
$response = array('status' => 'fail', 'data' => null, 'message' => '');

// Cek apakah method request adalah GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        // Menyiapkan query SQL untuk mengambil data nim dan nama dari tabel mahasiswa
        $stmt = $conn->prepare("SELECT nim, nama FROM mahasiswa");
        $stmt->execute(); // Mengeksekusi query
        $result = $stmt->get_result(); // Mendapatkan hasil query

        // Cek apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            $mahasiswa = array();
            // Loop untuk mengambil setiap baris data
            while($row = $result->fetch_assoc()) {
                $mahasiswa[] = $row; // Menambahkan setiap baris ke array mahasiswa
            }
            $response['status'] = 'success'; // Set status sukses
            $response['data'] = $mahasiswa; // Set data mahasiswa
        } else {
            $response['message'] = 'Tidak ada data mahasiswa.'; // Pesan jika data kosong
        }
    } catch (Exception $e) {
        // Menangkap error saat query database
        $response['message'] = 'Database error: ' . $e->getMessage();
        http_response_code(500); // Set status code 500 (Internal Server Error)
    }
} else {
    // Response untuk method selain GET
    $response['message'] = 'Invalid request method.';
    http_response_code(405); // Set status code 405 (Method Not Allowed)
}

// Mengirim response dalam format JSON
echo json_encode($response);

// Menutup koneksi database
$conn->close();