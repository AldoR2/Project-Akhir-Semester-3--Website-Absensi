<?php include ("sesi.php");

if (isset($_POST['tambah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $notelp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $pasword = $_POST['nim'];

    if (empty($nim) || empty($nama) || empty($jenis_kelamin) || empty($email) || empty($prodi) || empty($semester) || empty($notelp)  || empty($alamat)) {
        # code...
    } else {
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
                header("location:formMhs.php?pesan=validasi_nim");
            }elseif($validasi_email == $email){
                header("location:formMhs.php?pesan=validasi_email");
                // echo ("email sudah digunakan");
            }
            
            // VALIDASI EMAIL
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                echo ("email yang kamu masukkan tidak valid");
            }
            header("location:formMhs.php?pesan=validasi_nim");
            // return "Nim sudah digunakan dan email";
        }else{
            $hashed_pasword = password_hash($pasword,PASSWORD_DEFAULT);
            $nim = strtoupper($nim);

            $sql = "INSERT INTO mahasiswa (nim,nama,jenis_kelamin,email,program_studi,semester,no_telp,alamat,pasword) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("sssssisss",$nim, $nama,$jenis_kelamin, $email, $prodi, $semester, $notelp, $alamat,$hashed_pasword); 

            if (strlen($notelp) <11 || strlen($notelp) >13) {
                header("location:formMhs.php?pesan=validasi_notelp");
                // echo "<script>alert('Nomor Telepon yang anda masukkan tidak sesuai.');</script>";
            }else if ($stmt->execute()) {
                echo "<script>alert('Registrasi Berhasil');</script>";
                header("location:dataMhs.php");
            } else {
                return "Registrasi gagal";
            }
    }
}
    

}