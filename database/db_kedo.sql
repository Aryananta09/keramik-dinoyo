-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 09:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

create database db_kedo;
use db_kedo;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kedo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(2, 'Blog 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa tempor nec feugiat nisl pretium fusce id velit. Tincidunt augue interdum velit euismod in pellentesque massa. Nunc sed velit dignissim sodales ut eu sem. Congue quisque egestas diam in. Morbi tristique senectus et netus. Odio euismod lacinia at quis risus. Augue lacus viverra vitae congue eu. Odio morbi quis commodo odio. Pellentesque elit eget gravida cum sociis natoque penatibus. Ac ut consequat semper viverra nam libero justo laoreet. Accumsan sit amet nulla facilisi morbi. Porttitor massa id neque aliquam vestibulum morbi. Sollicitudin ac orci phasellus egestas. Adipiscing enim eu turpis egestas pretium. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Diam sollicitudin tempor id eu nisl nunc mi. Eget mauris pharetra et ultrices neque ornare.  Sed viverra ipsum nunc aliquet bibendum enim ', 'Blog1.png', '2024-06-04'),
(3, 'Blog 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa tempor nec feugiat nisl pretium fusce id velit. Tincidunt augue interdum velit euismod in pellentesque massa. Nunc sed velit dignissim sodales ut eu sem. Congue quisque egestas diam in. Morbi tristique senectus et netus. Odio euismod lacinia at quis risus. Augue lacus viverra vitae congue eu. Odio morbi quis commodo odio. Pellentesque elit eget gravida cum sociis natoque penatibus. Ac ut consequat semper viverra nam libero justo laoreet. Accumsan sit amet nulla facilisi morbi. Porttitor massa id neque aliquam vestibulum morbi. Sollicitudin ac orci phasellus egestas. Adipiscing enim eu turpis egestas pretium. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Diam sollicitudin tempor id eu nisl nunc mi. Eget mauris pharetra et ultrices neque ornare.  Sed viverra ipsum nunc aliquet bibendum enim ', 'Blog2.png', '2024-06-04'),
(4, 'Blog 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa tempor nec feugiat nisl pretium fusce id velit. Tincidunt augue interdum velit euismod in pellentesque massa. Nunc sed velit dignissim sodales ut eu sem. Congue quisque egestas diam in. Morbi tristique senectus et netus. Odio euismod lacinia at quis risus. Augue lacus viverra vitae congue eu. Odio morbi quis commodo odio. Pellentesque elit eget gravida cum sociis natoque penatibus. Ac ut consequat semper viverra nam libero justo laoreet. Accumsan sit amet nulla facilisi morbi. Porttitor massa id neque aliquam vestibulum morbi. Sollicitudin ac orci phasellus egestas. Adipiscing enim eu turpis egestas pretium. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Diam sollicitudin tempor id eu nisl nunc mi. Eget mauris pharetra et ultrices neque ornare.  Sed viverra ipsum nunc aliquet bibendum enim ', 'Blog3.png', '2024-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `user_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  `metode_pembayaran` varchar(45) DEFAULT NULL,
  `nama_bank` varchar(45) DEFAULT NULL,
  `nama_rek` varchar(100) DEFAULT NULL,
  `no_rek` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`user_id`, `pembayaran_id`, `metode_pembayaran`, `nama_bank`, `nama_rek`, `no_rek`) VALUES
(2, 1, 'Bank', 'BCA', 'Muhammad Awwal Aryananta', '123456789'),
(2, 3, 'E-Wallet', 'Ovo', 'Awwal Ovo', '8162626'),
(2, 14, 'E-Wallet', 'Gopay', 'Awwal Arya', '8162525334'),
(3, 15, 'Bank', 'Mandiri', 'Naufal Rafly', '443326152'),
(3, 16, 'E-Wallet', 'Dana', 'Dana Naufal', '863447153');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `metode_bank` varchar(45) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(45) NOT NULL DEFAULT 'Menunggu Pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_order`, `id_produk`, `id_metode`, `nama`, `alamat`, `no_telp`, `produk`, `jumlah`, `metode_bank`, `id_user`, `tanggal`, `status`) VALUES
(1, 0, 1, 'Awwal', 'Jl. Mawar', '0861563', 'Vas Bunga', 7, 'BCA', 2, '2024-06-04', 'Pembayaran Tidak Valid'),
(2, 0, 1, 'Awwal', 'Jl. Mawar', '0861563', 'kucing', 1, 'BCA', 2, '0000-00-00', 'Pembayaran Diterima'),
(3, 0, 1, 'Awwal', 'Jl. Mawar', '0861563', 'Vas Bunga', 7, 'BCA', 2, '2024-06-04', 'Menunggu Pembayaran'),
(4, 0, 15, 'Naufal', 'Jl. Angklung', '0861563', 'Guci', 7, 'Mandiri', 3, '2024-06-04', 'Menunggu Pembayaran'),
(5, 0, 1, 'halo', 'BCT', '08162345', 'kucing', 1, 'BCA', 2, '2024-06-04', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `kategori`, `harga`, `gambar`) VALUES
(2, 'Vas Bunga', 'Vas', 7000, 'vas.png'),
(3, 'Piring', 'Pecah Belah', 10000, 'piring.png'),
(4, 'Guci', 'Keramik', 20000, 'guci.png'),
(6, 'kucing', 'hewan peliharaan', 90000, 'kucing.jpg'),
(7, 'Vas 2', 'Vas', 8000, 'produk1.png'),
(9, 'Cangkir', 'Gelas', 10000, 'produk2.png'),
(10, 'Prime Vandal', 'Vandal', 1775, 'Prime_Vandal-1536x709.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$/b4rvd4adjI/T9SIzPDsSOU64gd3de2TUf66geRb1JxXPeZLFfiT6', 'admin'),
(2, 'awwal', '$2y$10$gNb/1GZWs.EHllyfMiA2B.gT/k23KS10NGJgUawtu0FtgGQ.eyQIm', 'user'),
(3, 'naufal', '$2y$10$0jzK1EcLLE.2W8bYzdVRE.xnIdMtHJw6q8yqhiaodU5vmaCdpXTyu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD CONSTRAINT `metode_pembayaran_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
