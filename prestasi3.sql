-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2016 at 06:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prestasi3`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `kesibukan` varchar(25) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `kesibukan`, `angkatan`, `alamat`, `email`, `telp`) VALUES
(1, 'satu', '', 2011, 'disanaa', '', 0),
(1500, 'coba', '', 2011, 'semarang', '', 0),
(11523032, 'Erandra', '', 2011, 'jakal km 12', 'test@yahoo.com', 2147483647),
(11523033, 'gogon', 'asdasdsa', 2011, 'Semarang', 'gogon@yahoo.com', 6545212),
(11523100, 'seratus', '', 2011, 'jakal km 4', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_prestasi`
--

CREATE TABLE IF NOT EXISTS `mhs_prestasi` (
  `id_mhs_prestasi` int(5) NOT NULL,
  `id_sub_prestasi` int(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `verifikasi` enum('0','1') DEFAULT '0',
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_prestasi`
--

INSERT INTO `mhs_prestasi` (`id_mhs_prestasi`, `id_sub_prestasi`, `nim`, `keterangan`, `verifikasi`, `tahun`) VALUES
(9, 3, '11523032', 'dua', '0', 0),
(10, 4, '11523032', 'tiga', '1', 0),
(12, 5, '11523033', 'gegegegege', '1', 0),
(13, 4, '11523033', 'grggrgrgrgrgrgrgr', '0', 0),
(14, 1, '11523033', 'iniinininnininin', '0', 0),
(15, 5, '11523033', 'aadssadsadsadasdsaa', '0', 0),
(16, 1, '11523032', 'kokokokokokok', '0', 0),
(17, 1, '11523033', 'coba', '0', 0),
(18, 4, '11523033', 'g tau', '1', 0),
(19, 6, 'bla', 'bla', '0', 0),
(20, 3, '11523032', 'traraarararar', '0', 0),
(21, 3, '11523032', 'kakakakakakakaka', '0', 0),
(22, 4, '11523033', 'gigi', '1', 0),
(23, 3, '11523032', 'test', '1', 0),
(24, 6, '11523032', 'aa', '0', 0),
(26, 4, '11523032', 'juara lomba', '1', 0),
(27, 4, '11523032', 'Lomba tingkat nasional', '1', 0),
(28, 1, '11523100', 'prestasi A ', '0', 0),
(29, 3, '11523100', 'Prestasi B', '0', 0),
(30, 4, '11523100', 'Prestasi C', '0', 0),
(31, 5, '11523100', 'Prestasi D', '1', 0),
(32, 1, '11523032', '2000', '0', 0),
(33, 3, '11523032', '2016', '1', 0),
(34, 1, '11523032', 'AKMS', '1', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, '', 'admin', 'admin', 1),
(3, 'erandra', '11523032', 'aa', 2),
(4, 'coba', '11523099', 'aa', 2),
(6, 'satu', '1', 'a', 2),
(7, 'seratus', '11523100', 'aa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `kategori`) VALUES
(1, 'Perlombaan  coba'),
(2, 'Beasiswa'),
(3, 'Publikasi Karya Ilmiah'),
(4, 'Student Exchange');

-- --------------------------------------------------------

--
-- Table structure for table `sub_prestasi`
--

CREATE TABLE IF NOT EXISTS `sub_prestasi` (
  `id_sub_prestasi` int(25) NOT NULL,
  `id_prestasi` int(25) NOT NULL,
  `nama_sub_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_prestasi`
--

INSERT INTO `sub_prestasi` (`id_sub_prestasi`, `id_prestasi`, `nama_sub_kategori`) VALUES
(1, 2, 'Beasiswa AKMS'),
(2, 2, 'Beasiswa Akademik'),
(3, 2, 'Beasiswa Hafidz Alqur''an'),
(4, 2, 'Beasiswa Lembaga'),
(5, 3, 'Senati'),
(6, 3, 'Senimap'),
(7, 3, 'seminar'),
(11, 2, 'beaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mhs_prestasi`
--
ALTER TABLE `mhs_prestasi`
  ADD PRIMARY KEY (`id_mhs_prestasi`), ADD KEY `id_prestasi` (`id_sub_prestasi`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `sub_prestasi`
--
ALTER TABLE `sub_prestasi`
  ADD PRIMARY KEY (`id_sub_prestasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs_prestasi`
--
ALTER TABLE `mhs_prestasi`
  MODIFY `id_mhs_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_prestasi`
--
ALTER TABLE `sub_prestasi`
  MODIFY `id_sub_prestasi` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
