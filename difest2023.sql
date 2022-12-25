-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 01:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `difest-2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_maskot`
--

CREATE TABLE `pendaftaran_maskot` (
  `id_pendaftaran_maskot` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `scan_kartu` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_photography`
--

CREATE TABLE `pendaftaran_photography` (
  `id_pendaftaran_photography` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `scan_kartu` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_poster`
--

CREATE TABLE `pendaftaran_poster` (
  `id_pendaftaran_poster` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `scan_kartu` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_web`
--

CREATE TABLE `pendaftaran_web` (
  `id_pendaftaran_web` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(30) NOT NULL,
  `instansi` varchar(40) NOT NULL,
  `nama_tim` varchar(40) NOT NULL,
  `nama_anggota1` varchar(255) NOT NULL,
  `alamat_anggota1` text NOT NULL,
  `wa_anggota1` varchar(20) NOT NULL,
  `instagram_anggota1` varchar(40) NOT NULL,
  `scan_kartu_anggota1` varchar(255) NOT NULL,
  `nama_anggota2` varchar(255) NOT NULL,
  `alamat_anggota2` text NOT NULL,
  `wa_anggota2` varchar(20) NOT NULL,
  `instagram_anggota2` varchar(40) NOT NULL,
  `scan_kartu_anggota2` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `foto`) VALUES
(1, 'Renaldi Noviandi', 'renaldin', '9d0f5039a75d27b353ff57ad9a56fcb7', 'foto.jpg'),
(5, 'Taupik Herdiansyah', 'admintaupik', '460c60587104971e5961bf3b0e969f4b', NULL),
(6, 'Alvin Triyanto', 'adminalvin', '6a88650847b25c842712b2622a3c06ce', NULL),
(7, 'Monica Sandra', 'adminmonica', '7bf80c3be8c8f8926727fbda08d3eb46', NULL),
(8, 'Amelia Rosamaida', 'adminamelia', 'c8ac8ff62c1c4dacaa12a5234bc0ff36', NULL),
(9, 'Tania', 'admintania', '5bda4f7b2a67ce04e1628871d48af5ca', NULL),
(10, 'Galuh', 'admingaluh', '35ee0f6ec2e97ad6559aa4c310a1e260', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_maskot`
--
ALTER TABLE `pendaftaran_maskot`
  ADD PRIMARY KEY (`id_pendaftaran_maskot`);

--
-- Indexes for table `pendaftaran_photography`
--
ALTER TABLE `pendaftaran_photography`
  ADD PRIMARY KEY (`id_pendaftaran_photography`);

--
-- Indexes for table `pendaftaran_poster`
--
ALTER TABLE `pendaftaran_poster`
  ADD PRIMARY KEY (`id_pendaftaran_poster`);

--
-- Indexes for table `pendaftaran_web`
--
ALTER TABLE `pendaftaran_web`
  ADD PRIMARY KEY (`id_pendaftaran_web`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_maskot`
--
ALTER TABLE `pendaftaran_maskot`
  MODIFY `id_pendaftaran_maskot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_photography`
--
ALTER TABLE `pendaftaran_photography`
  MODIFY `id_pendaftaran_photography` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_poster`
--
ALTER TABLE `pendaftaran_poster`
  MODIFY `id_pendaftaran_poster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_web`
--
ALTER TABLE `pendaftaran_web`
  MODIFY `id_pendaftaran_web` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
