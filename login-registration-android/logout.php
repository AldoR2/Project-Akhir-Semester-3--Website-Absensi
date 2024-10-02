<?php
include 'db_connection.php';

if (!empty($_POST['nim']) && !empty($_POST['nama'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    if ($conn) {
        $sql = "select * from mahasiswa where nim = '" . $nim . "' and nama = '" . $nama . "'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) != 0) {
            $row = mysqli_fetch_assoc($res);
            if (mysqli_query($conn, $sql)) {
                echo "success";
            } else
                echo "Logout Failed";
        } else
            echo "Unathorised to access";
    } else
        echo "Database connection failed";
} else
    echo "All fields are required";