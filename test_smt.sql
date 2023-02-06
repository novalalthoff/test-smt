-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2023 at 04:45 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.3RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_smt`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id` int(11) NOT NULL,
  `kode_jurusan` char(3) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`created_at`, `updated_at`, `deleted_at`, `id`, `kode_jurusan`, `nama`) VALUES
('2023-02-06 17:54:57', NULL, NULL, 1, 'T01', 'Teknik Informatika'),
('2023-02-06 17:54:57', NULL, NULL, 2, 'T02', 'Sistem Informasi'),
('2023-02-06 17:54:57', NULL, NULL, 3, 'T03', 'Desain Komunikasi Visual'),
('2023-02-06 17:54:57', NULL, NULL, 4, 'F01', 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id` int(11) NOT NULL,
  `nim` char(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode_jurusan` char(3) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`created_at`, `updated_at`, `deleted_at`, `id`, `nim`, `nama`, `kode_jurusan`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
('2023-02-06 17:54:13', NULL, NULL, 1, 'A1919', 'Andien', 'T01', 'Semarang', '2005-04-10', 'Jl. Stonen Timur 7A, Gajah Mungkur, Semarang'),
('2023-02-06 17:54:13', '2023-02-06 15:10:17', NULL, 2, 'A1920', 'Ahmad', 'T01', 'Kendal', '1999-12-07', 'Jalan Bayam, RT 1, RW 9, Patebon, Kab. Kendal'),
('2023-02-06 17:54:13', NULL, NULL, 3, 'A1921', 'Bambang', 'T01', 'Semarang', '2003-08-08', 'Jl. Sisingamangaraja No. 9, Kota Semarang'),
('2023-02-06 17:54:13', NULL, NULL, 4, 'B1901', 'Zain', 'F01', 'Jepara', '2000-07-20', 'Desa Keling, Kelet, Jepara'),
('2023-02-06 15:59:25', '2023-02-06 16:03:25', '2023-02-06 16:03:25', 5, 'A1922', 'Noval A', 'T03', 'Jakarta', '1998-11-27', 'Jl. Pucang Permai II No. 1'),
('2023-02-06 16:09:16', '2023-02-06 16:10:13', '2023-02-06 16:10:13', 8, 'A1923', 'Noval Althoff', 'T03', 'Jakarta', '1998-11-27', 'Jl. Pucang Permai II No. 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
