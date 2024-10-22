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

   <title>Absensi</title>
</head>
<body>
   <!-- Header Include -->
   <?php include("header.php"); ?>

   <!-- Form Mahasiswa Section -->
   <section class="form_mhs" id="#form_mhs">
      <div class="navbar_link">
         <a href="dashboard.php">Home</a>
         / Mahasiswa / Tambah Mahasiswa
      </div>
      
      <div class="page_title">
         <h1>Form Input Data Mahasiswa</h1>
      </div>

      <div class="table_bg">
         <form action="tambah_mhs.php" method="post">
            <div class="form-group">
               <label for="nim">NIM</label>
               <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
         
            <div class="form-group">
               <label for="nama">Nama Lengkap</label>
               <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
               <label for="jenis_kelamin">Jenis Kelamin</label>
               <div class="radio-group">
                  <label><input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                  <label><input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
               </div>
            </div>

            <div class="form-group">
               <label for="email">Email</label>
               <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
               <label for="prodi">Prodi</label>
               <select id="prodi" name="prodi" required>
                  <option value="">Pilih Prodi</option>
                  <option value="informatika">Teknik Informatika</option>
                  <option value="elektro">Teknik Elektro</option>
                  <option value="sipil">Teknik Sipil</option>
                  <option value="mesin">Teknik Mesin</option>
               </select>
            </div>

            <div class="form-group">
               <label for="semester">Semester</label>
               <select id="semester" name="semester" required>
                  <option value="">Pilih Semester</option>
                  <option value="1">S1</option>
                  <option value="2">S2</option>
                  <option value="3">S3</option>
               </select>
            </div>

            <div class="form-group">
               <label for="no_telp">Telepon</label>
               <input type="tel" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="form-group">
               <label for="alamat">Alamat</label>
               <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat" required></textarea>
            </div>

            <div class="form-group">
               <button type="submit" name="tambah" class="btn-submit">Kirim Data</button>
            </div>
         </form>
      </div>
   </section>

   <!-- Footer Include -->
   <?php include("../footer.php"); ?>

   <!--=============== MAIN JS ===============-->
   <script src="../../assets/js/main.js"></script>
</body>
</html>