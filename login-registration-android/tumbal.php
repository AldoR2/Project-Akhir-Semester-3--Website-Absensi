<?php

include "db_connection.php";

$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)){

    $item[] = array(
        'nama'=>$data["nama"],
        'nim'=>$data["nim"],
    );
}

$response = array(
    'status'=>'success',
    'results'=>$item
);

echo json_encode($response);
