<?php
include("sesi.php");

if (isset($_POST['ubah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    // Query untuk update data mahasiswa berdasarkan NIM
    $sql = "UPDATE mahasiswa SET nama = ?, jenis_kelamin = ?, email = ?, program_studi = ?, semester = ?, no_telp = ?, alamat = ? WHERE nim = ?";
    
    // Prepare statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssssssss", $nama, $jenis_kelamin, $email, $prodi, $semester, $no_telp, $alamat, $nim);

    // Eksekusi query
    if ($stmt->execute()) {
        // Redirect ke halaman mahasiswa setelah berhasil update
        header("Location: dataMhs.php?pesan=sukses_edit");
    } else {
        // Pesan error jika gagal update
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $stmt->close();
}
?>
