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

   <section class="form_matkul" id="#form_matkul">
      <div class="navbar_link">
         <a href="dashboard.php">Home</a> / Matkul / Tambah Matkul
      </div>
      <br>
      <div class="page_title">
         <h1>Form Input Matkul</h1>
      </div>

      <div class="table_bg">
         <form action="#" method="post">
            <div class="form-group">
               <label for="nama">Nama Lengkap</label>
               <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
               <label for="nim">NIP</label>
               <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
            <div class="form-group">
               <label for="kelamin">Jenis Kelamin</label>
               <div class="radio-group">
                  <label><input type="radio" id="kelamin" name="kelamin" value="pria" required> Pria</label>
                  <label><input type="radio" id="kelamin" name="kelamin" value="wanita" required> Wanita</label>
               </div>
            </div>
            <div class="form-group">
               <label for="jurusan">Jurusan</label>
               <select id="jurusan" name="jurusan" required>
                  <option value="">Pilih Jurusan</option>
                  <option value="informatika">Teknik Informatika</option>
                  <option value="elektro">Teknik Elektro</option>
                  <option value="sipil">Teknik Sipil</option>
                  <option value="mesin">Teknik Mesin</option>
               </select>
            </div>
            <div class="form-group">
               <label for="prodi">Prodi</label>
               <select id="prodi" name="prodi" required>
                  <option value="">Pilih Prodi</option>
                  <option value="s1">S1</option>
                  <option value="s2">S2</option>
                  <option value="s3">S3</option>
               </select>
            </div>
            <div class="form-group">
               <label for="telepon">Telepon</label>
               <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
               <label for="alamat">Alamat</label>
               <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat" required></textarea>
            </div>
            <div class="form-group">
               <button type="submit" class="btn-submit">Kirim Data</button>
            </div>
         </form>
      </div>
   </section>

   <?php include("../footer.php"); ?>

   <!--=============== MAIN JS ===============-->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="../../assets/js/main.js"></script>
</body>
</html>
