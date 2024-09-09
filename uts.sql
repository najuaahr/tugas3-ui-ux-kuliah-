-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 15.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_users`
--

CREATE TABLE `mst_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` char(3) NOT NULL,
  `rw` char(3) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_users`
--

INSERT INTO `mst_users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `jenis_kelamin`, `no_telp`, `alamat`, `rt`, `rw`, `kecamatan`, `kelurahan`, `kota`, `kode_pos`, `job`) VALUES
(1, 'Raditya Rimbawan', 'Oprasto', 'Radityatiara8@gmail.com', 'radit', '1234', 'male', '085286791332', 'Komplek Pondok Kacang Prima \r\nBlok K4 No 15', '16', '008', 'Pondok Kacang Timur', 'Pondok Kacang Timur', 'Tangerang Selatan', '16224', 'Senior Bussines Analyst');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_users`
--
ALTER TABLE `mst_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_users`
--
ALTER TABLE `mst_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
