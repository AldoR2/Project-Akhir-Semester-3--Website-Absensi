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
            / Absensi
         </div>
         <br>
         <div class="menu_screen">
            <h1>Absensi</h1>
         </div>

         <div class="form_content_absensi">
            <!-- Dropdown Mata Kuliah -->
            <div class="dropdown_matkul">
                <label for="matkul">Pilih Mata Kuliah</label>
                <select id="matkul" class="dropdown_absensi">
                    <option value="" disabled selected>Pilih Mata Kuliah</option>
                    <option value="matkul1">Mata Kuliah 1</option>
                    <option value="matkul2">Mata Kuliah 2</option>
                    <option value="matkul3">Mata Kuliah 3</option>
                    <option value="matkul4">Mata Kuliah 4</option>
                </select>
            </div>
        
            <!-- Dropdown Kelas -->
            <div class="dropdown_kelas">
                <label for="kelas">Pilih Kelas</label>
                <select id="kelas" class="dropdown_absensi">
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="kelas1">Kelas 1</option>
                    <option value="kelas2">Kelas 2</option>
                    <option value="kelas3">Kelas 3</option>
                    <option value="kelas4">Kelas 4</option>
                </select>
            </div>
        
            <!-- Dropdown Ruang -->
            <div class="dropdown_ruang">
                <label for="ruang">Pilih Ruang</label>
                <select id="ruang" class="dropdown_absensi">
                    <option value="" disabled selected>Pilih Ruang</option>
                    <option value="ruang1">Ruang 1</option>
                    <option value="ruang2">Ruang 2</option>
                    <option value="ruang3">Ruang 3</option>
                    <option value="ruang4">Ruang 4</option>
                </select>
            </div>
        
            <!-- Input Jam Awal -->
            <div class="input_jam_awal">
                <label for="jam_awal">Jam Awal</label>
                <input type="time" id="jam_awal" name="jam_awal">
            </div>
        
            <!-- Input Jam Akhir -->
            <div class="input_jam_akhir">
                <label for="jam_akhir">Jam Akhir</label>
                <input type="time" id="jam_akhir" name="jam_akhir">
            </div>
            
            <div class="submit_button-absensi">
               <button type="submit" id="kirim">Kirim</button>
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
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="../../assets/js/main.js"></script>
   </body>
</html>