<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../../assets/css/styles_mhs.css">

   <title>Absensi</title>
</head>

<body>
   <?php include("header.php");?>


   <section class="absensi" id="absensi">
      <div class="navbar2">
         <a href="home.html">
            Home
         </a>
         / Matkul
         / Data Matkul
      </div>
      <br>
      <div class="menu_screen">
         <h1>Data Mata Kuliah</h1>
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
                  <th>No.</th>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>Dosen Koordinator</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>TIF120701 </td>
                  <td>Bahasa Indonesia</td>
                  <td>Lely Dian Utami S.Pd., M.Pd.</td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>TIF120702</td>
                  <td>Kewarganegaraan</td>
                  <td>Alwan Abdurahman S.H., M.M.</td>
               </tr>
            </tbody>
         </table>
         <br>
         <br>
         <p>Showing 1 to 16 of 16 entries</p>
      </div>
   </section>

   <?php include("../footer.php");?> 
   <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
   <!--=============== MAIN JS ===============-->
   <script src="../../assets/js/main.js"></script>
</body>

</html>