-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2021 pada 07.49
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedaikopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `id_makanan` int(11) NOT NULL,
  `kd_makanan` varchar(10) NOT NULL,
  `nm_makanan` varchar(50) NOT NULL,
  `modal` int(15) NOT NULL,
  `harga_jual` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id_makanan`, `kd_makanan`, `nm_makanan`, `modal`, `harga_jual`) VALUES
(1, 'NSG1', 'Nasi Goreng Original', 10000, 12000),
(2, 'NSG2', 'Nasi Goreng Spesial', 14000, 17000),
(3, 'NSG3', 'Nasi Goreng Seafood', 20000, 22000),
(5, 'KWT', 'Kwetiau Biasa', 5000, 7000),
(7, 'SOS', 'Sosis Bakar', 8000, 12000),
(8, 'KTG', 'Kentang Goreng', 7000, 10000),
(9, 'NSL', 'Nasi Lengko', 8000, 16000),
(10, 'PCA', 'Pecel Ayam', 14000, 17000),
(11, 'AYB', 'Ayam Bakar', 15000, 19000),
(12, 'AYP', 'Ayam Penyet', 15000, 19000),
(13, 'SSP', 'Seblak Spesial', 10000, 15000),
(14, 'PSG', 'Pisang Goreng', 5000, 8000),
(15, 'PSM', 'Pisang Goreng Mix', 9000, 12000),
(16, 'RBC', 'Roti Bakar Cokelat', 9000, 12000),
(17, 'RBK', 'Roti Bakar Keju', 11000, 14000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_minuman`
--

CREATE TABLE `tbl_minuman` (
  `id_minuman` int(11) NOT NULL,
  `kd_minuman` varchar(10) NOT NULL,
  `nm_minuman` varchar(50) NOT NULL,
  `modal` int(15) NOT NULL,
  `harga_jual` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_minuman`
--

INSERT INTO `tbl_minuman` (`id_minuman`, `kd_minuman`, `nm_minuman`, `modal`, `harga_jual`) VALUES
(1, 'KPH', 'Kopi Hitam Biasa', 2000, 3000),
(2, 'EKS', 'Kopi Ekspreso Original', 7000, 8500),
(3, 'CPC', 'Cappucino', 10000, 12000),
(5, 'MTC1', 'Matcha Green Tea', 14000, 19000),
(7, 'MTC2', 'Matcha Redvelvet', 10000, 12000),
(8, 'BTO', 'Bubble Taro Origin', 15000, 20000),
(9, 'CML', 'Choco Milo', 16000, 21000),
(10, 'CCL', 'Chocolate Classic', 17000, 23000),
(11, 'JTE', 'Java Tea', 18000, 20000),
(12, 'SLF', 'Sexy Lychee Fresh', 18000, 24000),
(13, 'SJM', 'Susu Jahe Madu', 10000, 17000),
(14, 'ESP', 'Espresso', 11000, 14000),
(15, 'AFG', 'Affogato', 16000, 22000),
(16, 'MCH', 'Mochaccino', 20000, 26000),
(17, 'LTE', 'Latte', 19000, 24000),
(18, 'HZL', 'Hazelnut Latte', 24000, 28000),
(19, 'CMM', 'Caramel Macchiata', 25000, 30000),
(20, 'VDR', 'Vietnam Drip', 26000, 28000),
(21, 'GTO', 'Green Tea Original', 7000, 10000),
(22, 'KPG', 'Kopi Ginseng', 5000, 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psn_makanan`
--

CREATE TABLE `tbl_psn_makanan` (
  `id_psn_makanan` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_psn_makanan`
--

INSERT INTO `tbl_psn_makanan` (`id_psn_makanan`, `id_makanan`, `qty`, `status`, `tanggal`) VALUES
(1, 1, '4', 1, '2021-02-15 12:54:10'),
(2, 5, '1', 1, '2021-02-15 12:55:10'),
(5, 15, '12', 1, '2021-02-17 05:26:25'),
(6, 16, '4', 1, '2021-02-17 05:27:37'),
(7, 7, '4', 1, '2021-02-17 05:27:52'),
(8, 3, '7', 1, '2021-02-17 05:35:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_psn_minuman`
--

CREATE TABLE `tbl_psn_minuman` (
  `id_psn_minuman` int(11) NOT NULL,
  `id_minuman` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_psn_minuman`
--

INSERT INTO `tbl_psn_minuman` (`id_psn_minuman`, `id_minuman`, `qty`, `status`, `tanggal`) VALUES
(6, 12, '12', 1, '2021-02-15 17:38:01'),
(7, 1, '2', 1, '2021-02-15 17:38:01'),
(15, 8, '2', 1, '2021-02-16 13:38:11'),
(16, 1, '4', 1, '2021-02-16 13:38:11'),
(17, 19, '20', 1, '2021-02-16 19:07:06'),
(20, 15, '4', 1, '2021-02-17 05:24:37'),
(21, 3, '2', 1, '2021-02-17 05:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nm_user`, `status`) VALUES
(1, 'admin', '12345', 'Ahmad Nursyifa', 'Administrator'),
(2, 'kasir1', '12345', 'Kasir 1', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indeks untuk tabel `tbl_psn_makanan`
--
ALTER TABLE `tbl_psn_makanan`
  ADD PRIMARY KEY (`id_psn_makanan`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indeks untuk tabel `tbl_psn_minuman`
--
ALTER TABLE `tbl_psn_minuman`
  ADD PRIMARY KEY (`id_psn_minuman`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_psn_makanan`
--
ALTER TABLE `tbl_psn_makanan`
  MODIFY `id_psn_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_psn_minuman`
--
ALTER TABLE `tbl_psn_minuman`
  MODIFY `id_psn_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
