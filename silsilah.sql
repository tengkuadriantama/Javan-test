-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silsilah`
--

-- --------------------------------------------------------

--
-- Table structure for table `keturunan`
--

CREATE TABLE `keturunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_bapak` varchar(50) DEFAULT NULL,
  `nama_anak` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `jenis_kelamin_anak` enum('laki-laki','perempuan') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keturunan`
--

INSERT INTO `keturunan` (`id`, `nama`, `nama_bapak`, `nama_anak`, `jenis_kelamin`, `jenis_kelamin_anak`, `created_at`, `updated_at`) VALUES
(1, 'budi', NULL, 'dedi', 'laki-laki', 'laki-laki', NULL, NULL),
(2, 'budi', NULL, 'dodi', 'laki-laki', 'laki-laki', NULL, NULL),
(3, 'budi', NULL, 'dede', 'laki-laki', 'laki-laki', NULL, NULL),
(4, 'budi', NULL, 'dewi', 'perempuan', 'perempuan', NULL, NULL),
(5, 'dedi', 'budi', 'fery', 'laki-laki', 'laki-laki', NULL, NULL),
(6, 'dedi', 'budi', 'farah', 'laki-laki', 'perempuan', NULL, NULL),
(7, 'dodi', 'budi', 'gugus', 'laki-laki', 'laki-laki', NULL, NULL),
(8, 'dodi', 'budi', 'gandi', 'laki-laki', 'laki-laki', NULL, NULL),
(9, 'dede', 'budi', 'hani', 'laki-laki', 'perempuan', NULL, NULL),
(10, 'dede', 'budi', 'hana', 'laki-laki', 'perempuan', NULL, NULL),
(11, 'dewi', 'budi', NULL, 'perempuan', 'perempuan', NULL, '2022-11-14 05:31:29'),
(14, 'testupdatessasdasdasssssds', 'testupdatebapasssk', 'testupdateanak', 'laki-laki', 'perempuan', '2022-11-14 06:50:13', '2022-11-14 07:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keturunan`
--
ALTER TABLE `keturunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keturunan`
--
ALTER TABLE `keturunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
