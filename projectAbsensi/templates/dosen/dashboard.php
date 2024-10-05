<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../../assets/css/styles2.css">

   <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>

   <title>Absensi</title>
</head>

<?php 
   include("header2.php");   
?>

<body>
   <section class="content container">
      <div class="navbar2">
         <a href="dashboard.php">
            Home
         </a>
      </div>
      <br>
      <div class="judul">
         Hai, @Edwin Kurniawan. Selamat Datang di SIM Online Mahasiswa
      </div>
      <br>
      <div class="form_content">
         <div class="card-home" style="background-color: #dbf9d4;">
            <div>
               <img alt="Logo of the institution" height="150" src="../../assets/img/profil.jpeg" width="150" />
               <a class="upload-btn" href="#">Upload Foto</a>
            </div>
            <div class="info">
               <table>
                  <tr>
                     <td>NIP</td>
                     <td>3509202902040001</td>
                  </tr>
                  <tr>
                     <td>Nama</td>
                     <td>Edwin Kurniawan</td>
                  </tr>
                  <tr>
                     <td>Tempat, Ttl</td>
                     <td>Jember, 29-02-2004</td>
                  </tr>
                  <tr>
                     <td>Jenis Kelamin</td>
                     <td>Laki Laki</td>
                  </tr>
                  <tr>
                     <td>Alamat</td>
                     <td>Jl. Kacapiring II No.27, Gebang Tengah</td>
                  </tr>
                  <tr>
                     <td>No. Telpon / HP</td>
                     <td>081515173887</td>
                  </tr>
                  <tr>
                     <td>Email SSO</td>
                     <td><i class="fas fa-envelope"></i> e41231275@student.polije.ac.id</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <div class="table-responsive" style="background-color: #dbf9d4;">
         <div class="form_jadwal">
            <div class="hd2">
               <h1 style="text-align: left;">Jadwal Hari Ini</h1>
               <a href="#" class="view-all" style="text-align: right;">Lihat Semua Jadwal</a>
            </div>
            <div class="schedule">
               <div class="icon">A</div>
               <div class="details">
                  <h2>Teknik Rekayasa Perangkat Lunak</h2>
                  <p><i class="fa-solid fa-location-dot"></i> RUANG LAB RPL</p>
                  <p><i class="fa-solid fa-building"></i> GEDUNG 24A - UPT PERPUSTAKAAN</p>
                  <p><i class="fa-regular fa-calendar-days"></i> -</p>
               </div>
               <div class="time">
                  <i class="fas fa-clock"></i> 07:00 - 09:40 WIB
               </div>
               <div class="duration">
                  2h 40min
               </div>
            </div>
         </div>
         <div class="form_jadwal" style="margin-top: -20px;">
            <div class="schedule">
               <div class="icon">A</div>
               <div class="details">
                  <h2>Interpersonalia</h2>
                  <p><i class="fa-solid fa-location-dot"></i> RUANG 3.3</p>
                  <p><i class="fa-solid fa-building"></i> GEDUNG JTI</p>
                  <p><i class="fa-regular fa-calendar-days"></i> -</p>
               </div>
               <div class="time">
                  <i class="fas fa-clock"></i> 07:00 - 09:40 WIB
               </div>
               <div class="duration">
                  2h 40min
               </div>
            </div>
         </div>
      </div>
   </section>

   <footer class="footer">
      <div class="footer__container">
         <div class="footer__section">
            <h4>Follow Us</h4>
            <div class="footer__socials">
               <a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a>
               <a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-circle-line"></i></a>
               <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-line"></i></a>
               <a href="https://www.youtube.com" target="_blank"><i class="ri-youtube-line"></i></a>
            </div>
         </div>

         <div class="footer__section">
            <h4>Contact Us</h4>
            <a href="https://www.google.com/maps/place/Jalan+Yulius+Usman+No.+62,+Malang,+Indonesia"><i
                  class="ri-map-pin-line"></i> Jalan Yulius Usman No. 62, Malang, Indonesia</a>
            <p><i class="ri-phone-line"></i> +62 341-369003</p>
            <a href="mailto:info@stikespantiwaluya.ac.id"><i class="ri-mail-line"></i> info@stikespantiwaluya.ac.id</a>
         </div>
      </div>

      <div class="footer__bottom">
         <p>Copyrigth &copy; 2024 Stikes Panti Waluya Malang .</p>
      </div>
   </footer>

   <!--=============== MAIN JS ===============-->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="../../assets/js/main.js"></script>
</body>

</html>