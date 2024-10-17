-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 02:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `frid` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `frid`, `jenis_kelamin`, `email`, `no_telp`, `alamat`, `password`, `foto`) VALUES
('192394091929', 'Udin', '', 'laki_laki', 'udin@gmail.com', '0857575775', 'Jember', 'din Udin', ''),
('881920394898', 'Zahra', '', 'perempuan', 'zahra@gmail.com', '08837829842', 'Ntt', 'Zahra', '');

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
-- Table structure for table `dosen_matkul`
--

CREATE TABLE `dosen_matkul` (
  `no` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen_matkul`
--

INSERT INTO `dosen_matkul` (`no`, `nip`, `kode_matkul`) VALUES
(1, '192394091929', 'mk001'),
(2, '192394091929', 'mk002');

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
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_mahasiswa`
--

INSERT INTO `log_mahasiswa` (`id_log`, `waktu`, `nim`, `nama`, `password`) VALUES
(1, '2024-09-19 15:30:33', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(2, '2024-09-25 14:07:04', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(3, '2024-09-25 14:07:15', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(4, '2024-09-25 14:14:56', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(5, '2024-09-25 14:15:14', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(6, '2024-09-25 14:16:49', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(7, '2024-09-25 14:44:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(8, '2024-09-25 14:45:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(9, '2024-09-25 14:46:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(10, '2024-09-25 14:47:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(11, '2024-09-25 14:48:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(12, '2024-09-25 14:48:34', 'E4123412', 'Udin sedunia', '1234123'),
(13, '2024-09-25 14:49:34', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(14, '2024-09-25 14:49:34', 'E4123412', 'Udin sedunia', '1234123'),
(15, '2024-09-25 14:49:51', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(16, '2024-09-25 14:49:51', 'E4123412', 'Udin sedunia', '1234123'),
(17, '2024-09-25 14:50:51', 'E1234123', '', ''),
(18, '2024-09-25 14:50:51', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(19, '2024-09-25 14:50:51', 'E4123412', 'Udin sedunia', '1234123'),
(20, '2024-09-25 14:53:00', 'E1234123', '', ''),
(21, '2024-09-25 14:53:00', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(22, '2024-09-25 14:53:00', 'E4123412', 'Udin sedunia', '1234123'),
(23, '2024-09-25 14:54:00', 'E1234123', '', ''),
(24, '2024-09-25 14:54:00', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(25, '2024-09-25 14:54:00', 'E4123412', 'Udin sedunia', '1234123'),
(26, '2024-09-25 14:55:00', 'E1234123', '', ''),
(27, '2024-09-25 14:55:00', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(28, '2024-09-25 14:55:00', 'E4123412', 'Udin sedunia', '1234123'),
(29, '2024-09-25 14:55:00', 'F51235132', '', ''),
(30, '2024-09-25 15:02:59', 'D51325123', 'Jahenuri', ''),
(31, '2024-09-25 15:02:59', 'E1234123', '', ''),
(32, '2024-09-25 15:02:59', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(33, '2024-09-25 15:02:59', 'E4123412', 'Udin sedunia', '1234123'),
(34, '2024-09-25 15:02:59', 'F51235132', '', ''),
(35, '2024-09-25 15:02:59', 'J51325132', 'Munip', ''),
(36, '2024-09-25 15:03:59', 'D51325123', 'Jahenuri', ''),
(37, '2024-09-25 15:03:59', 'E1234123', '', ''),
(38, '2024-09-25 15:03:59', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(39, '2024-09-25 15:03:59', 'E4123412', 'Udin sedunia', '1234123'),
(40, '2024-09-25 15:03:59', 'F51235132', '', ''),
(41, '2024-09-25 15:03:59', 'J51325132', 'Munip', ''),
(42, '2024-09-25 15:04:59', 'D51325123', 'Jahenuri', ''),
(43, '2024-09-25 15:04:59', 'E1234123', '', ''),
(44, '2024-09-25 15:04:59', 'E4123123', 'Bimaa Penegak kebenaran', '12321231'),
(45, '2024-09-25 15:04:59', 'E4123412', 'Udin sedunia', '1234123'),
(46, '2024-09-25 15:04:59', 'F51235132', '', ''),
(47, '2024-09-25 15:04:59', 'J51325132', 'Munip', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `frid` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan') NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` blob NOT NULL,
  `status` int(2) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `perubahan_mhs` AFTER UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
INSERT INTO log_mahasiswa (waktu, nim, password, nama, golongan) VALUES (now(), new.nim, new.password, new.nama);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`, `id_prodi`) VALUES
('mk001', 'Workshop Basis Data', 1),
('mk002', 'Workshop Kualitas Perangkat Lunak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Komputer');

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
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  ADD PRIMARY KEY (`no`),
  ADD KEY `dosen_matkul_ibfk_1` (`nip`),
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
  ADD PRIMARY KEY (`nim`),
  ADD KEY `program_studi` (`id_prodi`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `program_studi` (`id_prodi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_prodi`);

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
-- AUTO_INCREMENT for table `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_dosen`
--
ALTER TABLE `log_dosen`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  ADD CONSTRAINT `dosen_matkul_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_matkul_ibfk_2` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `program_studi` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`id_prodi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `kode_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `contoh_tambah_semester_juli` ON SCHEDULE EVERY 2 MINUTE STARTS '2024-09-25 22:02:59' ON COMPLETION NOT PRESERVE DISABLE DO BEGIN
   UPDATE `mahasiswa` SET `semester` = semester +1;
END$$

CREATE DEFINER=`root`@`localhost` EVENT `contoh_tambah_semester_januari` ON SCHEDULE EVERY 2 MINUTE STARTS '2024-09-25 22:03:59' ON COMPLETION NOT PRESERVE DISABLE DO BEGIN
   UPDATE `mahasiswa` SET `semester` = semester +1;
END$$

CREATE DEFINER=`root`@`localhost` EVENT `tambah_semester_ganjil_juli_` ON SCHEDULE EVERY 12 YEAR STARTS '2025-07-01 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
   UPDATE `mahasiswa` SET `semester` = semester +1;
END$$

CREATE DEFINER=`root`@`localhost` EVENT `tambah_semester_genap_januari` ON SCHEDULE EVERY 12 YEAR STARTS '2025-01-01 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
   UPDATE `mahasiswa` SET `semester` = semester +1;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
