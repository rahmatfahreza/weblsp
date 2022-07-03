-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2022 pada 17.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `gudangotomotif`
--

CREATE TABLE `gudangotomotif` (
  `id_produk` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `stok_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudangotomotif`
--

INSERT INTO `gudangotomotif` (`id_produk`, `nama_barang`, `brand`, `harga_barang`, `stok_barang`) VALUES
(16, 'reja', 'RCB', 2147483647, 342374);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudangotomotif2`
--

CREATE TABLE `gudangotomotif2` (
  `id_produk` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `stok_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudangotomotif2`
--

INSERT INTO `gudangotomotif2` (`id_produk`, `nama_barang`, `brand`, `harga_barang`, `stok_barang`) VALUES
(1, 'Knalpot', 'WRC', 700000, 500);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudangotomotif`
--
ALTER TABLE `gudangotomotif`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `gudangotomotif2`
--
ALTER TABLE `gudangotomotif2`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudangotomotif`
--
ALTER TABLE `gudangotomotif`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
