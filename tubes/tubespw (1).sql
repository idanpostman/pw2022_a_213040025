-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`id_keluar`, `id_barang`, `tanggal`, `penerima`, `qty`) VALUES
(15, 17, '2022-05-24 05:15:02', 'Atlantic Cellular', 50),
(17, 17, '2022-05-24 06:22:16', 'Mimi', 2),
(18, 17, '2022-06-01 12:34:56', 'Haykal', 5),
(19, 17, '2022-06-03 02:26:45', 'Ainan', 1),
(20, 17, '2022-06-03 02:26:58', 'Afandi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id_masuk`, `id_barang`, `tanggal`, `keterangan`, `qty`) VALUES
(28, 30, '2022-05-24 06:21:22', 'Junaedi', 5),
(30, 17, '2022-05-26 10:48:42', 'Ahmad', 10),
(31, 17, '2022-05-28 00:06:10', 'Gilman', 2),
(32, 29, '2022-06-08 09:40:04', 'Haykal', 10),
(33, 17, '2022-06-08 10:11:49', 'Koko', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_barang` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_barang`, `gambar`, `nama_barang`, `deskripsi`, `stock`) VALUES
(17, '628f5b4ee339d.jpg', 'Apple iPhone 11 Pro Max', 'Smartphone', 63),
(19, '628c648b52425.jpg', 'Apple iPhone 13 Pro Max', 'Smartphone', 25),
(26, '628c6744227c3.jpg', 'Samsung Galaxy Tabb S8', 'Tablet', 15),
(29, '628c69076cde7.jpg', 'Acer Predator Helios 500', 'Laptop', 15),
(30, '628c6922ca143.jpg', 'Asus ROG Zephyrus M16 ', 'Laptop', 8),
(31, '628c6940868fe.jpg', 'Apple Macbook PRO 2020', 'Laptop', 5),
(37, '62996d7202f8e.jpg', 'Xiaomi 12 Pro', 'Smarphone', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'admin1', '$2y$10$ItTiWwqtpfWGNsbjLZLIoe.u4jtIC78tmdHMYRhoyAtZfQJ5zZjiO'),
(3, 'admin2', '$2y$10$daTncPn2cnL7wn/DVon8DOr34qJCuhfy/cbNwIGjYSbCowU/Ernfa'),
(4, 'admin3', '$2y$10$LFJn8MpEKk3AuNDEHU4osuMAot5uEZ1WO33kre.L7vo3KLxqkUTmm'),
(5, 'admin4', '$2y$10$clqTad0J38a0xo1aiQHr5OpSUJVFaUK9mo08nOGIa.U.xbwbuxwVa'),
(6, 'admin5', '$2y$10$zPCHgCVedqQrOGqdQOVr8.hK3J8E1A/R5HWb.baB0uhPq.g6WgMPG'),
(7, 'admin6', '$2y$10$3HVNUQI.jSuVWx2YqKPJG.lUrIb0DKDXonNh6qsPiP7/LLk8i411q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `keluar_ibfk_1` (`id_barang`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `masuk_ibfk_1` (`id_barang`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluar`
--
ALTER TABLE `keluar`
  ADD CONSTRAINT `keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
