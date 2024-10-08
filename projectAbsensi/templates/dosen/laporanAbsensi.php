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
            / Laporan
            / Laporan Absensi
         </div>
         <br>
         <div class="menu_screen">
            <h1>Laporan Absensi</h1>
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
            <button class="btn_refresh"><i class="ri-refresh-line"></i> Print</button>
            <div class="search">
               <label for="semester">Pilih Tanggal</label>
                <select id="semester" class="dropdown">
                    <option value="" disabled selected>perhari</option>
                    <option value="1">perminggu</option>
                    <option value="2">perbulan</option>
                    <option value="3">pertahun</option>
                    <option value="4">persepuluhtahun</option>
                    <option value="5">persatuabad</option>
                    <option value="6">perseratusabad</option>
                </select>
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


<?php 
   include("../mahasiswa/footer.php");
?>

      <!--=============== MAIN JS ===============-->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="../../assets/js/main.js"></script>
   </body>
</html>