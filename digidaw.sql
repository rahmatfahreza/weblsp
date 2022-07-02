-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 07:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digidaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudangotomotif`
--

CREATE TABLE `gudangotomotif` (
  `id_produk` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `stok_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudangotomotif`
--

INSERT INTO `gudangotomotif` (`id_produk`, `nama_barang`, `brand`, `harga_barang`, `stok_barang`) VALUES
(16, 'reja', 'RCB', 2147483647, 342374);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudangotomotif`
--
ALTER TABLE `gudangotomotif`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudangotomotif`
--
ALTER TABLE `gudangotomotif`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
