<?php include("sesi.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../../assets/css/styles_dosen.css">

   <title>Absensi</title>
</head>

<body>
   <?php include("header.php"); ?>

   <section class="data_dosen" id="#data_dosen">
      <div class="navbar_link">
         <a href="dashboard.php">Home</a> / Dosen / Data Dosen
      </div>

      <div class="page_title">
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

      <div class="table_bg">
         <button class="btn_refresh"><i class="ri-refresh-line"></i> Refresh</button>
         <div class="search">
            <label for="search">Search:&nbsp;&nbsp;</label>
            <input type="text" id="search">
         </div>

         <div class="table_scroll">
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
                  <?php
                  $query = "SELECT * FROM dosen ORDER BY nip ASC";
                  $result = mysqli_query($koneksi, $query);

                  if (!$result) {
                     die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                  }

                  $no = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                     <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['no_telp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                           <span class="action_btn">
                              <a href="#">Edit</a>
                              <a href="#">Hapus</a>
                           </span>
                        </td>
                     </tr>
                  <?php
                     $no++;
                  }
                  ?>
               </tbody>
            </table>
         </div>
      </div>
   </section>

   <?php include("../footer.php"); ?>

   <!--=============== MAIN JS ===============-->
   <script src="../../assets/js/main.js"></script>
</body>

</html>
