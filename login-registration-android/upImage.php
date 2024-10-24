<?php 
include 'db_connection.php';

$maxSize = 1024 * 1024; // 1MB
$base64Image = $_POST['foto'];
$decodedImage = base64_decode($base64Image);

if (strlen($decodedImage) > $maxSize) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Ukuran file terlalu besar'
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['foto']) && !empty($_POST['nim'])) {

        $foto = $_POST['foto'];
        $nim = $_POST['nim'];

        // Gunakan prepared statement untuk keamanan
        $sql = "UPDATE mahasiswa SET foto = ? WHERE nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $foto, $nim);

        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Image successfully uploaded'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Image upload failed: ' . $stmt->error
            ]);
        }

        $stmt->close();
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'All fields are required'
        ]);
    }

    $conn->close();
}

