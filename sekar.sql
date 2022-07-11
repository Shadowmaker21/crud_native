-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 11:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekar`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri_surat`
--

CREATE TABLE `galeri_surat` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_surat`
--

INSERT INTO `galeri_surat` (`id`, `nama_surat`, `nomor_surat`, `ket`, `foto`) VALUES
(1, 'OJK', '12', 'Denda Senilai Rp. 12.000', 'OJK-doraempon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_pen`
--

CREATE TABLE `user_pen` (
  `id` int(11) NOT NULL,
  `nip_pen` varchar(50) NOT NULL,
  `nama_pen` varchar(100) NOT NULL,
  `jabatan_pen` varchar(50) NOT NULL,
  `nom_mw_pen` varchar(50) NOT NULL,
  `saham_wm_pen` varchar(50) NOT NULL,
  `nama_pers_pen` varchar(100) NOT NULL,
  `jenis_ush_pen` varchar(100) NOT NULL,
  `saham_lain_pen` varchar(50) NOT NULL,
  `hub_keu` varchar(50) NOT NULL,
  `hub_kel` varchar(50) NOT NULL,
  `mul_jab` date NOT NULL,
  `akh_jab` date NOT NULL,
  `date_akta` date NOT NULL,
  `akta_rups` varchar(100) NOT NULL,
  `foto_ojk` varchar(50) NOT NULL,
  `ket_ojk` varchar(100) NOT NULL,
  `date_ojk` date NOT NULL,
  `foto_sertif` varchar(100) NOT NULL,
  `jenis_sertif` varchar(50) NOT NULL,
  `tempo_ser` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_ps`
--

CREATE TABLE `user_ps` (
  `id` int(11) NOT NULL,
  `nip_ps` varchar(50) NOT NULL,
  `nama_ps` varchar(100) NOT NULL,
  `nom_wm` varchar(50) NOT NULL,
  `saham_wm` varchar(100) NOT NULL,
  `nama_pers` varchar(100) NOT NULL,
  `jenis_ush` varchar(100) NOT NULL,
  `saham_lain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ps`
--

INSERT INTO `user_ps` (`id`, `nip_ps`, `nama_ps`, `nom_wm`, `saham_wm`, `nama_pers`, `jenis_ush`, `saham_lain`) VALUES
(1, '', 'TAN UDJAN SUGIARTO', '35,200,000,000', '50.29%', 'PT DWI KARYA AKBAR', 'KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA', '51.00%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri_surat`
--
ALTER TABLE `galeri_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pen`
--
ALTER TABLE `user_pen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ps`
--
ALTER TABLE `user_ps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri_surat`
--
ALTER TABLE `galeri_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_pen`
--
ALTER TABLE `user_pen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ps`
--
ALTER TABLE `user_ps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
