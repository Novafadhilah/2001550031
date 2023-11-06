-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2023 pada 05.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatasemarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatakotalumpia`
--

CREATE TABLE `wisatakotalumpia` (
  `Id_Wisata` int(11) NOT NULL,
  `Nama_Wisata` varchar(100) NOT NULL,
  `Alamat_Wisata` varchar(300) NOT NULL,
  `Harga_Wisata` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisatakotalumpia`
--

INSERT INTO `wisatakotalumpia` (`Id_Wisata`, `Nama_Wisata`, `Alamat_Wisata`, `Harga_Wisata`) VALUES
(1, 'Sampokong', 'Jl. Simongan No.129, Bongsari, Semarang Barat, Semarang, Jawa Tengah, Indonesia, 50148', 'Rp10.000 - Rp65.000'),
(2, 'Pantai Marina', 'Jl. Yos Sudarso, Kompleks PRPP, Tawangsari, Semarang', 'Rp.10.000'),
(3, 'Lawang Sewu', 'Jl. Pemuda, Sekayu, Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50132', 'Rp10.000 - Rp30.000'),
(4, 'Kota Lama', 'Jl. Letjen Suprapto, Kota Lama Semarang, Semarang, Jawa Tengah, Indonesia, 50174', 'Gratis'),
(5, 'Pantai Tirang', 'Tugurejo, Kec. Tugu, Kota Semarang, Jawa Tengah', 'Rp.10.000'),
(6, 'Alun-alun Masjid Agung Kauman', 'Jl. Alun-alun Barat Nomor 11 Semarang', 'Gratis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wisatakotalumpia`
--
ALTER TABLE `wisatakotalumpia`
  ADD PRIMARY KEY (`Id_Wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wisatakotalumpia`
--
ALTER TABLE `wisatakotalumpia`
  MODIFY `Id_Wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
