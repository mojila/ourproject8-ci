-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 09:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id` int(11) NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `file` text NOT NULL,
  `urutan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_produk`
--

INSERT INTO `gambar_produk` (`id`, `kode_produk`, `file`, `urutan`) VALUES
(9, 1, '149ea13d6ece106cff63297033c663d4.png', 1),
(10, 1, 'fad9633c675bd3f3986c14ff642c9641.png', 2),
(11, 1, '4d86bdc1a2d99acb422fface9a0a3ac2.png', 3),
(12, 1, '53090ef94f31f3fbd0faad90d4477aeb.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `langganan`
--

CREATE TABLE `langganan` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `surel` varchar(64) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `surel`, `kata_sandi`, `foto`) VALUES
(17, 'Aji', 'aji@email.com', 'c5727e67fa4ff0fa01ce37cf331c5415', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `bintang` int(1) NOT NULL,
  `keterangan` text NOT NULL,
  `ukuran` text NOT NULL,
  `variasi` text NOT NULL,
  `minimal_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `bintang`, `keterangan`, `ukuran`, `variasi`, `minimal_order`) VALUES
(4, '1', 'coba aja lagi', 1, '<p>adaw</p>\r\n', '<p>adaw</p>\r\n', 'putih', 1);

-- --------------------------------------------------------

--
-- Table structure for table `situs`
--

CREATE TABLE `situs` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `deskripsi` varchar(64) NOT NULL,
  `tentang` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `situs`
--

INSERT INTO `situs` (`id`, `nama`, `deskripsi`, `tentang`, `logo`) VALUES
(1, 'OurProject8', 'Coba Deskripsi', '<p>Coba Tentang Situs</p>\r\n', 'c6cbef0ee9de3a09c88fed999462203b.png');

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE `slide_show` (
  `id` int(11) NOT NULL,
  `nomor` int(1) NOT NULL,
  `gambar` varchar(32) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `keterangan` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sosial_hub`
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
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nomor` int(1) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosial_hub`
--
ALTER TABLE `sosial_hub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
