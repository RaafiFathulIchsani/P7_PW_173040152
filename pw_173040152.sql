-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 18.22
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040152`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `kedaluarsa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `foto`, `nama`, `jenis`, `harga`, `kedaluarsa`) VALUES
(1, 'martabak.jpg', 'Martabak Bangka', 'makanan manis', 35000, '2-3 hari'),
(2, 'telor.jpg', 'Martabak Telor', 'Makanan Asin', 40000, '2-3 hari'),
(3, 'balok.jpg', 'balok', 'Makanan Manis', 15000, '1-3 hari'),
(4, 'baso.jpg', 'Baso Solo', 'Makanan Asin', 10000, '1-5 hari'),
(7, 'dimsum.jpg', 'Dimsum', 'Makanan Jepang', 15000, '1-2 hari'),
(8, 'nasigoreng.jpg', 'Nasi Goreng', 'Makanan Tradisional', 12000, '1 hari'),
(9, 'kepiting.jpg', 'Kepiting', 'Makanan Laut', 100000, '1-6 hari'),
(10, 'lobster.jpg', 'Lobster', 'Makanan Laut', 200000, '1-7 hari'),
(13, 'sate.jpg', 'Sate madura', 'Makanan Madura', 13000, '1-4 hari'),
(14, 'rumbah.jpg', 'Rumbah', 'Makanan Tradisional', 3000, '1-2 hari'),
(15, 'getuk.jpg', 'Getuk Lindri', 'Makanan Tradisional', 5000, '1-5 hari'),
(16, 'telor.jpg', 'Kerak Telor', 'Makanan Tradisional', 13000, '1-5 hari');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
