-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2021 pada 16.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `duser`
--

CREATE TABLE `duser` (
  `no` int(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `duser`
--

INSERT INTO `duser` (`no`, `nama`, `user`, `pass`) VALUES
(2, 'Andhika Septa Prawira', 'andhikasep', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `no` int(32) NOT NULL,
  `nama_pr` varchar(64) NOT NULL,
  `harga_pr` varchar(32) NOT NULL,
  `jenis_pr` varchar(32) NOT NULL,
  `stock_pr` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`no`, `nama_pr`, `harga_pr`, `jenis_pr`, `stock_pr`) VALUES
(1, 'Red Velvet', '25000', 'Makanan', 3),
(3, 'Coca Cola', '5000', 'Minuman', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `duser`
--
ALTER TABLE `duser`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `duser`
--
ALTER TABLE `duser`
  MODIFY `no` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `no` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
