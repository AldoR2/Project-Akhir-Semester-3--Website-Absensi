<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../../assets/css/styles.css">

   <title>Absensi</title>
</head>

<?php 
   include("header.php");
?>

<body>
   <section class="content container">
      <div class="navbar2">
         <a href="home.php">
            Home
         </a>
         / Matkul
         / Jadwal Kuliah
      </div>
      <br>
      <div class="menu_screen">
         <h1>Jadwal Kuliah Per Semester</h1>
      </div>

      <div class="table-responsive">
         <div class="form-group">
            <label for="jurusan">Tahun Ajaran</label>
            <select id="jurusan" name="jurusan" required>
               <option value="2024/2025 Ganjil">2024/2025 Ganjil</option>
               <option value="2023/2024 Genap">2023/2024 Genap</option>
               <option value="2023/2024 Ganjil">2023/2024 Ganjil</option>
            </select>
         </div>
      </div>
      <br>
      <div class="table-responsive">
         <button class="btn_refresh"><i class="ri-refresh-line"></i> Refresh</button>
         <div class="search">
            <label for="search">Search:&nbsp;&nbsp;</label>
            <input type="text" id="search">
         </div>
         <br>
         <table>
            <thead>
               <tr>
                  <th>Hari <i class="fa-solid fa-sort"></i></i></th>
                  <th>Jam <i class="fa-solid fa-sort"></i></th>
                  <th>Durasi</th>
                  <th>Mata Kuliah</th>
                  <th>Ruang</th>
                  <th>Dosen Koordinator</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Jum'at</td>
                  <td>09:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Matematika Diskrit</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI LT. 4</td>
                  <td>Zilvanhisna Emka Fitri S.T., M.T.</td>
               </tr>
               <tr>
                  <td>Jum'at</td>
                  <td>07:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Konsep Jaringan Komputer</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI LT. 4</td>
                  <td>Nugroho Setyo Wibowo S.T., M.T.</td>
               </tr>
               <tr>
                  <td>Kamis</td>
                  <td>07:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Workshop Kualitas Perangkat Lunak</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI 3.8</td>
                  <td>Ratih Ayuninghemi S.S.T., M.Kom.</td>
               </tr>
               <tr>
                  <td>Kamis</td>
                  <td>13:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Interpersonal Skill</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI 3.8</td>
                  <td>Yogiswara S.T., M.T.</td>
               </tr>
               <tr>
                  <td>Kamis</td>
                  <td>15:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Struktur Data</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI 3.8</td>
                  <td>Moch.Munih Dian W S.Kom., M.T.</td>
               </tr>
               <tr>
                  <td>Kamis</td>
                  <td>09:00 WIB</td>
                  <td>2 Jam</td>
                  <td>Workshop Kualitas Perangkat Lunak</td>
                  <td>GEDUNG TEKNOLOGI INFORMASI - KELAS TI 3.8</td>
                  <td>Ratih Ayuninghemi S.S.T., M.Kom.</td>
               </tr>
            </tbody>
         </table>
         <br>
         <br>
         <p>Showing 1 to 16 of 16 entries</p>
      </div>
   </section>


<?php 
   include("footer.php");
?>
   
   <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
   <!--=============== MAIN JS ===============-->
   <script src="../assets/js/main.js"></script>
</body>

</html>