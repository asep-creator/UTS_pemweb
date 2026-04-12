-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2026 pada 09.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `tipe`, `tahun`, `harga`, `gambar`) VALUES
(2, 'Honda Jazz', 'Hatchback', 2019, 185000000, 'jazz.jpg'),
(3, 'Suzuki Ertiga', 'MPV', 2017, 140000000, 'ertiga.jpg'),
(4, 'Mitsubishi Xpander', 'MPV', 2020, 210000000, 'xpander.jpg'),
(5, 'Daihatsu Ayla', 'City Car', 2016, 95000000, 'ayla.jpg'),
(6, 'Toyota Innova', 'MPV', 2019, 260000000, 'innova.jpg'),
(7, 'Honda CR-V', 'SUV', 2018, 320000000, 'crv.jpg'),
(8, 'Nissan Livina', 'MPV', 2019, 190000000, 'livina.jpg'),
(9, 'Toyota Rush', 'SUV', 2020, 230000000, 'rush.jpg'),
(10, 'Suzuki XL7', 'SUV', 2021, 250000000, 'xl7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `mobil` varchar(100) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `pembelian` varchar(20) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `nohp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `mobil`, `tipe`, `tahun`, `pembelian`, `total_harga`, `status`, `nohp`, `alamat`) VALUES
(1, 'pasep', 'Suzuki XL7', 'SUV', 2021, 'Cash', 250000000, 'Selesai', NULL, NULL),
(2, 'Sheva Andika', '+6285732020382', 'jalan abas singowardoyo RT.8 RW.3 singogalih tarik', 0, 'Hatchback', 2019, 'Cash', '185000000', 'status'),
(3, 'ad', '+622345678909', 'jalan abas singowardoyo RT.8 RW.3 singogalih tarik', 0, 'MPV', 2018, 'Kredit', '150000000', 'status'),
(4, 'coba', 'Toyota Avanza', 'MPV', 2018, 'Kredit', 150000000, 'Selesai', '+6285732020382', 'jalan abas singowardoyo RT.8 RW.3 singogalih tarik sidoarjo'),
(5, 'Sheva Andika', 'Toyota Avanza', 'MPV', 2018, 'Kredit', 150000000, 'Pending', '+6285732020382', 'jalan abas singowardoyo RT.8 RW.3 singogalih tarik sidoarjo'),
(6, 'andi', 'Honda CR-V', 'SUV', 2018, 'Kredit', 320000000, 'Selesai', '+62+6285732020382', 'jalan abas singowardoyo RT.8 RW.3 singogalih tarik sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'user', '123', 'user'),
(3, 'pasep', '123', 'user'),
(4, 'asep', '123', 'user'),
(5, 'person1', '123', 'user'),
(6, 'person', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
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
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
