-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 12.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'X', 'RPL 1'),
(2, 'X', 'RPL 2'),
(3, 'XI', 'RPL 1'),
(4, 'XI', 'RPL 2'),
(5, 'XII', 'RPL 1'),
(6, 'XII', 'RPL 2'),
(7, 'X', 'TKJ 1'),
(8, 'X', 'TKJ 2'),
(9, 'XI', 'TKJ 1'),
(10, 'XI', 'TKJ 2'),
(11, 'XII', 'TKJ 1'),
(12, 'XII', 'TKJ 2'),
(13, 'X', 'AKL 1'),
(14, 'X', 'AKL 2'),
(15, 'X', 'AKL 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(8) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`) VALUES
(29, 4, '0022516282', '2020-04-13', '1', '1', 3, 300000),
(30, 4, '0022516282', '2020-04-13', '2', '1', 3, 300000),
(31, 4, '0022516282', '2020-04-13', '3', '1', 3, 300000),
(32, 4, '0022516282', '2020-04-13', '4', '1', 3, 300000),
(33, 4, '0022516282', '2020-04-13', '5', '1', 3, 300000),
(34, 4, '0022516282', '2020-04-13', '6', '1', 3, 300000),
(35, 4, '0022516282', '2020-04-13', '7', '1', 3, 300000),
(36, 4, '0022516282', '2020-04-13', '8', '1', 3, 300000),
(37, 4, '0022516282', '2020-04-13', '9', '1', 3, 300000),
(38, 4, '0022516282', '2020-04-13', '10', '1', 3, 300000),
(39, 4, '0022516282', '2020-04-13', '11', '1', 3, 300000),
(40, 4, '0022516282', '2020-04-13', '12', '1', 3, 300000),
(41, 4, '0022516282', '2020-04-13', '1', '2', 3, 300000),
(42, 4, '0022516282', '2020-04-13', '2', '2', 3, 300000),
(43, 4, '0022516282', '2020-04-13', '3', '2', 3, 300000),
(44, 4, '0022516282', '2020-04-13', '4', '2', 3, 300000),
(45, 4, '0022516282', '2020-04-13', '5', '2', 3, 300000),
(46, 4, '0022516282', '2020-04-13', '6', '2', 3, 300000),
(47, 4, '0022516282', '2020-04-13', '7', '2', 3, 300000),
(48, 4, '0022516282', '2020-04-13', '8', '2', 3, 300000),
(49, 4, '0022516282', '2020-04-13', '9', '2', 3, 300000),
(50, 4, '0022516282', '2020-04-13', '10', '2', 3, 300000),
(51, 4, '0022516282', '2020-04-13', '11', '2', 3, 300000),
(52, 4, '0022516282', '2020-04-13', '12', '2', 3, 300000),
(53, 4, '0022516282', '2020-04-13', '1', '3', 3, 300000),
(54, 4, '0022516282', '2020-04-13', '2', '3', 3, 300000),
(55, 4, '0022516282', '2020-04-13', '3', '3', 3, 300000),
(56, 4, '0022516282', '2020-04-13', '4', '3', 3, 300000),
(57, 4, '0022516282', '2020-04-13', '5', '3', 3, 300000),
(58, 4, '0022516282', '2020-04-13', '6', '3', 3, 300000),
(59, 4, '0022516282', '2020-04-13', '7', '3', 3, 300000),
(60, 4, '0022516282', '2020-04-13', '8', '3', 3, 300000),
(61, 4, '0022516282', '2020-04-13', '9', '3', 3, 300000),
(62, 4, '0022516282', '2020-04-13', '10', '3', 3, 300000),
(63, 4, '0022516282', '2020-04-13', '11', '3', 3, 300000),
(64, 4, '0022516282', '2020-04-13', '12', '3', 3, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(4, 'petugas', 'petugas', 'Fatiya Syifa', 'petugas'),
(6, 'admin', 'admin', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `password`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0022516282', '11707120', 'FATIYA SYIFAURRAHMAH', '1234', 2, 'cisaat', '087776144510', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 1, 3600000),
(2, 2, 3600000),
(3, 3, 3600000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `jumlah_bayar` (`jumlah_bayar`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `nominal` (`nominal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_5` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
