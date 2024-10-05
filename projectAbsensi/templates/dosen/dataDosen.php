<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../assets/css/styles2.css">

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
            / Dosen
            / Data Dosen
         </div>
         <br>
         <div class="menu_screen">
            <h1>Data Dosen</h1>
         </div>

         <div class="form_content">
            <div class="dropdown_semester">
                <label for="semester">Pilih Semester</label>
                <select id="semester" class="dropdown">
                    <option value="" disabled selected>Pilih Semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                </select>
            </div>
        </div>

         <div class="table-responsive">
            <button class="btn_refresh"><i class="ri-refresh-line"></i> Refresh</button>
            <div class="search">
               <label for="search">Search:&nbsp;&nbsp;</label>
               <input type="text" id="search">
           </div>
            <table>
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Image</th>
                     <th>Nim</th>
                     <th>Nama</th>
                     <th>Kelamin</th>
                     <th>Jurusan</th>
                     <th>Prodi</th>
                     <th>Telepon</th>
                     <th>Alamat</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>01</td>
                     <td><img src="../../assets/img/profil.jpeg" alt=""></td>
                     <td>E41231275</td>
                     <td>Edwin Kurniawan</td>
                     <td>Laki-laki</td>
                     <td>Teknologi Informasi</td>
                     <td>Teknik Informatika</td>
                     <td>081515173887</td>
                     <td>Jember</td>
                     <td>
                        <span class="action_btn">
                           <a href="#">Edit</a>
                           <a href="#">Hapus</a>
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td>01</td>
                     <td><img src="../../assets/img/profil.jpeg" alt=""></td>
                     <td>E41231275</td>
                     <td>Edwin Kurniawan</td>
                     <td>Laki-laki</td>
                     <td>Teknologi Informasi</td>
                     <td>Teknik Informatika</td>
                     <td>081515173887</td>
                     <td>Jember</td>
                     <td>
                        <span class="action_btn">
                           <a href="#">Edit</a>
                           <a href="#">Hapus</a>
                        </span>
                     </td>
                  </tr>
               </tbody>
            </table>
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
               <a href="https://www.google.com/maps/place/Jalan+Yulius+Usman+No.+62,+Malang,+Indonesia"><i class="ri-map-pin-line"></i> Jalan Yulius Usman No. 62, Malang, Indonesia</a>
               <p><i class="ri-phone-line"></i> +62 341-369003</p>
               <a href="mailto:info@stikespantiwaluya.ac.id"><i class="ri-mail-line"></i> info@stikespantiwaluya.ac.id</a>
            </div>
         </div>
   
         <div class="footer__bottom">
            <p>Copyrigth &copy; 2024 Stikes Panti Waluya Malang .</p>
         </div>
      </footer>
      
      <!--=============== MAIN JS ===============-->
      <script src="../../assets/js/main.js"></script>
   </body>
</html>