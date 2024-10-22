<?php 
// mengaktifkan session php
session_start();

$_SESSION['nim']="";
$_SESSION['nip']="";

// menghapus semua session
session_destroy();

$cookie_name = "cookie_username";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

// mengalihkan halaman ke halaman login
header("location:index.php");
?>