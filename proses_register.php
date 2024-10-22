<?php
include("src/config.php");

if (isset($_POST['register'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['pasword'];
    $confirm_password = $_POST['confirm_pasword'];

    if (empty($nim) || empty($nama) || empty($jenis_kelamin) || empty($email) || empty($prodi) || empty($no_telp) || empty($alamat)  || empty($password) || empty($confirm_password)) {
        // echo "<script>alert('Please fill in all fields.');</script>";
        header("location:register.php?pesan=validasi");
    }else{
        $sql = "SELECT nim,email FROM mahasiswa WHERE nim= ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows() > 0) {
            $stmt->bind_result($validasi_nim, $validasi_email);
            $stmt->fetch();

            if ($validasi_nim == $nim) {
                // echo ("nim sudah digunakan");
                header("location:register.php?pesan=validasi_nim");
            }elseif($validasi_email == $email){
                header("location:register.php?pesan=validasi_email");
                // echo ("email sudah digunakan");
            }
            
            // // VALIDASI EMAIL
            // if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            //     echo ("email yang kamu masukkan tidak valid");
            // }
            header("location:register.php?pesan=validasi_nim");
            // return "Nim sudah digunakan dan email";
    
        }else{
            
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $nim = strtoupper($nim);
    
            $sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, email, program_studi, semester, no_telp, alamat, pasword) VALUES (?,?,?,?,?,1,?,?,?)";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("ssssssss",$nim, $nama,$jenis_kelamin, $email, $prodi, $no_telp, $alamat, $hashed_password); 

            
        if (strlen($no_telp) <11 || strlen($no_telp) >13) {
            header("location:register.php?pesan=validasi_notelp");
            // echo "<script>alert('Nomor Telepon yang anda masukkan tidak sesuai.');</script>";
        }else if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
            header("location:register.php?pesan=validasi_pass");
            // echo "<script>alert('Password harus mengandung minimal satu huruf kapital dan satu angka.');</script>";
        }else if ($password !== $confirm_password) {
            header("location:register.php?pesan=validasi_confirm");
            // echo "<script>alert('Passwords do not match.');</script>";
        }else if ($stmt->execute()) {
            echo "<script>alert('Registrasi Berhasil');</script>";
            header("location:index.php");
        } else {
            return "Registrasi gagal";
        }
    }

    }
}
?>