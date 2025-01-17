-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalsmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_tanggal` date DEFAULT NULL,
  `berita_judul` varchar(255) DEFAULT NULL,
  `berita_gambar` varchar(255) DEFAULT NULL,
  `berita_isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftaran_id` int(11) NOT NULL,
  `pendaftaran_nama` varchar(100) NOT NULL,
  `pendaftaran_tgllahir` date NOT NULL,
  `pendaftaran_alamat` varchar(100) NOT NULL,
  `pendaftaran_email` varchar(50) NOT NULL,
  `pendaftaran_ortu` varchar(100) NOT NULL,
  `pendaftaran_kontak` varchar(20) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `pendaftaran_tanggal` date NOT NULL DEFAULT current_timestamp(),
  `pendaftaran_akta` varchar(15) NOT NULL,
  `pendaftaran_kk` varchar(15) NOT NULL,
  `pendaftaran_ijazah` varchar(15) NOT NULL,
  `pendaftaran_pasfoto` varchar(15) NOT NULL,
  `pendaftaran_ta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `riwayat_ta` varchar(20) NOT NULL,
  `riwayat_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `sekolah_id` int(11) NOT NULL,
  `sekolah_nama` varchar(200) NOT NULL,
  `sekolah_npsn` varchar(50) NOT NULL,
  `sekolah_deskripsi` text NOT NULL,
  `sekolah_lokasi` varchar(200) NOT NULL,
  `sekolah_medsos` text NOT NULL,
  `sekolah_kelurahan` varchar(50) NOT NULL,
  `sekolah_kecamatan` varchar(50) NOT NULL,
  `sekolah_foto` varchar(50) NOT NULL,
  `sekolah_peta` text NOT NULL,
  `sekolah_region` varchar(50) NOT NULL DEFAULT 'Kota Kupang',
  `sekolah_provinsi` varchar(50) NOT NULL DEFAULT 'NTT',
  `sekolah_pos` varchar(20) NOT NULL,
  `sekolah_tipe` enum('Swasta','Nageri') NOT NULL,
  `sekolah_waktupenyelenggara` date NOT NULL,
  `sekolah_telepon` varchar(20) NOT NULL,
  `sekolah_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `ta_id` int(11) NOT NULL,
  `ta_tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(120) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_password`) VALUES
(2, 'admin', '$2y$10$p9JIgiFiuuBU0idnyTbF9uIB3N/pSWB83FWlmVNgOPcMqI2TvM8vG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD KEY `sekolah_id` (`sekolah_id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`sekolah_id`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`ta_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftaran_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `sekolah_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`sekolah_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`sekolah_id`) REFERENCES `sekolah` (`sekolah_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
