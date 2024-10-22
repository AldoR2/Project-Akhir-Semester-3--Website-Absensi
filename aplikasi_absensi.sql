-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2024 pada 09.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan') NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` text NOT NULL,
  `pasword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `email`, `jenis_kelamin`, `no_telp`, `alamat`, `pasword`) VALUES
('12345678910', 'Bimaa Achmad', 'bimaachmad@gmail.com', 'perempuan', '082279882265', 'Desa Selogudig Wetan Kec. Pajarakan, Kab. Probolinggo', '$2y$10$bUFpVD6SinMF.cduoIsGGei18Bh0haKdUJt/r49Sn//ZTzp9ycgMu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_matkul`
--

CREATE TABLE `dosen_matkul` (
  `no` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_dosen`
--

CREATE TABLE `log_dosen` (
  `id_log` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(200) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_dosen`
--

INSERT INTO `log_dosen` (`id_log`, `nip`, `waktu`, `nama`, `password`) VALUES
(1, '8719687416873', '2024-09-19 15:18:08', 'Udin yang pertamaa', '1324132413241');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_mahasiswa`
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
-- Dumping data untuk tabel `log_mahasiswa`
--

INSERT INTO `log_mahasiswa` (`id_log`, `waktu`, `nim`, `nama`, `golongan`, `password`) VALUES
(1, '2024-09-19 15:30:33', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231'),
(2, '2024-09-25 14:07:04', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231'),
(3, '2024-09-25 14:07:15', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231'),
(4, '2024-09-25 14:14:56', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231'),
(5, '2024-09-25 14:15:14', 'E4123123', 'Bimaa Penegak kebenaran', 'c', '12321231'),
(6, '2024-09-25 14:16:49', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(7, '2024-09-25 14:44:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(8, '2024-09-25 14:45:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(9, '2024-09-25 14:46:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(10, '2024-09-25 14:47:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(11, '2024-09-25 14:48:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(12, '2024-09-25 14:48:34', 'E4123412', 'Udin sedunia', '', '1234123'),
(13, '2024-09-25 14:49:34', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(14, '2024-09-25 14:49:34', 'E4123412', 'Udin sedunia', '', '1234123'),
(15, '2024-09-25 14:49:51', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(16, '2024-09-25 14:49:51', 'E4123412', 'Udin sedunia', '', '1234123'),
(17, '2024-09-25 14:50:51', 'E1234123', '', '', ''),
(18, '2024-09-25 14:50:51', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(19, '2024-09-25 14:50:51', 'E4123412', 'Udin sedunia', '', '1234123'),
(20, '2024-09-25 14:53:00', 'E1234123', '', '', ''),
(21, '2024-09-25 14:53:00', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(22, '2024-09-25 14:53:00', 'E4123412', 'Udin sedunia', '', '1234123'),
(23, '2024-09-25 14:54:00', 'E1234123', '', '', ''),
(24, '2024-09-25 14:54:00', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(25, '2024-09-25 14:54:00', 'E4123412', 'Udin sedunia', '', '1234123'),
(26, '2024-09-25 14:55:00', 'E1234123', '', '', ''),
(27, '2024-09-25 14:55:00', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(28, '2024-09-25 14:55:00', 'E4123412', 'Udin sedunia', '', '1234123'),
(29, '2024-09-25 14:55:00', 'F51235132', '', '', ''),
(30, '2024-09-25 15:02:59', 'D51325123', 'Jahenuri', '', ''),
(31, '2024-09-25 15:02:59', 'E1234123', '', '', ''),
(32, '2024-09-25 15:02:59', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(33, '2024-09-25 15:02:59', 'E4123412', 'Udin sedunia', '', '1234123'),
(34, '2024-09-25 15:02:59', 'F51235132', '', '', ''),
(35, '2024-09-25 15:02:59', 'J51325132', 'Munip', '', ''),
(36, '2024-09-25 15:03:59', 'D51325123', 'Jahenuri', '', ''),
(37, '2024-09-25 15:03:59', 'E1234123', '', '', ''),
(38, '2024-09-25 15:03:59', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(39, '2024-09-25 15:03:59', 'E4123412', 'Udin sedunia', '', '1234123'),
(40, '2024-09-25 15:03:59', 'F51235132', '', '', ''),
(41, '2024-09-25 15:03:59', 'J51325132', 'Munip', '', ''),
(42, '2024-09-25 15:04:59', 'D51325123', 'Jahenuri', '', ''),
(43, '2024-09-25 15:04:59', 'E1234123', '', '', ''),
(44, '2024-09-25 15:04:59', 'E4123123', 'Bimaa Penegak kebenaran', '', '12321231'),
(45, '2024-09-25 15:04:59', 'E4123412', 'Udin sedunia', '', '1234123'),
(46, '2024-09-25 15:04:59', 'F51235132', '', '', ''),
(47, '2024-09-25 15:04:59', 'J51325132', 'Munip', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` char(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `email`, `no_telp`, `program_studi`, `semester`, `alamat`, `pasword`) VALUES
('E41231111', 'Ferdiyan Ilham Siddiqi', 'Perempuan', 'ferdi123@gmail.com', '082718261728', 'S1 Ilmu Keperawatan & NERS', 5, 'aafdaf', '$2y$10$M1J7TKMA6yXpWN2Yj1Ri5uYhyx.nsNqoZgXZLyU.Bu7pV9K9tQIjW'),
('E41231324', 'Muhammad Diega S', 'Laki-laki', 'syahdega555@gmail.com', '082279882294', 'S1 Farmasi', 1, 'Desa Selogudig Wetan Kec. Pajarakan, Kab. Probolinggo', '$2y$10$Uk2YI1egghHdeiounkdqs.xCgwEZyvXkkP8HpVmmp//8R3S50jqfm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `log_dosen`
--
ALTER TABLE `log_dosen`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `nip_dosen` (`nip`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen_matkul`
--
ALTER TABLE `dosen_matkul`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_dosen`
--
ALTER TABLE `log_dosen`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `nip_dosen` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `kode_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
