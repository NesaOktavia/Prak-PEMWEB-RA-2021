-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2021 pada 13.22
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panitia17an`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `panitia`
--

CREATE TABLE `panitia` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nik` int(20) NOT NULL,
  `nomorhp` int(15) NOT NULL,
  `lomba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panitia`
--

INSERT INTO `panitia` (`id`, `nama`, `nik`, `nomorhp`, `lomba`) VALUES
(11, 'Reza Andrian', 2147483647, 2147483647, 'Makan Kerupuk'),
(12, 'Ezio', 2147483647, 2147483647, 'Tarik Tambang'),
(13, 'Alfie', 2147483647, 2147483647, 'Gebuk Bantal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `panitia`
--
ALTER TABLE `panitia`
  ADD UNIQUE KEY `jj` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
