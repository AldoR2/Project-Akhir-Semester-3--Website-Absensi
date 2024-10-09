<?php
// update.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip_nim = $_POST['nip_nim'];
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing password
    $role = $_POST['role'];

    if (!empty($nip_nim) && !empty($nama) && !empty($password) && !empty($role)) {
        $sql = "UPDATE users SET nama = ?, password = ?, role = ? WHERE nip_nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $password, $role, $nip_nim);

        if ($stmt->execute()) {
            echo json_encode(array("status" => "success", "message" => "User updated successfully"));
        } else {
            echo json_encode(array("status" => "fail", "message" => "Failed to update user"));
        }

        $stmt->close();
    } else {
        echo json_encode(array("status" => "fail", "message" => "All fields are required"));
    }

    $conn->close();
}
?>
