-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 05:49 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prestasi7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kesibukan` varchar(25) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `kesibukan`, `angkatan`, `alamat`, `email`, `telp`) VALUES
(11523001, 'Erandra', 'Synaptic', 2011, 'jakal km 12 candi 3 rt 6 ', 'erandra@ymail.com', '0878751010'),
(11523002, 'Galuh', 'UKM Badminton', 2011, 'Gentan', 'galuh.jiwandana@gmail.com', '0887877221'),
(11523032, 'Randra', 'Himpunan Mahasiswa', 2011, 'Jakal km 12 Wisma Artha r', 'randra@gmail.com', '0856102933');

-- --------------------------------------------------------

--
-- Table structure for table `mhs_prestasi`
--

CREATE TABLE IF NOT EXISTS `mhs_prestasi` (
  `id_mhs_prestasi` int(5) NOT NULL,
  `id_sub_sub_prestasi` int(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `verifikasi` enum('0','1','2') DEFAULT '0',
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_prestasi`
--

INSERT INTO `mhs_prestasi` (`id_mhs_prestasi`, `id_sub_sub_prestasi`, `nim`, `keterangan`, `verifikasi`, `tahun`) VALUES
(47, 1, '11523032', 'Juara 1 PKM Penelitian ', '1', 2016),
(48, 19, '11523032', 'Beasiswa Supersemar UII', '1', 2016),
(49, 27, '11523032', 'SNATIA di Yogyakarta', '1', 2017),
(50, 22, '11523032', 'Student Exchange di Thailand ', '1', 2015),
(51, 34, '11523001', 'ICCBN di Jakarta', '1', 2014),
(52, 6, '11523002', 'Juara 1 Idea Fuse Programming di Jakarta', '1', 2015),
(53, 12, '11523002', 'Juara 3 INAICTA Financial & SME di Surabaya', '1', 2016),
(54, 26, '11523001', 'PENGGALIAN PENGETAHUAN DARI DATA RIWAYAT AKADEMIK UNTUK REKOMENDASI PEMILIHAN MATA KULIAH PILIHAN', '1', 2016),
(55, 26, '11523001', 'MEASURING PERFORMANCE OF ENGINEERING DEPARTMENT BY USING BALANCE SCORECARD (CASE STUDY IN PT. XYZ)', '2', 2016),
(56, 33, '11523001', 'ICIC 2015 di Yogyakarta', '0', 2016),
(57, 18, '11523002', 'Beasiswa Toyoya Astra Semarang', '0', 2016);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, '', 'admin', 'admin', 1),
(11, 'Jiwandana', '11523003', 'aa', 2),
(12, 'Oki', '11523004', 'aa', 2),
(13, 'Willy', '11523005', 'aa', 2),
(16, 'Erandra', '11523001', 'aa', 2),
(17, 'Galuh', '11523002', 'aa', 2),
(18, 'Randra', '11523032', 'aa', 2);

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
(1, 'Perlombaan'),
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_prestasi`
--

INSERT INTO `sub_prestasi` (`id_sub_prestasi`, `id_prestasi`, `nama_sub_kategori`) VALUES
(1, 1, 'Lokal'),
(2, 1, 'Nasional'),
(3, 1, 'Internasional'),
(4, 2, 'Internal'),
(5, 2, 'eksternal'),
(6, 3, 'Local'),
(7, 3, 'Nasional'),
(8, 3, 'Internasional'),
(9, 4, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_prestasi`
--

CREATE TABLE IF NOT EXISTS `sub_sub_prestasi` (
  `id_sub_sub_prestasi` int(20) NOT NULL,
  `id_sub_prestasi` int(20) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_prestasi`
--

INSERT INTO `sub_sub_prestasi` (`id_sub_sub_prestasi`, `id_sub_prestasi`, `nama_prestasi`) VALUES
(1, 1, 'PKM Penelitian (PKM-P)'),
(2, 1, 'PKM Pengabdian Masyarakat (PKM-M)'),
(3, 1, 'PKM Penerapan Teknologi (PKM-T)'),
(4, 1, 'PKM Artikel Ilmiah (PKM-AI)'),
(5, 1, 'PKM Gagasan Tertulis (PKM-GT)'),
(6, 2, 'Idea Fuse Programming'),
(7, 2, 'TechPhoria'),
(8, 2, 'Compfest'),
(9, 2, 'Technofest Programming'),
(10, 3, 'INAICTA Health & Well being'),
(11, 3, 'INAICTA Tourism & Hospitally'),
(12, 3, 'INAICTA Finanical & SME'),
(13, 3, 'INAICTA Research & Development'),
(14, 4, 'Beasiswa AKMS'),
(15, 4, 'Beasiswa Akademik'),
(16, 4, 'Beasiswa Hafidz Alqur''an'),
(17, 4, 'Beasiswa Lembaga'),
(18, 5, 'Beasiswa Toyota Astra'),
(19, 5, 'Beasiswa Supersemar'),
(20, 5, 'Beasiswa Bank'),
(21, 5, 'Beasiswa Dikpora & Bidik Misi'),
(22, 9, 'RMUTT, Thailand'),
(23, 9, 'IIUM, Malaysia'),
(24, 6, 'Seminar Nasional Aplikasi Teknologi Informasi (SNATi)'),
(25, 6, 'Seminar Nasional Informatika Medis (SNIMed)'),
(26, 6, 'Teknoin\r\n'),
(27, 7, 'Seminar Nasional Teknologi Informasi dan Aplikasinya (SNATIA)'),
(28, 7, 'Konferensi Nasional Sistem Infromasi'),
(29, 7, 'Seminar Nasional Pendidikan Teknik Informatika (SENAPATI)'),
(30, 7, 'Seminar Nasional Sistem Informasi Indonesia (SESINDO)'),
(31, 7, 'Konferensi Nasional Teknologi Informasi dan Komunikasi (KNASTIK)'),
(32, 7, 'Seminar Nasional Teknologi Terapan (SNTT)'),
(33, 8, 'International Conference on Informatics and Computing (ICIC)'),
(34, 8, 'International Conference on Communications and Broadband Networking (ICCBN)'),
(35, 8, 'International Conference on “Engineering & Technology, Computer, Basic & Applied Sciences” (ECBA)'),
(36, 8, 'International Conference on Information Technology and Digital Applications \r\n(ICITDA)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mhs_prestasi`
--
ALTER TABLE `mhs_prestasi`
  ADD PRIMARY KEY (`id_mhs_prestasi`), ADD KEY `id_prestasi` (`id_sub_sub_prestasi`), ADD KEY `nim` (`nim`);

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
  ADD PRIMARY KEY (`id_sub_prestasi`), ADD KEY `id_sub_prestasi` (`id_sub_prestasi`), ADD KEY `id_prestasi` (`id_prestasi`);

--
-- Indexes for table `sub_sub_prestasi`
--
ALTER TABLE `sub_sub_prestasi`
  ADD PRIMARY KEY (`id_sub_sub_prestasi`), ADD KEY `id_sub_prestasi` (`id_sub_prestasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs_prestasi`
--
ALTER TABLE `mhs_prestasi`
  MODIFY `id_mhs_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_prestasi`
--
ALTER TABLE `sub_prestasi`
  MODIFY `id_sub_prestasi` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_sub_prestasi`
--
ALTER TABLE `sub_sub_prestasi`
  MODIFY `id_sub_sub_prestasi` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
