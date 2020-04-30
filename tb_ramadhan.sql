-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2020 pada 00.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

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
-- Struktur dari tabel `tb_ramadhan`
--

CREATE TABLE `tb_ramadhan` (
  `id` bigint(50) NOT NULL,
  `nama_ustad` varchar(50) NOT NULL,
  `nama_masjid` varchar(50) NOT NULL,
  `alamat_masjid` varchar(50) NOT NULL,
  `tanggal_dakwah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ramadhan`
--

INSERT INTO `tb_ramadhan` (`id`, `nama_ustad`, `nama_masjid`, `alamat_masjid`, `tanggal_dakwah`) VALUES
(15, 'Rifki Pramana', 'Masjid Aljihad', 'Jalan Sukaramai', '2020-04-18'),
(23, 'Muhammad Iqbal', 'AL-Hidayah', 'Jalan Sukaramai', '2020-04-16'),
(65, 'Robby', 'Al-furqon', 'Kpr2', '2020-04-10'),
(5345, 'Ramadhoni Suhada', 'Masjid An-nur', 'Kpr1', '2020-04-17'),
(43434, 'Dadang', 'Muhajirin', 'Jln', '2020-04-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ramadhan`
--
ALTER TABLE `tb_ramadhan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
