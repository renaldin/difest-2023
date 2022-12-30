-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 17.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `difest-2023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `jenis_lomba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `nama`, `tanggal`, `jenis_lomba`) VALUES
(1, 'Tim Jago', '2022-12-28 14:10:46', 'Desain Web'),
(2, 'Renaldi Noviandi', '2022-12-28 15:29:09', 'Desain Maskot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maskot`
--

CREATE TABLE `maskot` (
  `id_pendaftaran_maskot` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jenis_lomba` varchar(20) DEFAULT 'Desain Maskot',
  `nama_peserta` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `scan_kartu` text DEFAULT NULL,
  `bukti_igdifest` text DEFAULT NULL,
  `bukti_ighimmi` text DEFAULT NULL,
  `bukti_ythimmi` text DEFAULT NULL,
  `bukti_pembayaran` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maskot`
--

INSERT INTO `maskot` (`id_pendaftaran_maskot`, `email`, `jenis_lomba`, `nama_peserta`, `alamat`, `instansi`, `wa`, `scan_kartu`, `bukti_igdifest`, `bukti_ighimmi`, `bukti_ythimmi`, `bukti_pembayaran`, `tanggal`) VALUES
(2, 'renaldinoviandi9@gmail.com', 'Desain Maskot', 'Renaldi Noviandi', 'Subang', 'SMAN 1 Jalancagak', '083845405765', '1672101444_cd4b5920e8f9b239affe.png', '1672101444_c8802a89db88e30184b8.png', '1672101444_0412dbea443df48d89de.png', '1672101444_ddbcdfa951c116aaca94.png', '1672101444_ca53ced2169e440b8d05.png', '2022-12-28 13:58:36'),
(3, 'renaldinoviandi0@gmail.com', 'Desain Maskot', 'Renaldi Noviandi 2', 'Bandung', 'SMAN 1 Jalancagak', '083845405760', '1672103047_eeeeea5bf47928879321.png', '1672103047_413848a454f1826e8beb.png', '1672103047_05a1e5dd8cc2dde36a41.png', '1672103047_6dee59399a2ab652cb89.png', '1672103047_ea554c1179857b30ccee.png', '2022-12-28 13:58:36'),
(4, 'renaldi@gmail.com', 'Desain Maskot', 'Renaldi Noviandi', 'Bandung', 'SMAN 1 Jalancagak', '083845405765', '1672241349_81b478bbeee87341cf32.png', '1672241349_d6493f8bafa3020a6dde.png', '1672241349_61a77f5b648cd145d5f5.png', '1672241349_5695eee25d79a9a0a2a1.png', '1672241349_3846b005bedac78f6ddd.png', '2022-12-28 15:29:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photography`
--

CREATE TABLE `photography` (
  `id_pendaftaran_photography` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(20) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `scan_kartu` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photography`
--

INSERT INTO `photography` (`id_pendaftaran_photography`, `email`, `jenis_lomba`, `nama_peserta`, `alamat`, `instansi`, `wa`, `scan_kartu`, `bukti_igdifest`, `bukti_ighimmi`, `bukti_ythimmi`, `bukti_pembayaran`, `tanggal`) VALUES
(1, 'renaldinoviandi9@gmail.com', 'Photography', 'Renaldi Noviandi', 'Bandung', 'SMAN 1 Jalancagak', '083845405765', '1672188989_5167af55580a691b514d.jpg', '1672188989_bf22c888e2c0bb82547a.jpg', '1672188989_f3bb95d9f9285c95f92f.jpg', '1672188989_acdc29a32b6ae6aa2a3d.jpg', '1672188989_dab95ecc83527e662217.jpg', '2022-12-28 13:59:43'),
(2, 'renaldinoviandi0@gmail.com', 'Photography', 'Renaldi Noviandi 2', 'Subang', 'SMAN 2 Jalancagak', '083845405765', '1672189099_8eb5e524a3eaf43ba350.png', '1672189099_8fb93dad8c8c7f29e92d.png', '1672189099_442b8e031c85a7b30cac.png', '1672189099_30a68d9481477d26a4d7.png', '1672189099_e2fe8542185219bdd70a.png', '2022-12-28 13:59:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poster`
--

CREATE TABLE `poster` (
  `id_pendaftaran_poster` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(20) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `scan_kartu` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poster`
--

INSERT INTO `poster` (`id_pendaftaran_poster`, `email`, `jenis_lomba`, `nama_peserta`, `alamat`, `instansi`, `wa`, `scan_kartu`, `bukti_igdifest`, `bukti_ighimmi`, `bukti_ythimmi`, `bukti_pembayaran`, `tanggal`) VALUES
(1, 'renaldinoviandi9@gmail.com', 'Desain Poster', 'Renaldi Noviandi', 'Subang', 'SMAN 1 Jalancagak', '083845405765', '1672174625_2e2f8e3e4f82c3cb2f6a.png', '1672174625_ddea90dc547c4e83c165.png', '1672174625_1dd0317ccf5f98f83ab4.png', '1672174625_6f08e76a37dc8329a6cd.png', '1672174625_73f8a845794b55e84154.png', '2022-12-28 14:00:18'),
(2, 'renaldinoviandi0@gmail.com', 'Desain Poster', 'Renaldi Noviandi 2', 'Bandung', 'SMAN 2 Jalancagak', '083845405765', '1672174757_4414ca0f9dc0a1c1947d.png', '1672174757_89158c0b11fae5cf60fd.png', '1672174757_b6b58aa364e7fa2c108c.png', '1672174757_d0e0b49c5fca81265917.png', '1672174757_0a6b70fdc22e498176db.png', '2022-12-28 14:00:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `short_movie`
--

CREATE TABLE `short_movie` (
  `id_pendaftaran_movie` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jenis_lomba` varchar(30) NOT NULL DEFAULT 'Short Movie',
  `instansi` varchar(40) DEFAULT NULL,
  `nama_tim` varchar(40) DEFAULT NULL,
  `wa` varchar(20) NOT NULL,
  `nama_anggota1` varchar(255) DEFAULT NULL,
  `alamat_anggota1` text DEFAULT NULL,
  `scan_kartu_anggota1` varchar(255) DEFAULT NULL,
  `nama_anggota2` varchar(255) DEFAULT NULL,
  `alamat_anggota2` text DEFAULT NULL,
  `scan_kartu_anggota2` varchar(255) DEFAULT NULL,
  `nama_anggota3` varchar(100) DEFAULT NULL,
  `alamat_anggota3` varchar(100) DEFAULT NULL,
  `scan_kartu_anggota3` varchar(255) NOT NULL,
  `nama_anggota4` varchar(100) DEFAULT NULL,
  `alamat_anggota4` varchar(100) DEFAULT NULL,
  `scan_kartu_anggota4` varchar(255) DEFAULT NULL,
  `nama_anggota5` varchar(100) DEFAULT NULL,
  `alamat_anggota5` varchar(100) DEFAULT NULL,
  `scan_kartu_anggota5` varchar(255) DEFAULT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `short_movie`
--

INSERT INTO `short_movie` (`id_pendaftaran_movie`, `email`, `jenis_lomba`, `instansi`, `nama_tim`, `wa`, `nama_anggota1`, `alamat_anggota1`, `scan_kartu_anggota1`, `nama_anggota2`, `alamat_anggota2`, `scan_kartu_anggota2`, `nama_anggota3`, `alamat_anggota3`, `scan_kartu_anggota3`, `nama_anggota4`, `alamat_anggota4`, `scan_kartu_anggota4`, `nama_anggota5`, `alamat_anggota5`, `scan_kartu_anggota5`, `bukti_igdifest`, `bukti_ighimmi`, `bukti_ythimmi`, `bukti_pembayaran`, `tanggal`) VALUES
(1, 'renaldinoviandi0@gmail.com', 'Short Movie', 'SMAN 1 Jalancagak', 'Tim Ku', '083845405760', 'Renaldi ', 'Subang', '1672231316_4c471b8f1ecc8fc7d135.png', 'Alvin', 'Sumedang', '1672231316_56cfaa3da847cb1e88e0.png', 'Fadla', 'Subang', '1672231316_55d20a7dd67c3ef66cb6.png', '', '', '', '', '', '', '1672231316_6c8041ea2f9e1c4e93e0.png', '1672231316_643adb126799da3613d7.png', '1672231316_8a68682081f7b9bf9d70.png', '1672231316_8b0359b7de0312adf12f.png', '2022-12-28 14:00:54'),
(2, 'renaldinoviandi9@gmail.com', 'Short Movie', 'SMAN 1 Jalancagak', 'Tim Jagooo', '083845405760', 'Renaldi ', 'Subang', '1672231530_1456cd6054ec0a247ab1.png', 'Alvin', 'Sumedang', '1672231530_2c141c91c730b436e7cf.png', 'Fadla', 'Subang', '1672231530_85b807bb2de68b30e3cf.png', 'Cahyu', 'Subang', '1672231530_59f4a163d660f46c157e.png', 'Jago', 'Subang', '1672231530_389cd3366f3f3562abcf.png', '1672231530_17c0e30db54a5cb3c3c8.jpg', '1672231530_aba0da316f33254551c0.jpg', '1672231530_ca041e6fd31961ca7478.jpg', '1672231530_dbdc9e9f6e85177c4288.jpg', '2022-12-28 14:00:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Panitia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(1, 'Renaldi Noviandi', 'admindifest2023', '81ce825ec1ace3ee7cf7e92df2cc9905', 'Admin'),
(12, 'Renaldi Test 2', 'renalditest2', '92c9129db92a36caf0275c0c79a7d0eb', 'Panitia'),
(14, 'Renaldi Test 4', 'renalditest4', '706ad3ab9b84659fa84f46545cd40677', 'Panitia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web`
--

CREATE TABLE `web` (
  `id_pendaftaran_web` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_lomba` varchar(30) NOT NULL DEFAULT 'Desain Web',
  `instansi` varchar(40) NOT NULL,
  `nama_tim` varchar(40) NOT NULL,
  `nama_anggota1` varchar(255) NOT NULL,
  `alamat_anggota1` text NOT NULL,
  `wa_anggota1` varchar(20) NOT NULL,
  `scan_kartu_anggota1` varchar(255) NOT NULL,
  `nama_anggota2` varchar(255) NOT NULL,
  `alamat_anggota2` text NOT NULL,
  `wa_anggota2` varchar(20) NOT NULL,
  `scan_kartu_anggota2` varchar(255) NOT NULL,
  `bukti_igdifest` varchar(255) NOT NULL,
  `bukti_ighimmi` varchar(255) NOT NULL,
  `bukti_ythimmi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `web`
--

INSERT INTO `web` (`id_pendaftaran_web`, `email`, `jenis_lomba`, `instansi`, `nama_tim`, `nama_anggota1`, `alamat_anggota1`, `wa_anggota1`, `scan_kartu_anggota1`, `nama_anggota2`, `alamat_anggota2`, `wa_anggota2`, `scan_kartu_anggota2`, `bukti_igdifest`, `bukti_ighimmi`, `bukti_ythimmi`, `bukti_pembayaran`, `tanggal`) VALUES
(1, 'renaldinoviandi9@gmail.com', 'Desain Web', 'SMAN 1 Jalancagak', 'Tim Jago', 'Renaldi ', 'Subang', '083848789345', '1672168739_07e01ffd83569f3caeb2.png', 'Alvin', 'Sumedang', '089848789345', '1672168739_1364b8ec522820c4e069.png', '1672168739_c0d1fb3286615ca61877.png', '1672168739_a6c2d8dd4078cda0c58e.png', '1672168739_5a88ee13fa67c4a55638.png', '1672168739_77efb4961a8a4a18eb53.png', '2022-12-28 14:01:44'),
(2, 'renaldinoviandi0@gmail.com', 'Desain Web', 'SMAN 1 Jalancagak', 'Tim Kancil', 'Renaldi ', 'Subang', '083848789345', '1672168871_cbd594429186d587dd2f.png', 'Alvin', 'Sumedang', '089848789345', '1672168871_4836879c46c0e7f05797.png', '1672168871_850392e54df1357db7cb.png', '1672168871_45efb6e490311f786fc7.png', '1672168871_10229a11559fb73a2487.png', '1672168871_3d7b778003aa380fc514.png', '2022-12-28 14:01:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `maskot`
--
ALTER TABLE `maskot`
  ADD PRIMARY KEY (`id_pendaftaran_maskot`);

--
-- Indeks untuk tabel `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id_pendaftaran_photography`);

--
-- Indeks untuk tabel `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id_pendaftaran_poster`);

--
-- Indeks untuk tabel `short_movie`
--
ALTER TABLE `short_movie`
  ADD PRIMARY KEY (`id_pendaftaran_movie`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id_pendaftaran_web`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maskot`
--
ALTER TABLE `maskot`
  MODIFY `id_pendaftaran_maskot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `photography`
--
ALTER TABLE `photography`
  MODIFY `id_pendaftaran_photography` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `poster`
--
ALTER TABLE `poster`
  MODIFY `id_pendaftaran_poster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `short_movie`
--
ALTER TABLE `short_movie`
  MODIFY `id_pendaftaran_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `web`
--
ALTER TABLE `web`
  MODIFY `id_pendaftaran_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
