-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 04:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan') NOT NULL,
  `jurusan` enum('teknik','teknologi_informasi','kesehatan') NOT NULL,
  `kode_matkul` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `jenis_kelamin`, `jurusan`, `kode_matkul`, `password`) VALUES
('8719687416873', 'Udin yang pertamaa', 'laki_laki', 'teknik', 'db001', '1324132413241');

--
-- Triggers `dosen`
--
DELIMITER $$
CREATE TRIGGER `perubahan_dosen` AFTER UPDATE ON `dosen` FOR EACH ROW BEGIN
INSERT INTO log_dosen (waktu, nip, password, nama) VALUES (now(), new.nip, new.password, new.nama);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log_dosen`
--

CREATE TABLE `log_dosen` (
  `id_log` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(200) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_dosen`
--

INSERT INTO `log_dosen` (`id_log`, `nip`, `waktu`, `nama`, `password`) VALUES
(1, '8719687416873', '2024-09-19 15:18:08', 'Udin yang pertamaa', '1324132413241');

-- --------------------------------------------------------

--
-- Table structure for table `log_mahasiswa`
--

CREATE TABLE `log_mahasiswa` (
  `id_log` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nim` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `golongan` varchar(3) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_mahasiswa`
--

INSERT INTO `log_mahasiswa` (`id_log`, `waktu`, `nim`, `nama`, `golongan`, `password`) VALUES
(1, '2024-09-19 15:30:33', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `program_studi` enum('tkk','tif','mif','bsd') NOT NULL,
  `golongan` enum('a','b','c','d','e') NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `program_studi`, `golongan`, `password`) VALUES
('E4123123', 'Bimaa Penegak kebenaran', 'tkk', 'c', '12321231');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `perubahan_mhs` AFTER UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
INSERT INTO log_mahasiswa (waktu, nim, password, nama, golongan) VALUES (now(), new.nim, new.password, new.nama, new.golongan);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`) VALUES
('db001', 'workshop database');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nim` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `log_dosen`
--
ALTER TABLE `log_dosen`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_dosen`
--
ALTER TABLE `log_dosen`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `kode_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
