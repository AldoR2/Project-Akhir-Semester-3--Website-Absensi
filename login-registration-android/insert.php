<?php
// insert.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip_nim = $_POST['nip_nim'];
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing password
    $role = $_POST['role'];

    if (!empty($nip_nim) && !empty($nama) && !empty($password) && !empty($role)) {
        $sql = "INSERT INTO users (nip_nim, nama, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nip_nim, $nama, $password, $role);

        if ($stmt->execute()) {
            echo json_encode(array("status" => "success", "message" => "User inserted successfully"));
        } else {
            echo json_encode(array("status" => "fail", "message" => "Failed to insert user"));
        }

        $stmt->close();
    } else {
        echo json_encode(array("status" => "fail", "message" => "All fields are required"));
    }

    $conn->close();
}
?>
