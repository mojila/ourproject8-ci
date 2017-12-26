-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2017 pada 09.49
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id` int(11) NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `file` text NOT NULL,
  `urutan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_produk`
--

INSERT INTO `gambar_produk` (`id`, `kode_produk`, `file`, `urutan`) VALUES
(1, 1, '63ce56e778657a393c0558e1c2e43dd7.jpg', 1),
(2, 1, '57f3fb1e81d2b0ecaa1cd225558b3fee.jpg', 2),
(3, 1, '23d141ebe44c62439cc131f640085fe3.jpg', 3),
(4, 1, '0bc53f793cd8e0069208682bf81625e7.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(3, 'Stiker'),
(4, 'Paper Bag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langganan`
--

CREATE TABLE `langganan` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `surel` varchar(64) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `surel`, `kata_sandi`, `foto`) VALUES
(17, 'Aji', 'aji@email.com', 'c5727e67fa4ff0fa01ce37cf331c5415', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(32) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `bintang` int(1) NOT NULL,
  `keterangan` text NOT NULL,
  `ukuran` text NOT NULL,
  `variasi` text NOT NULL,
  `minimal_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `id_kategori`, `nama`, `bintang`, `keterangan`, `ukuran`, `variasi`, `minimal_order`) VALUES
(2, '1', 3, 'Stiker Adaw', 5, '<p>adadsasdasd adaw</p>\r\n', '<p>dsadsadasdas</p>\r\n', 'Putih, Hijau', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id`, `gambar`, `judul`) VALUES
(2, '5d54b468e3e8343420e3b4bb8bb1a6d0.png', 'Promo 1'),
(3, 'ff44a54522404c6f13e59b7cfa491bb8.png', 'Promo 2'),
(4, '4925ec6deea02082e78eb1bc1f9c15a7.png', 'Promo 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `situs`
--

CREATE TABLE `situs` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `deskripsi` varchar(64) NOT NULL,
  `tentang` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `situs`
--

INSERT INTO `situs` (`id`, `nama`, `deskripsi`, `tentang`, `logo`) VALUES
(1, 'OurProject8', 'Coba Deskripsi', '<p>Coba Tentang Situs</p>\r\n', '63004550f1dc2c8a34593cb8450cdb43.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide_show`
--

CREATE TABLE `slide_show` (
  `id` int(11) NOT NULL,
  `nomor` int(1) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(32) NOT NULL,
  `keterangan` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slide_show`
--

INSERT INTO `slide_show` (`id`, `nomor`, `gambar`, `judul`, `keterangan`, `link`) VALUES
(1, 1, 'da8a04d6599db508638cb4f12fd3cea3.png', 'Promo Diskon ', 'Untuk Pembelian HD Handle Tali', 'http://google.com'),
(2, 2, '1646a6883931965fa7e7adde125e0ce5.png', 'Potongan Harga s/d 30k', 'Untuk pembelian satin printing', 'http://google.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_hub`
--

CREATE TABLE `sosial_hub` (
  `id` int(11) NOT NULL,
  `line` varchar(32) NOT NULL,
  `whatsapp` varchar(32) NOT NULL,
  `instagram` varchar(32) NOT NULL,
  `facebook` varchar(32) NOT NULL,
  `twitter` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `isi`, `foto`) VALUES
(2, 'Aji Laksono', 'Adaw Coba Aja', '1498fb2fd545a56b7b82b648efb630a5.png'),
(3, 'Adaw', 'Coba Lagi', 'a99dd4b1b42d76e1c87c94cc73bb78d3.png'),
(4, 'Bro', 'Ini Coba', '0b555073aeb05ecf492d3b20daf56c20.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situs`
--
ALTER TABLE `situs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial_hub`
--
ALTER TABLE `sosial_hub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `situs`
--
ALTER TABLE `situs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosial_hub`
--
ALTER TABLE `sosial_hub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
