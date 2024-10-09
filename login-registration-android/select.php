<?php
// select.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip_nim = $_POST['nip_nim'];

    if (!empty($nip_nim)) {
        $sql = "SELECT * FROM users WHERE nip_nim = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nip_nim);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo json_encode(array("status" => "success", "user" => $user));
        } else {
            echo json_encode(array("status" => "fail", "message" => "User not found"));
        }

        $stmt->close();
    } else {
        echo json_encode(array("status" => "fail", "message" => "nip_nim is required"));
    }

    $conn->close();
}
?>
