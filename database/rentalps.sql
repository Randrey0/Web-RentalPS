-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2024 pada 09.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_booking` date NOT NULL,
  `batas_ambil` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_console` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `console`
--

CREATE TABLE `console` (
  `id` int(11) NOT NULL,
  `nama_console` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `game` varchar(256) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `harga_sewa` varchar(11) NOT NULL,
  `image` varchar(256) DEFAULT 'book-default-cover.jpg',
  `qris` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `console`
--

INSERT INTO `console` (`id`, `nama_console`, `id_kategori`, `stok`, `game`, `dipinjam`, `dibooking`, `harga_sewa`, `image`, `qris`) VALUES
(1, 'PS1-GREY', 10, 6, 'TEKKEN. DYNASTY WARRIOR. CRASH BANDICOOT. HARVEST MOON. WINNING ELEVEN', 1, 10, 'Rp.50.000', 'img1687395623.jpg', 'img16873956231.jpg'),
(2, 'PS2-BLACK', 10, 8, 'TEST1. TEST2. TEST3. ETSDTFYTDW4', 1, -2, 'Rp.20.000', 'img1685261865.JPG', 'img16852618651.jpg'),
(3, 'PS3-BLACK', 10, 22, 'GTA V. GTA IV. PUBG: BATTLEGROUNDS. ', 1, -3, 'Rp.20.000', 'img1685261877.JPG', 'img16852618771.jpg'),
(4, 'PS4-BLACK', 10, 14, 'uwhdywiduweiudhuiqwudiw', 0, 0, 'Rp.20.000', 'img1685262225.JPG', 'img16852622251.jpg'),
(5, 'PS5-WHITE', 10, 24, 'GTA V. GTA IV. PUBG: BATTLEGROUNDS. ', 1, -3, 'Rp.20.000', 'img1685262013.jpg', 'img16852620131.jpg'),
(6, 'PS3-PINK', 10, 25, 'DWUHDIWGHIDFUGWEUID', 1, -3, 'Rp.20.000', 'img1685262064.JPG', 'img16852620641.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `id_console` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`no_pinjam`, `id_console`, `denda`) VALUES
('18042023001', 1, 5000),
('12052023002', 1, 5000),
('12052023002', 22, 5000),
('12052023002', 22, 5000),
('12052023002', 22, 5000),
('17052023002', 22, 5000),
('17052023002', 23, 5000),
('17052023002', 24, 5000),
('17052023002', 2, 5000),
('17052023002', 3, 5000),
('17052023002', 2, 5000),
('17052023002', 3, 5000),
('25052023002', 1, 5000),
('26052023003', 2, 5000),
('26052023004', 2, 5000),
('26052023005', 6, 5000),
('27052023006', 1, 5000),
('27052023007', 1, 5000),
('27052023008', 6, 5000),
('27052023009', 2, 5000),
('27052023010', 2, 5000),
('27052023011', 1, 5000),
('27052023012', 1, 5000),
('27052023012', 6, 5000),
('27052023012', 5, 5000),
('27052023013', 1, 5000),
('27052023014', 1, 5000),
('27052023015', 1, 5000),
('28052023016', 2, 5000),
('28052023016', 3, 5000),
('28052023016', 6, 5000),
('28052023017', 1, 5000),
('28052023018', 1, 5000),
('28052023018', 1, 5000),
('28052023018', 1, 5000),
('28052023019', 1, 5000),
('28052023019', 2, 5000),
('28052023020', 6, 5000),
('28052023021', 2, 5000),
('28052023021', 2, 5000),
('28052023022', 2, 5000),
('28052023023', 2, 5000),
('29052023024', 1, 5000),
('01062023025', 2, 5000),
('01062023025', 1, 5000),
('01062023025', 1, 5000),
('01062023025', 2, 5000),
('01062023025', 2, 5000),
('01062023025', 2, 5000),
('03062023025', 1, 5000),
('14062023025', 1, 5000),
('25072024025', 2, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(10, 'Playstation'),
(11, 'Xbox');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Utility'),
(5, 'Console'),
(6, 'Member\r\n'),
(7, 'Laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` varchar(12) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_booking` int(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` enum('Pinjam','Kembali') NOT NULL DEFAULT 'Pinjam',
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `tgl_pinjam`, `id_booking`, `id_user`, `tgl_kembali`, `tgl_pengembalian`, `status`, `total_denda`) VALUES
('18042023001', '2023-04-18', 2147483647, 17, '2023-04-21', '2023-04-18', 'Kembali', 0),
('12052023002', '2023-05-12', 2147483647, 23, '2023-05-15', '2023-05-12', 'Kembali', 0),
('12052023002', '2023-05-12', 2147483647, 23, '2023-05-15', '2023-05-12', 'Kembali', 0),
('17052023002', '2023-05-17', 2147483647, 23, '2023-05-20', '2023-05-17', 'Kembali', 0),
('17052023002', '2023-05-17', 2147483647, 23, '2023-05-20', '2023-05-17', 'Kembali', 0),
('25052023002', '2023-05-25', 2147483647, 23, '2023-05-28', '2023-05-26', 'Kembali', 0),
('26052023003', '2023-05-26', 2147483647, 23, '2023-05-29', '2023-05-26', 'Kembali', 0),
('26052023004', '2023-05-26', 2147483647, 23, '2023-05-29', '2023-05-26', 'Kembali', 0),
('26052023005', '2023-05-26', 2147483647, 23, '2023-05-29', '2023-05-27', 'Kembali', 0),
('27052023006', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023007', '2023-05-27', 2147483647, 34, '2023-05-28', '2023-05-27', 'Kembali', 0),
('27052023008', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023009', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023010', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023011', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023012', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023013', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023014', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('27052023015', '2023-05-27', 2147483647, 34, '2023-05-30', '2023-05-27', 'Kembali', 0),
('28052023016', '2023-05-28', 2147483647, 34, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023017', '2023-05-28', 2147483647, 29, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023018', '2023-05-28', 2147483647, 29, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023019', '2023-05-28', 2147483647, 29, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023020', '2023-05-28', 2147483647, 29, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023021', '2023-05-28', 2147483647, 34, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023022', '2023-05-28', 2147483647, 34, '2023-05-31', '2023-05-28', 'Kembali', 0),
('28052023023', '2023-05-28', 2147483647, 34, '2023-05-31', '2023-05-28', 'Kembali', 0),
('29052023024', '2023-05-29', 2147483647, 29, '2023-06-01', '2023-05-29', 'Kembali', 0),
('01062023025', '2023-06-01', 1062023001, 29, '2023-06-04', '2023-06-01', 'Kembali', 0),
('01062023025', '2023-06-01', 1062023001, 29, '2023-06-04', '2023-06-01', 'Kembali', 0),
('01062023025', '2023-06-01', 1062023001, 29, '2023-06-08', '2023-06-01', 'Kembali', 0),
('03062023025', '2023-06-03', 2147483647, 29, '2023-06-06', '2023-06-13', 'Kembali', 0),
('14062023025', '2023-06-14', 2147483647, 37, '2023-06-17', '2023-06-14', 'Kembali', 0),
('25072024025', '2024-07-25', 2147483647, 41, '2024-07-28', '0000-00-00', 'Pinjam', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admministrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `tgl_booking` datetime DEFAULT NULL,
  `id_user` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_user` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_console` int(11) DEFAULT NULL,
  `nama_console` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_sewa` varchar(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `qris` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telpon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`, `alamat`, `no_telpon`) VALUES
(29, 'Kelompok 1', 'kelompok1@gmail.com', 'pro1685154593.jpg', '$2y$10$I5JqjoG1INpXEkFNXW4oDOnFGp5Z4QCuB3Rrfz.1kS.nzKJhh70Ey', 1, 1, 1685151098, 'BSD', '111111111111'),
(37, 'Penyewa', 'penyewa@gmail.com', 'pro1686725352.jpg', '$2y$10$Jfq2cA3lBzSK7XavmsKDuOhKcOR5BQ2Li1gbvDJUwvo2uZdKPcoQ6', 2, 1, 1686645745, 'CIMONE', '082314546768'),
(40, 'Penyewa2', 'penyewa2@gmail.com', 'default.jpg', '$2y$10$LPPRIVrurag8MO8NxQjNM.pRQa0JmT/WH5ewP0cJdbDyw9PU1NtGS', 2, 1, 1687588913, 'Legok', '081243568986'),
(41, 'Anos Voldigoad', 'anos@gmail.com', 'default.jpg', '$2y$10$i79/qdbQlEhXavH3KDj4T.X95ImXPgCA0mroizmfgEf6y8SToibhi', 2, 1, 1721891956, 'BSD', '0892738163761');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `console`
--
ALTER TABLE `console`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
