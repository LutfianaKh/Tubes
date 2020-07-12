-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 05.08
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_besar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_sekarang`
--

CREATE TABLE `beli_sekarang` (
  `id` int(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Kode_pos` int(10) NOT NULL,
  `Telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli_sekarang`
--

INSERT INTO `beli_sekarang` (`id`, `Email_Address`, `Password`, `Alamat`, `Kode_pos`, `Telepon`) VALUES
(4, 'upik@gmail.com', 'upik', 'boyolali', 5555, 988383),
(6, 'dinda@gmail.com', 'dinda123', 'Solo', 8888, 82123),
(7, 'dina@gmail.com', 'dina123', 'simo', 57311, 88),
(12, 'rina@gmail.com', 'rina123', 'gresik', 111, 100),
(13, 'elang@gmail.com', 'elang123', 'cepu', 1111, 999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `Nama_pelanggan` varchar(100) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `Nama_pelanggan`, `Email_Address`, `Password`) VALUES
(1, 'Dinda', 'dinda@gmail.com', 0),
(2, 'Tes', 'tes@mail.com', 0),
(3, 'ad', 'ad@mail.com', 0),
(4, 'Lutfiana', 'lutfiana@gmail.com', 0),
(5, 'DinaAyu', 'dina@gmail.com', 0),
(6, 'adesuryaning', 'adesuryaning@gmail.com', 0),
(7, '', '', 0),
(8, 'ades', 'ade1@gmail.com', 12345);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli_sekarang`
--
ALTER TABLE `beli_sekarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli_sekarang`
--
ALTER TABLE `beli_sekarang`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
