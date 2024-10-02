<?php 
// Mendefinisikan kelas bernama 'person'
class person {
    // Mendeklarasikan property 'name'  
    var $name; // Nama property

    // Constructor, dipanggil saat objek dari kelas ini diinisialisasi
    function __construct($persons_name) { 
        echo "<p>initialize class</p>"; // Menampilkan pesan saat kelas diinisialisasi
    }

    // Method untuk mengubah nilai property 'name'
    function set_name($new_name) {
        $this->name = $new_name; // Menetapkan nilai baru ke property 'name'
    }

    // Method untuk mengambil nilai property 'name'
    function get_name() {
        return $this->name; // Mengembalikan nilai dari property 'name'
    }

    // Destructor, dipanggil saat objek dihapus atau tidak lagi dibutuhkan
    function __destructor(){
        echo "<p>end class</p>"; // Menampilkan pesan saat objek dihancurkan
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>