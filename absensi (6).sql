-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 10:19 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_tgl_lahir` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `token` varchar(75) DEFAULT NULL,
  `expired_token` timestamp NULL DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_tgl_lahir` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `token` varchar(75) DEFAULT NULL,
  `token_expired` timestamp NULL DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `jenis_kelamin`, `tempat_tgl_lahir`, `email`, `no_telp`, `alamat`, `password`, `token`, `token_expired`, `foto`) VALUES
('8483898722', 'flu', 'Laki-laki', 'jember', 'asfij2lkwjlka', '13241', 'adfa', 'udah', NULL, NULL, NULL);

--
-- Triggers `dosen`
--
DELIMITER $$
CREATE TRIGGER `tambah_dosen` AFTER INSERT ON `dosen` FOR EACH ROW BEGIN
INSERT INTO log_dosen (waktu_insert, waktu_update, nip, password, nama) VALUES (now(), now(), new.nip, new.password, new.nama);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_dosen` AFTER UPDATE ON `dosen` FOR EACH ROW BEGIN
UPDATE  log_dosen SET waktu_update = now(), nama = new.nama, password = new.password WHERE nip= new.nip;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dosen_matkul`
--

CREATE TABLE `dosen_matkul` (
  `no` int(2) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_dosen`
--

CREATE TABLE `log_dosen` (
  `id_log` int(6) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `waktu_insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_dosen`
--

INSERT INTO `log_dosen` (`id_log`, `nip`, `waktu_insert`, `waktu_update`, `nama`, `password`) VALUES
(5, '8483898722', '2024-10-22 13:58:41', '2024-10-22 14:00:01', 'flu', 'udah');

-- --------------------------------------------------------

--
-- Table structure for table `log_mahasiswa`
--

CREATE TABLE `log_mahasiswa` (
  `id_log` int(6) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `rfid` varchar(20) DEFAULT NULL,
  `waktu_insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_mahasiswa`
--

INSERT INTO `log_mahasiswa` (`id_log`, `nim`, `rfid`, `waktu_insert`, `waktu_update`, `nama`, `password`) VALUES
(52, 'C4124112', '8329879857317598', '2024-10-22 14:16:02', '2024-10-22 14:17:09', 'jabal labaj', 'oii kiyomassa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `rfid` varchar(20) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_tgl_lahir` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `id_prodi` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `password` varchar(75) NOT NULL,
  `token` varchar(75) DEFAULT NULL,
  `token_expired` timestamp NULL DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `rfid`, `nama`, `jenis_kelamin`, `tempat_tgl_lahir`, `email`, `no_telp`, `alamat`, `id_prodi`, `semester`, `password`, `token`, `token_expired`, `foto`) VALUES
('83838E9', NULL, 'afdd', 'Laki-laki', 'jember', 'asd', '12133123', 'asfeee', 1, 2, 'asdfaw', NULL, '2024-10-23 08:17:20', NULL),
('C4124112', '8329879857317598', 'jabal labaj', 'Laki-laki', 'jember', 'jabal@gmail.com', '08849824843', 'adojj', 1, 2, 'oii kiyomassa', NULL, '2024-10-23 08:17:20', NULL);

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `tambah_mhs` AFTER INSERT ON `mahasiswa` FOR EACH ROW BEGIN
INSERT INTO log_mahasiswa (waktu_insert, waktu_update, rfid, nim, password, nama) VALUES (now(), now(), new.rfid, new.nim, new.password, new.nama);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_mhs` AFTER UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
UPDATE  log_mahasiswa SET rfid = new.rfid, waktu_update = now(), nama = new.nama, password = new.password WHERE nim= new.nim;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `id_tahun_ajar` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `id_prodi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `no_transaksi` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_prodi` int(2) NOT NULL,
  `nama_prodi` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajar` int(2) NOT NULL,
  `nama_tahun_ajar` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD KEY `nip` (`nip`),
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
  ADD UNIQUE KEY `rfid` (`rfid`),
  ADD KEY `program_studi` (`id_prodi`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `program_studi` (`id_prodi`),
  ADD KEY `id_tahun_ajar` (`id_tahun_ajar`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_dosen`
--
ALTER TABLE `log_dosen`
  MODIFY `id_log` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  MODIFY `id_log` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_prodi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajar` int(2) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`id_tahun_ajar`) REFERENCES `tahun_ajaran` (`id_tahun_ajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_studi` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

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
