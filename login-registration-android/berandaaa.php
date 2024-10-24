<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'db_connection.php';

$keywords=isset($_GET["nim"]) ? $_GET["nim"] : "";

if (!empty($keywords)) {

    $keywords = $conn->real_escape_string($keywords);
    $query = "SELECT nim, nama FROM mahasiswa WHERE nim LIKE ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $keywords);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $response = array(
            "status" => "success",
            "mahasiswa" => array()
        );

        while ($row = $result->fetch_assoc()) {
            $mahasiswa_item = array(
                "nim" => $row['nim'],
                "nama" => $row['nama']
            );
            array_push($response["mahasiswa"], $mahasiswa_item);
        }
        http_response_code(200);
    } else {
        http_response_code(404);
        $response = array (
            "status" => "fail",
            "message" => "Data mahasiswa tidak ditemukan"
        );
    }

    $stmt->close();
} else {
    http_response_code(400);
    $response = array (
        "status" => "fail",
        "message" => "NIM tidak boleh kosong"
    );
}

echo json_encode($response);
$conn->close();