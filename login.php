<?php
include("src/config.php");
session_start();

// $err = "";

if (isset($_COOKIE['cookie_username'])) {
    $cookie_username = $_COOKIE['cookie_username'];

  // Check if the user is a student (mahasiswa)
  $sql = "SELECT * FROM mahasiswa WHERE nim = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param("s", $cookie_username);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  if ($row['nim'] == $cookie_username) {
      $_SESSION['session_username'] = $cookie_username;
      $_SESSION['nim'] = $cookie_username;
  }
    
    // Check if the user is a lecturer (dosen)
    $sql = "SELECT * FROM dosen WHERE nip = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $cookie_username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['nip'] == $cookie_username) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['nip'] = $cookie_username;
    }
}


if (isset($_SESSION['session_username'])) {
    if (isset($_SESSION['nim'])){
        header("location:templates/mahasiswa/index.php");
        // header("location:anggota.php");
        exit;
    }elseif (isset($_SESSION['nip'])) {
        header("location:templates/dosen/index.php");
        // header("location:dosen.php");
        exit;
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pasword = $_POST['pasword'];
    $ingat = isset($_POST['ingat']);
    // $err = $_GET[''];

    // Validasi input
    if (empty($username) || empty($pasword)) {
        header("location:index.php?pesan=validasi");
        exit();
        // $err = "<li>Silakan Massukkan Username dan Password</li>";

    }else{
        // SQL query menggunakan prepared statement untuk mahasiswa
        $sql = "SELECT nim, pasword,nama FROM mahasiswa WHERE nim=?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Cek jika ada pengguna
        if ($result->num_rows == 1) {
            $row = $result->fetch_array();

            // if (empty($row['nim'])) {
            //     // $err .= "<li>Username <b>$username</b> Tidak tersedia</li>";
            //     header("location:index.php?pesan=validasi_username");
            // } else if (empty($row['pasword'])) {
            //     header("location:index.php?pesan=validasi_pass");
            //     $err .= "<li>Password Tidak sesuai</li>";
            // }

            // Verifikasi password
            if (password_verify($pasword, $row['pasword'])) {
                // Set session
                // $_SESSION['user_id'] = $row['nim'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['session_username'] = $row['nim'];
                $_SESSION['nim'] = $row['nim'];


                if ($ingat  == 1) {
                    $cookie_name = "cookie_username";
                    $cookie_value = $username;
                    $cookie_time = time() + (60 * 60 * 24 * 30);
                    setcookie($cookie_name,$cookie_value,$cookie_time,"/");
                    
                }
                // Redirect ke halaman mahasiswa
                // header("location:anggota.php");
                header("Location:templates/mahasiswa/index.php");
                exit;
                // echo "Berhasil";
            } else {
                header("location:index.php?pesan=validasi_pass");
                // $err .= "<li>Password Salah .</li>";
                // echo "<script>alert('Password salah.');</script>";
            }

        } else {
            // Jika tidak ditemukan di tabel mahasiswa, cek di tabel dosen
            $sql_dosen = "SELECT nip, pasword, nama FROM dosen WHERE nip=?";
            $stmt_dosen = $koneksi->prepare($sql_dosen);
            $stmt_dosen->bind_param("s", $username);
            $stmt_dosen->execute();
            $result_dosen = $stmt_dosen->get_result();

            if ($result_dosen->num_rows == 1) {
                // Jika ditemukan di tabel dosen
                $row = $result_dosen->fetch_array();

                // Verifikasi password
                if (password_verify($pasword, $row['pasword'])) {
                    // Set session untuk dosen
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['session_username'] = $row['nip'];
                    $_SESSION['nip  '] = $row['nip'];

                    // Set cookie jika ingat saya dicentang
                    if ($ingat) {
                        setcookie('cookie_username', $username, time() + (60 * 60 * 24 * 30), "/");
                    }

                    // Redirect ke halaman dosen
                    // header("location:dosen.php");
                    header("Location: templates/dosen/index.php");
                    exit();
                } else {
                    header("location:index.php?pesan=validasi_pass");
                }
            } else {
                // Jika tidak ditemukan di kedua tabel
                // $err .= "<li>Username (NIM/NIP) tidak ditemukan.</li>";
                header("location:index.php?pesan=validasi_user");

            }
        }
    }
}
?>
