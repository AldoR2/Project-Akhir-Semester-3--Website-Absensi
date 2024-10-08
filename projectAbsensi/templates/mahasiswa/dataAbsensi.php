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
         / Absensi
      </div>
      <br>
      <div class="menu_screen">
         <h1>Rekap Absensi Kehadiran Mahasiswa</h1>
      </div>

      <div class="table-bg">
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

   

      
      <div class="table-bg">
         <button class="btn_refresh"><i class="ri-refresh-line"></i> Refresh</button>
            <div class="search">
               <label for="search">Search:&nbsp;&nbsp;</label>
               <input type="text" id="search">
            </div>
         <div class="table-responsive">      
         <br>
         <table>
            <thead>
               <tr>
                  <th>Kode Matkul</th>
                  <th>Mata Kuliah</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>16</th>
                  <th>Kehadiran (%)</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>TIF130701</td>
                  <td>Interpersonal Skill</td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-izin">I</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-alpha">A</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-sakit">S</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td class="percentage">0%</td>
               </tr>
               <tr>
                  <td>TIF130702</td>
                  <td>Matematika Diskrit</td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-izin">I</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status-alpha">A</span></td>
                  <td><span class="attendance-status-hadir">H</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td><span class="attendance-status">-</span></td>
                  <td class="percentage">0%</td>
               </tr>
            </tbody>
         </table>
         <br>
         <br>
      </div>
      <br>
      <div class="container1">
            <p style="color: #28a745;"><span class="green">H</span> = Hadir</p>
            <p style="color: #bc0000;"><span class="red">A</span> = Tidak masuk tanpa keterangan</p>
            <p style="color: #ffd900;"><span class="yellow">I</span> = Tidak masuk dengan ijin</p>
            <p style="color: #1100fa;"><span class="blue">S</span> = Tidak masuk karena sakit</p>
            <p style="color: #343a40;"><span class="gray">-</span> = Tidak terselenggara perkuliahan</p>
         </div>
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