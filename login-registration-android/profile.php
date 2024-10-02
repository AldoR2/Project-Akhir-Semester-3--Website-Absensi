<?php 
if (!empty($_POST['email']) && !empty($_POST['apiKey'])){
    $email = $_POST['email'];
    $apiKey = $_POST['apiKey'];
    $result = array();
    $conn = mysqli_connect("localhost", "root", "", "aplikasi_absensi");
    if($conn){
        $sql = "select = users where email = '".$email."' and apiKey = '".$apikey."'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) != 0) {
            $row = mysqli_fetch_assoc($res);
            $result = array("status" => "success", "message" => "Data fetched successfully", "name" => $row["name"], "email" => $row["email"], "apiKey" => $row['apiKey']);
        } else
        $result = array("status" => "failed", "message" => "Unatherised access");
} else
    $result = array("status" => "failed", "message" => "Database connection failed");
} else
$result = array("status" => "failed", "message" => "All field are required");

echo json_encode($result. JSON_PRETTY_PRINT);