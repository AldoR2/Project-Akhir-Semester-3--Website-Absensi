<?php
include ("../../src/config.php");
session_start();

if(!$_SESSION['session_username']){
   header("location:../../index.php");
   exit;
 }
$nip = $_SESSION['session_username'];

?>