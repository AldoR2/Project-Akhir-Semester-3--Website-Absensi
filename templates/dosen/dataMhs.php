<?php 
include("sesi.php");

$semester = isset($_POST['semester']) ? $_POST['semester'] : '';
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';

$query = "SELECT * FROM mahasiswa WHERE 1=1";

if ($semester != '') {
    $query .= " AND semester = '$semester'";
}

if ($prodi != '') {
    $query .= " AND program_studi = '$prodi'";
}

$query .= " ORDER BY nim ASC";

$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>

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

   <script>
      function refreshPage() {
         location.reload();
      }
   </script>

   <?php
   if (isset($_GET['pesan'])) {
       if ($_GET['validasi_delete']) {
           echo "<script>alert('Data berhasil dihapus.')</script>";
       }
   }
   ?>
</head>

<body>
   <?php include("header.php"); ?>

   <section class="data_mhs" id="#data_mhs">
      <div class="navbar_link">
         <a href="dashboard.php">Home</a> / Mahasiswa / Data Mahasiswa
      </div>

      <div class="page_title">
         <h1>Data Mahasiswa</h1>
      </div>

      <div class="form_content">
         <div class="dropdown_container">
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
            <div class="dropdown_prodi">
               <label for="prodi">Pilih Prodi</label>
               <select id="prodi" class="dropdown">
                  <option value="" disabled selected>Pilih Prodi</option>
                  <option value="s1">S1</option>
                  <option value="s2">S2</option>
                  <option value="s3">S3</option>
               </select>
            </div>
         </div>
      </div>

      <div class="table_bg">
         <button class="btn_refresh" onclick="refreshPage()"><i class="ri-refresh-line"></i> Refresh</button>

         <form action="" method="post">
            <div class="search">
               <label for="search">Search:&nbsp;&nbsp;</label>
               <input type="text" id="search" name="keyword">
               <button class="btn_refresh" name="cari" type="submit">search</button>
            </div>
         </form>

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
                  if (isset($_POST['cari'])) {
                      $cari = $_POST['keyword'];

                      $query = "SELECT * FROM mahasiswa WHERE nim LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY nim ASC";
                  } else {
                      $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                  }
                  $result = mysqli_query($koneksi, $query);

                  if (!$result) {
                      die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                  }

                  $no = 1; 
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                     <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['program_studi']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['no_telp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                           <span class="action_btn">
                              <a href="edit_Mhs.php?nim=<?php echo $row['nim']; ?>">Edit</a>
                              <a href="hapus_mhs.php?nim=<?php echo $row['nim']; ?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
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
