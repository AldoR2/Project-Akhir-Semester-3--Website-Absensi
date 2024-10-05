<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input username
    $username = $_POST["username"];

    // Check the username and redirect accordingly
    if ($username == "mahasiswa") {
      header("Location: projectAbsensi/templates/mahasiswa/home.php");
      exit;
    } elseif ($username == "dosen") {
      header("Location: projectAbsensi/templates/dosen/dashboard.php");
      exit;
    } else {
      // If the username is neither "mahasiswa" nor "dosen", display an error message
      echo "Invalid username";
    }
  }
?>