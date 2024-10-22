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

   <section class="form_dosen" id="#form_dosen">
      <div class="navbar_link">
         <a href="dashboard.php">Home</a> / Dosen / Tambah Dosen
      </div>

      <div class="page_title">
         <h1>Form Input Data Dosen</h1>
      </div>

      <div class="table_bg">
         <div class="form_name">
            <h2>Biodata :</h2>
         </div>
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
               <label for="telepon">Telepon</label>
               <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="form-group">
               <label for="alamat">Alamat</label>
               <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat" required></textarea>
            </div>

            <div class="form-group">
               <label for="prodi">Prodi</label>
               <select id="prodi" name="prodi" required>
                  <option value="">Pilih Prodi</option>
                  <option value="mif">MIK</option>
                  <option value="tif">TIF</option>
                  <option value="tkk">TKK</option>
               </select>
            </div>

            <div class="form_name">
               <h2>Tambah Matkul & Semester :</h2>
            </div>

            <div class="form_matkul_semester">
               <button type="button" class="btn_tambah" onclick="addForm()">Tambah</button>
               <div id="additional-forms-container"></div> <!-- Tempat untuk menampung form tambahan -->
            </div>

            <div class="form-group">
               <button type="submit" class="btn-submit">Kirim Data</button>
            </div>
         </form>
      </div>
   </section>

   <?php include("../footer.php"); ?>
   
   <script>
      function addForm() {
         const container = document.getElementById('additional-forms-container');

         // Buat elemen div untuk menampung form baru
         const newForm = document.createElement('div');
         newForm.classList.add('form-group');

         // Tambahkan input jurusan
         newForm.innerHTML = `
               <label for="matkul">matkul</label>
               <select name="matkul" required>
                  <option value="">Pilih Matkul</option>
                  <option value="informatika">Teknik Informatika</option>
                  <option value="elektro">Teknik Elektro</option>
                  <option value="sipil">Teknik Sipil</option>
                  <option value="mesin">Teknik Mesin</option>
               </select>
         `;

         // Tambahkan input prodi
         const prodiSelect = document.createElement('div');
         prodiSelect.classList.add('form-group');
         prodiSelect.innerHTML = `
               <label for="semester">semester</label>
               <select name="semester" required>
                  <option value="">Pilih Semester</option>
                  <option value="1">Semester 1</option>
                  <option value="2">Semester 2</option>
                  <option value="3">Semester 3</option>
                  <option value="4">Semester 4</option>
                  <option value="5">Semester 5</option>
                  <option value="6">Semester 6</option>
                  <option value="7">Semester 7</option>
                  <option value="8">Semester 8</option>
               </select>
         `;

         // Tambahkan tombol hapus
         const deleteButton = document.createElement('button');
         deleteButton.type = 'button';
         deleteButton.innerText = 'Hapus';
         deleteButton.classList.add('btn_hapus');
         deleteButton.onclick = function() {
               container.removeChild(newForm);
               container.removeChild(prodiSelect);
               container.removeChild(deleteButton);
         };

         // Tambahkan form baru ke dalam container
         container.appendChild(newForm);
         container.appendChild(prodiSelect);
         container.appendChild(deleteButton);
      }
   </script>
   <!--=============== MAIN JS ===============-->
   <script src="../../assets/js/main.js"></script>

</body>

</html>
