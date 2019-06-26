-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 03:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 1, 5, 1, '4300000'),
(2, 1, 1, 1, '3500000'),
(3, 2, 4, 1, '3560000'),
(4, 4, 2, 1, '6250000'),
(5, 4, 3, 1, '7250000'),
(6, 4, 6, 1, '5100000'),
(7, 5, 1, 1, '3500000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Smartphone'),
(3, 'Robot');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2019-06-16', 1),
(2, '2019-06-16', 2),
(3, '2019-06-16', 3),
(4, '2019-06-18', 4),
(5, '2019-06-18', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(1, 'Buku IT', 'mog2@gmail.com', 'Banyuwangi', '083434'),
(2, 'Buku IT', 'morganardianto12@gmail.com', 'Banyuwangi', '083434'),
(3, 'Buku IT', 'morganardianto12@gmail.com', 'Banyuwangi', '083434'),
(4, 'Buku IT', 'morganardianto12@gmail.com', 'Banyuwangi', '083434'),
(5, 'Buku IT', 'malam@gmail.com', 'Banyuwangi', '083434');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Laptop 1', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '3500000', 'laptop1.jpg', 1),
(2, 'Laptop 2', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '6250000', 'laptop2.jpg', 1),
(3, 'Laptop 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '7250000', 'laptop3.jpg', 1),
(4, 'Smartphone 1', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '3560000', 'hp1.jpg', 2),
(5, 'Smartphone 2', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '4300000', 'hp2.jpg', 2),
(6, 'Smartphone 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '5100000', 'hp3.jpg', 2),
(7, 'Robot 1', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '3500000', 'robot1.jpg', 3),
(8, 'Robot 2', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '4500000', 'robot2.jpg', 3),
(9, 'Robot 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '6100000', 'robot3.jpg', 3),
(10, 'Laptop Ganteng', 'Laptop Morgan OS', '100000', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
