-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2022 pada 15.21
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hs_gallery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `artis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` varchar(9) NOT NULL,
  `email` varchar(55) NOT NULL,
  `harga` int(255) NOT NULL,
  `pameran` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `artis`, `judul`, `jenis`, `email`, `harga`, `pameran`, `gambar`) VALUES
(16, 'Heidar Sadhana', 'Amogus', '3 Dimensi', 'terbangwoi@gmail.com', 5000000, '2022-10-30', 'Amogus.jpg'),
(18, 'Heidar Sadhana', 'Nada Cinta', '2 Dimensi', 'heidarsadhana@gmail.com', 6700000, '2022-10-30', 'Nada+Cinta.png'),
(19, 'Heidar Sadhana', 'Matahari Terbit', '3 Dimensi', 'heidarsadhana@gmail.com', 7000000, '2022-10-31', 'Matahari+Terbit.png'),
(20, 'Husein', 'Battle Arm', '3 Dimensi', 'husen@gmail.com', 3000000, '2022-10-31', 'Battle+Arm.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
