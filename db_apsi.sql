-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2025 at 10:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_pesanan`
--

CREATE TABLE `t_detail_pesanan` (
  `id_detail_pesanan` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_detail_pesanan`
--

INSERT INTO `t_detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `id_produk`, `jumlah`, `harga`) VALUES
(1, 5, 21, 1, '20000.00'),
(2, 5, 18, 4, '20000.00'),
(3, 5, 18, 4, '20000.00'),
(4, 5, 7, 2, '10000.00'),
(5, 5, 8, 2, '10000.00'),
(6, 6, 7, 1, '10000.00'),
(7, 6, 14, 1, '15000.00'),
(8, 6, 19, 1, '20000.00'),
(9, 7, 14, 1, '15000.00'),
(10, 8, 7, 1, '10000.00'),
(11, 9, 8, 1, '10000.00'),
(12, 9, 18, 1, '20000.00');

-- --------------------------------------------------------

--
-- Table structure for table `t_keranjang`
--

CREATE TABLE `t_keranjang` (
  `id_keranjang` int NOT NULL,
  `id_produk` int NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `jumlah` int NOT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_keranjang`
--

INSERT INTO `t_keranjang` (`id_keranjang`, `id_produk`, `ukuran`, `jumlah`, `session_id`) VALUES
(22, 7, '50 gram', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengiriman`
--

CREATE TABLE `t_pengiriman` (
  `id_pengiriman` int NOT NULL,
  `nama_pengiriman` varchar(200) NOT NULL,
  `nominal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_pengiriman`
--

INSERT INTO `t_pengiriman` (`id_pengiriman`, `nama_pengiriman`, `nominal`) VALUES
(1, 'JNT', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id_pesanan` int NOT NULL,
  `id_pengiriman` int NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `total_harga` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesanan`, `id_pengiriman`, `nama_pelanggan`, `email_pelanggan`, `alamat_pelanggan`, `total_harga`, `created_at`) VALUES
(5, 0, 'asdsa', 'ada@aad.com', 'adsasdasdsad', '220000', '2025-01-05 22:29:06'),
(6, 0, 'asdas', 'admin@gmail.com', 'asdasda', '45000', '2025-01-05 22:29:59'),
(7, 1, 'adxzczxc', 'agung@example.com', 'ewwersdfs', '15000', '2025-01-05 22:30:59'),
(8, 1, 'asas', 'rendhirichardo2@gmail.com', 'asaszxz', '10000', '2025-01-05 22:42:37'),
(9, 1, 'Agung Pakmen', 'rendhirichardo2@gmail.com', 'igyusatv', '30000', '2025-01-05 22:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id_produk` int NOT NULL,
  `nama_produk` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `kategori` text NOT NULL,
  `qty` varchar(20) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `kategori`, `qty`, `gambar`) VALUES
(7, 'Ayam Suir', 'Cireng Isi Ayam Suir', '10000', 'Cireng Isi', '15', '1736105582_3aae1f65b1c6554397c4.png'),
(8, 'Sosis', 'Cireng Isi Sosis', '10000', 'Cireng Isi', '24', '1736105624_7bfa30967fc2d9e205d5.png'),
(9, 'Keju', 'Cireng Isi Keju', '10000', 'Cireng Isi', '123', '1736105649_bfed74810f0fbc84303d.png'),
(10, 'Bakso', 'Cireng Isi Bakso', '10000', 'Cireng Isi', '4354', '1736105676_3e9fb6093f077cbab8cd.png'),
(11, 'Jando', 'Cireng Isi Jando', '10000', 'Cireng Isi', '4553', '1736105704_934791417b985b805835.png'),
(12, 'Hati Ayam', 'Cireng Isi Hati Ayam', '10000', 'Cireng Isi', '89', '1736105736_8007920112abdee08ff3.png'),
(13, 'Coklat', 'Keripik Pisang Coklat', '15000', 'Keripik Pisang', '15', '1736105772_5f8a4666339b080d7ff7.png'),
(14, 'Tiramisu', 'Keripik Pisang Tiramisu', '15000', 'Keripik Pisang', '125', '1736105801_23333a374b5501e25105.png'),
(15, 'Matcha', 'Keripik Pisang Matcha', '15000', 'Keripik Pisang', '11', '1736105823_9f31e0912a01d18b0da2.png'),
(16, 'Strawberry', 'Keripik Pisang Strawberry', '15000', 'Keripik Pisang', '1231', '1736105849_db67a09cb4a0038f9d6e.png'),
(17, 'Manis', 'Keripik Pisang Manis', '15000', 'Keripik Pisang', '56', '1736105872_222a29af4381c9f21d5a.png'),
(18, 'Coklat', 'Banana Boat Coklat', '20000', 'Banana Boat', '78', '1736105912_800d16356895e7dc6abc.png'),
(19, 'Tiramisu', 'Banana Boat Tiramisu', '20000', 'Banana Boat', '543', '1736105941_103f30dad4c393e39b14.png'),
(20, 'Matcha', 'Banana Boat Matcha', '20000', 'Banana Boat', '52', '1736105971_25c349a1e72b8e6c4936.png'),
(21, 'Strawberry', 'Banana Boat Strawberry', '20000', 'Banana Boat', '765', '1736106006_66f86d350881954fa722.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_detail_pesanan`
--
ALTER TABLE `t_detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `t_keranjang`
--
ALTER TABLE `t_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `t_pengiriman`
--
ALTER TABLE `t_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_detail_pesanan`
--
ALTER TABLE `t_detail_pesanan`
  MODIFY `id_detail_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_keranjang`
--
ALTER TABLE `t_keranjang`
  MODIFY `id_keranjang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_pengiriman`
--
ALTER TABLE `t_pengiriman`
  MODIFY `id_pengiriman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pesanan`
--
ALTER TABLE `t_pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_pesanan`
--
ALTER TABLE `t_detail_pesanan`
  ADD CONSTRAINT `t_detail_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `t_pesanan` (`id_pesanan`),
  ADD CONSTRAINT `t_detail_pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `t_produk` (`id_produk`);

--
-- Constraints for table `t_keranjang`
--
ALTER TABLE `t_keranjang`
  ADD CONSTRAINT `t_keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `t_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
