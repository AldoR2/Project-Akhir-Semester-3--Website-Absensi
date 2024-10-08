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
            / Tambah Dosen
         </div>
         <br>
         <div class="menu_screen">
            <h1>Form Input Data Dosen</h1>
         </div>
      
         <div class="table-responsive">
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


<?php 
   include("../mahasiswa/footer.php");
?>
      
      <!--=============== MAIN JS ===============-->
      <script src="../../assets/js/main.js"></script>
   </body>
</html>