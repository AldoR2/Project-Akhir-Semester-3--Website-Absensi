<?php include("sesi.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../../assets/css/styles_dosen.css">

   <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>

   <title>Absensi</title>
</head>
   <body>
      <?php include("header.php");?>

      <section class="dashboard" id="#dashboard">
         <div class="navbar_link">
            <a href="dashboard.php">Home</a>
         </div>
         <div class="info_header">
            ⓘ Hai, <?= $_SESSION['nama'];?> Selamat Datang di SIM Online Mahasiswa 
        </div>
         <div class="data_dashboard_dosen">
             <div class="left">
                 <div>
                  <img alt="Logo of the institution" height="150" src="../../assets/img/profil.jpeg" width="150"/>
                  <a class="upload-btn" href="#">Upload Foto</a>
                 </div>
                 <div class="rigth">
                     <table>
                     <?php
                        $query = "SELECT * FROM dosen WHERE nip = ?";
                        $stmt = $koneksi->prepare($query);
                        $stmt->bind_param("s", $nip);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows == 0) {
                           echo "Data mahasiswa tidak ditemukan.";
                           exit;
                        }

                        $row = $result->fetch_assoc();
                         
                     ?>
                         <tr>
                             <td>NIM</td>
                             <td><?= $row['nip'];?></td>
                           </tr>
                           <tr>
                              <td>Nama</td>
                              <td><?= $row['nama'];?></td>
                           </tr>
                           <tr>
                              <td>Tempat, Ttl</td>
                              <td>Jember, 29-02-2004</td>
                           </tr>
                           <tr>
                              <td>Jenis Kelamin</td>
                              <td><?= $row['jenis_kelamin'];?></td>
                           </tr>
                           <tr>
                              <td>Alamat</td>
                              <td><?= $row['alamat'];?></td>
                           </tr>
                           <tr>
                              <td>No. Telpon / HP</td>
                              <td><?= $row['no_telp'];?></td>
                           </tr>
                           <tr>
                              <td>Email SSO</td>
                              <td><?= $row['email'];?></td>
                             <!-- <td><i class="fas fa-envelope"></i> e41231275@student.polije.ac.id</td> -->
                         </tr>
                     </table>
                 </div>
             </div>
         </div>
     </section>

   <?php include("../footer.php"); ?>

   <!--=============== MAIN JS ===============-->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="../../assets/js/main.js"></script>
   </body>
</html>