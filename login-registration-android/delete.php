<?php
// delete.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip_nim = $_POST['nip_nim'];

    if (!empty($nip_nim)) {
        $sql = "DELETE FROM users WHERE nip_nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nip_nim);

        if ($stmt->execute()) {
            echo json_encode(array("status" => "success", "message" => "User deleted successfully"));
        } else {
            echo json_encode(array("status" => "fail", "message" => "Failed to delete user"));
        }

        $stmt->close();
    } else {
        echo json_encode(array("status" => "fail", "message" => "nip_nim is required"));
    }

    $conn->close();
}
?>
