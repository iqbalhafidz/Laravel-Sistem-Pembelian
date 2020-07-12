-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 10:30 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasco`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `keterangan`, `foto`, `harga`, `diskon`, `created_at`, `updated_at`) VALUES
(1, 'Jasco Lis Bordir', 'Jasco Lis Bordir Motif wayang', 'images/produk/foto_Jasco-Lis-Bordir.jpeg', '100.000', '120.000', '2020-06-30 04:44:58', '2020-06-30 04:44:58'),
(2, 'Jasco Lis Emas', 'jasco Lis Emas Motif Bunga', 'images/produk/foto_Jasco-Lis-Emas.jpeg', '90.000', '100.000', '2020-06-30 04:45:57', '2020-06-30 04:45:57'),
(3, 'jasco gamis', 'jasco model gamis', 'images/produk/foto_jasco-gamis.jpeg', '120.000', '130.000', '2020-06-30 04:46:42', '2020-06-30 04:46:42'),
(4, 'jasco batik solo', 'Jasco Model Batik solo\r\nJasco Model Batik solo\r\nJasco Model Batik solo\r\nJasco Model Batik soloJasco Model Batik solo', 'images/produk/foto_jasco-batik-solo.jpeg', '115.000', '130.000', '2020-06-30 04:47:46', '2020-07-06 01:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
