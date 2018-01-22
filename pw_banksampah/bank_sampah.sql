-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2017 pada 02.42
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_sampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sampah`
--

CREATE TABLE `data_sampah` (
  `id` int(11) NOT NULL,
  `penyetor` varchar(225) DEFAULT NULL,
  `jenis_sampah` varchar(225) DEFAULT NULL,
  `detail_sampah` varchar(255) DEFAULT NULL,
  `berat_sampah` int(110) DEFAULT NULL,
  `poin` int(110) DEFAULT NULL,
  `tgl_dikerjakan` varchar(225) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sampah`
--

INSERT INTO `data_sampah` (`id`, `penyetor`, `jenis_sampah`, `detail_sampah`, `berat_sampah`, `poin`, `tgl_dikerjakan`, `deskripsi`, `foto`) VALUES
(18, 'XRPL5', 'Organik', 'Daun', 5, 25, NULL, NULL, NULL),
(19, 'XTKJ4', 'An-organik', 'Kaca', 10, 50, '12/20/2017', 'dibuat pigura, dijual ke siswa yang remidi senbud', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_staff`
--

CREATE TABLE `data_staff` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kelas` varchar(225) NOT NULL,
  `posisi` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_staff`
--

INSERT INTO `data_staff` (`id`, `nis`, `nama`, `kelas`, `posisi`, `username`, `password`) VALUES
(1, 1, 'Admin', 'XIIR1', 'Admin', 'admin', 'admin'),
(8, 2, 'Pengelola', 'XIIR2', 'Pengelola', 'pengelola', 'pengelola'),
(11, 124, 'Dwi Valentino Abdi Nugroho', 'XIITKJ1', 'Petugas', 'dwi', 'dwi'),
(16, 123, 'Nur Izza Lutful Rizqiani', 'XIRPL4', 'Petugas', 'izza', 'izza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`) VALUES
(1, 'XRPL1'),
(2, 'XRPL2'),
(3, 'XRPL3'),
(4, 'XRPL4'),
(5, 'XRPL5'),
(6, 'XRPL6'),
(7, 'XTKJ1'),
(8, 'XTKJ2'),
(9, 'XTKJ3'),
(10, 'XTKJ4'),
(11, 'XTKJ5'),
(12, 'XTKJ6'),
(13, 'XIRPL1'),
(14, 'XIRPL2'),
(15, 'XIRPL3'),
(16, 'XIRPL4'),
(17, 'XIRPL5'),
(18, 'XIRPL6'),
(19, 'XITKJ1'),
(20, 'XITKJ2'),
(21, 'XITKJ3'),
(22, 'XITKJ4'),
(23, 'XITKJ5'),
(24, 'XITKJ6'),
(25, 'XIIRPL1'),
(26, 'XIIRPL2'),
(27, 'XIIRPL3'),
(28, 'XIIRPL4'),
(29, 'XIIRPL5'),
(30, 'XIIRPL6'),
(31, 'XIITKJ1'),
(32, 'XIITKJ2'),
(33, 'XIITKJ3'),
(34, 'XIITKJ4'),
(35, 'XIITKJ5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sampah`
--
ALTER TABLE `data_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_staff`
--
ALTER TABLE `data_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sampah`
--
ALTER TABLE `data_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `data_staff`
--
ALTER TABLE `data_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
