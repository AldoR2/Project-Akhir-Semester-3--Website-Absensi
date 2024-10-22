<?php include("sesi.php");
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $sql = "SELECT * FROM mahasiswa WHERE nim = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      $row = $result->fetch_array();

    }else{
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));    }

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
      <link rel="stylesheet" href="../../assets/css/styles2.css">

      <title>Absensi</title>
   </head>
   <body>

      <?php include("header.php");?>

      <section class="content container">
         <div class="navbar2">
            <a href="index.php">
               Home
            </a>
            / Mahasiswa
            / Tambah Mahasiswa
         </div>
         <br>
         <div class="menu_screen">
            <h1>Form Input Data Mahasiswa</h1>
         </div>
      
         <div class="table-responsive">
            <form action="proses_edit_mhs.php" method="post">
               <div class="form-group">
                 <label for="nim">NIM</label>
                 <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" value="<?php echo $row['nim'];?>" readonly>
               </div>
               <div class="form-group">
                 <label for="nama">Nama Lengkap</label>
                 <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo $row['nama'];?>" required>
               </div>
               <div class="form-group">
                 <label for="kelamin">Jenis Kelamin</label>
                 <div class="radio-group">
                   <label><input type="radio" id="kelamin" name="jenis_kelamin" value="Laki-laki" <?php if($row['jenis_kelamin'] == 'Laki-laki'){echo 'checked';} ?> required> Pria</label>
                   <label><input type="radio" id="kelamin" name="jenis_kelamin" value="Perempuan" <?php if($row['jenis_kelamin'] == 'Perempuan'){echo 'checked';} ?> required> Wanita</label>
                 </div>
               </div>
               <div class="form-group">
                 <label for="Email">Email</label>
                 <input type="email" id="email" name="email" placeholder="Masukkan Email" value="<?php echo $row['email'];?>" required>
               </div>
               <div class="form-group">
                 <label for="prodi">Prodi</label>
                 <select id="prodi" name="prodi" required>
                   <option value="">Pilih Jurusan</option>
                   <option value="S1 Farmasi" <?php if($row['program_studi'] == 'S1 Farmasi'){echo 'selected';} ?>>S1 Farmasi</option>
                   <option value="S1 Ilmu Keperawatan & NERS" <?php if($row['program_studi'] == 'S1 Ilmu Keperawatan & NERS'){echo 'selected';} ?>>S1 Ilmu Keperawatan & NERS</option>
                   <option value="D4 Manajemen Informasi Kesehatan (Rekam Medik)" <?php if($row['program_studi'] == 'D4 Manajemen Informasi Kesehatan (Rekam Medik)'){echo 'selected';} ?>>D4 Manajemen Informasi Kesehatan (Rekam Medik)</option>
                   <option value="D3 Keperawatan" <?php if($row['program_studi'] == 'D3 Keperawatan'){echo 'selected';} ?>>D3 Keperawatan</option>
                 </select>
               </div>
               <div class="form-group">
                 <label for="semester">Semester</label>
                 <select id="semester" name="semester" required>
                    <option value="">Pilih Prodi</option>
                    <option value="1" <?php if($row['semester'] == '1'){echo 'selected';} ?>>1</option>
                    <option value="2" <?php if($row['semester'] == '2'){echo 'selected';} ?>>2</option>
                    <option value="3" <?php if($row['semester'] == '3'){echo 'selected';} ?>>3</option>
                    <option value="4" <?php if($row['semester'] == '4'){echo 'selected';} ?>>4</option>
                    <option value="5" <?php if($row['semester'] == '5'){echo 'selected';} ?>>5</option>
                    <option value="6" <?php if($row['semester'] == '6'){echo 'selected';} ?>>6</option>
                    <option value="7" <?php if($row['semester'] == '7'){echo 'selected';} ?>>7</option>
                    <option value="8" <?php if($row['semester'] == '8'){echo 'selected';} ?>>8</option>
                 </select>
               </div>
               <div class="form-group">
                 <label for="telepon">Telepon</label>
                 <input type="tel" id="telepon" name="no_telp" placeholder="Masukkan nomor telepon" value="<?php echo $row['no_telp'];?>" required>
               </div>
               <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat" required><?php echo $row['alamat'];?></textarea>
               </div>
               <div class="form-group">
                 <button type="submit" class="btn-submit" name="ubah">Kirim Data</button>
               </div>
             </form>
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
                 <p><i class="ri-map-pin-line"></i> 1234 Street Name, City, Country</p>
                 <p><i class="ri-phone-line"></i> +62 812-3456-7890</p>
                 <p><i class="ri-mail-line"></i> email@example.com</p>
             </div>
         </div>
     
         <div class="footer__bottom">
             <p>&copy; 2024 YourCompany. All rights reserved.</p>
         </div>
     </footer>
     
      <!--=============== MAIN JS ===============-->
      <script src="../../assets/js/main.js"></script>
   </body>
</html>