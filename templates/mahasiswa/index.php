<?php
include ("../../src/config.php");
session_start();

// if (isset($_SESSION['session_username']) !='') {
//    header("location:../../../index.php");
//     exit();
// }

if(!$_SESSION['session_username']){
   header("location:../../../index.php");
   exit;
 }
$nim = $_SESSION['session_username'];

?>
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
   
   <section class="dashboard" id="dashboard">
      <div class="content">
         <div class="navbar2">
            <a href="index.php">
               Home
            </a>
         </div>
         <br>
         <div class="judul">
            Hai, <b><?= $_SESSION['nama'];?></b> Selamat Datang di SIM Online Mahasiswa
         </div>
         <br>
         <div class="table-responsive">
            <div class="card1">
               <div class="profile-pic">
                  <img src="../../assets/img/logo.png" alt="">
                  <br>
                  <button>
                     Upload Foto
                  </button>
               </div>
               <div class="profile-info">
                  <table>
                     <?php
                       // Jalankan query untuk mengambil data mahasiswa berdasarkan nim yang login
                        $query = "SELECT * FROM mahasiswa WHERE nim = ?";
                        $stmt = $koneksi->prepare($query);
                        $stmt->bind_param("s", $nim);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Mengecek apakah ada hasil dari query
                        if ($result->num_rows == 0) {
                           echo "Data mahasiswa tidak ditemukan.";
                           exit;
                        }

                        $row = $result->fetch_assoc();
                         
                     ?>
                     <tr>
                        <td>
                           NIK
                        </td>
                        <td>
                           <?= $row['nim'];?>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Nama
                        </td>
                        <td>
                           <?= $row['nama']; ?>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Tempat, Tanggal Lahir
                        </td>
                        <td>
                           Jember, 27-09-2005
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Jenis Kelamin
                        </td>
                        <td>
                           Laki Laki
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Alamat
                        </td>
                        <td>
                           JL. JAWA IV A/1 LINGK. TEGAL BOTO KIDUL
                        </td>
                     </tr>
                     <tr>
                        <td>
                           No. Telpon / HP
                        </td>
                        <td>
                           089652158822
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Email SSO
                        </td>
                        <td>
                           G - e41231215@student.polije.ac.id
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
            <br>
            <div class="table-responsive" style="background-color: #dbf9d4;">
               <div class="header1">Data Akademik</div>
               <div class="row1">
                  <div class="label1">NIM</div>
                  <div class="value1">E41231215</div>
               </div>
               <div class="row1">
                  <div class="label1">Jenjang Studi</div>
                  <div class="value1">D4</div>
               </div>
               <div class="row1">
                  <div class="label1">Jurusan</div>
                  <div class="value1">Teknologi Informasi</div>
               </div>
               <div class="row1">
                  <div class="label1">Program Studi</div>
                  <div class="value1">Teknik Informatika</div>
               </div>
               <div class="row1">
                  <div class="label1">Status Akademik</div>
                  <div class="value1">Aktif</div>
               </div>
               <div class="row1">
                  <div class="label1">Semester Tempuh</div>
                  <div class="value1">3</div>
               </div>
               <div class="row1">
                  <div class="label1">Golongan</div>
                  <div class="value1">C</div>
               </div>
               <div class="row1">
                  <div class="label1">Angkatan</div>
                  <div class="value1">2023</div>
               </div>
               <div class="row1">
                  <div class="label1">Dosen Wali</div>
                  <div class="value1">Ratih Ayuninghemi S.ST., M.Kom.</div>
               </div>
               <div class="row1">
                  <div class="label1">Dosen Pembimbing TA 1</div>
                  <div class="value1">-</div>
               </div>
               <div class="row1">
                  <div class="label1">Dosen Pembimbing TA 2</div>
                  <div class="value1">-</div>
               </div>
               <div class="row1">
                  <div class="label1">Dosen Pembimbing PKL</div>
                  <div class="value1">-</div>
               </div>
            </div>
         </div>
      </section>

      <?php include("../footer.php");?>

   <script src="https://kit.fontawesome.com/448de76965.js" crossorigin="anonymous"></script>
   <!--=============== MAIN JS ===============-->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="../../assets/js/main.js"></script>
</body>

</html>