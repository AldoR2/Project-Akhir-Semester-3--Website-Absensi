<?php
include ("sesi.php");


            $nim = $_GET['nim'];

            $sql = "DELETE FROM mahasiswa WHERE nim= ?";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("s", $nim);
            if ($stmt->execute()) {
               header("location:dataMhs.php");
            }else{
               header("location:?pesan=validasi_delete");
            }

            $stmt->close();
         
       ?>