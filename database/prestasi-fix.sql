-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 05:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prestasi-fix`
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
(10523003, 'Jiwandana', '', 2010, 'Perumahan Gejayan', 'jiwandana@ymail.com', '0878751516'),
(11523001, 'Erandra', 'Synaptic', 2011, 'jakal km 12 candi 3 rt 6 ', 'erandra@ymail.com', '0878751010'),
(11523002, 'Galuh', '', 2011, 'Jakal km 12 Wisma Artha r', 'galuh.jiwandana@gmail.com', '0887877221'),
(11523004, 'Oki ', '', 2011, 'Condong Catur ', '', ''),
(11523005, 'Willy', '', 2010, 'Gentan', 'willy@gmail.com', '0875611542');

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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_prestasi`
--

INSERT INTO `mhs_prestasi` (`id_mhs_prestasi`, `id_sub_sub_prestasi`, `nim`, `keterangan`, `verifikasi`, `tahun`) VALUES
(51, 34, '11523001', 'ICCBN di Jakarta', '1', 2014),
(52, 6, '11523002', 'Juara 1 Idea Fuse Programming di Jakarta', '1', 2015),
(53, 12, '11523002', 'Juara 3 INAICTA Financial & SME di Surabaya', '1', 2016),
(54, 26, '11523001', 'PENGGALIAN PENGETAHUAN DARI DATA RIWAYAT AKADEMIK UNTUK REKOMENDASI PEMILIHAN MATA KULIAH PILIHAN', '1', 2016),
(55, 26, '11523001', 'MEASURING PERFORMANCE OF ENGINEERING DEPARTMENT BY USING BALANCE SCORECARD (CASE STUDY IN PT. XYZ)', '2', 2016),
(56, 33, '11523001', 'ICIC 2015 di Yogyakarta', '0', 2016),
(57, 18, '11523002', 'Beasiswa Toyoya Astra Semarang', '0', 2016),
(58, 41, '11523001', 'Juara 1 ', '1', 2016),
(59, 73, '11523001', 'Juara 3', '1', 2015),
(60, 77, '11523001', 'Juara 2', '1', 2014),
(61, 93, '11523001', 'Yayasan Toyota dan Astra (YTA) Reguler', '2', 2015),
(62, 52, '11523002', 'Juara 3', '0', 2011),
(65, 95, '10523003', 'Beasiswa Bank Selama 1 tahun', '1', 2012),
(66, 53, '11523005', 'juara 3', '1', 2015),
(67, 108, '11523005', 'Yogyakarta International Conference on “Engineering & Technology, Computer , Basic & Applied Sciences”', '2', 2015),
(68, 109, '11523005', 'Cluster Analysis of Indonesian Province Based on Household Primary Cooking Fuel Using K-Means', '0', 2011);

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
(11, 'Jiwandana', '10523003', 'aa', 2),
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_prestasi`
--

INSERT INTO `sub_prestasi` (`id_sub_prestasi`, `id_prestasi`, `nama_sub_kategori`) VALUES
(10, 1, 'Gemnastik'),
(11, 1, 'Cyber Defence Competition (CDC)'),
(12, 1, 'Electronic Informatic Competition (ELINFO)'),
(13, 1, 'NetRiders Competition'),
(14, 1, 'PKM-PimNas'),
(15, 1, 'INAICTA'),
(16, 1, 'Android MedApp'),
(17, 1, 'SAP Lumira'),
(18, 1, 'OSN Pertamina'),
(19, 1, 'Compfest'),
(20, 1, 'Tebas Award'),
(21, 1, 'IdeaFuse '),
(22, 1, 'ImagineCup'),
(23, 1, 'Web Design Competition'),
(24, 1, 'Indonesia Cyber Amy'),
(25, 1, 'Lomba Cipta Elektronik Nasional (LCEN)'),
(26, 1, 'Data Mining Statistic Competition (DIMENSION)'),
(27, 1, 'Kontes Robot Indonesia (KRI)'),
(28, 2, 'Internal'),
(29, 2, 'Eksternal'),
(34, 3, 'Local'),
(35, 3, 'Nasional'),
(36, 3, 'Internasional'),
(37, 4, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_prestasi`
--

CREATE TABLE IF NOT EXISTS `sub_sub_prestasi` (
  `id_sub_sub_prestasi` int(20) NOT NULL,
  `id_sub_prestasi` int(20) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_prestasi`
--

INSERT INTO `sub_sub_prestasi` (`id_sub_sub_prestasi`, `id_sub_prestasi`, `nama_prestasi`) VALUES
(37, 10, 'Pemprograman'),
(38, 10, 'Pengembangan Perangkat Lunak'),
(39, 10, 'Data Mining'),
(40, 10, 'Keamanan Jaringan & Sistem Informasi'),
(41, 10, 'Animasi'),
(42, 10, 'Piranti Cerdas & Embledded System'),
(43, 10, 'Desain User Experience'),
(44, 10, 'Pengembangan Bisnis TIK'),
(45, 10, 'Pengembangan Aplikasi Permainan'),
(46, 10, 'e-Goverment'),
(47, 11, 'Cyber Defence Competition (CDC)'),
(48, 12, 'Electronic Informatic Competition (ELINFO)'),
(49, 13, 'CCNA '),
(50, 13, 'CCENT'),
(51, 13, 'IT Essentials'),
(52, 14, 'PKM Pengabdian Masyarakat (PKM-M)'),
(53, 14, 'PKM Penelitian (PKM-P)'),
(54, 14, 'PKM Kewirausahaan (PKM-K)'),
(55, 14, 'PKM Teknologi (PKM-T)'),
(56, 14, 'PKM Gagasan Tertulis (PKM-GT)'),
(57, 14, 'PKM Artikel Ilmiah (PKM-AI)'),
(58, 15, 'Health & Well-being'),
(59, 15, 'Tourism & Hospitally'),
(60, 15, 'Education & Culture'),
(61, 15, 'Financial & SME'),
(62, 15, 'Research & Development'),
(63, 15, 'Games'),
(64, 15, 'Digital Interactive Media'),
(65, 15, 'Digital Animation'),
(66, 15, 'Student Projects : Application'),
(67, 15, 'Student Projects : Games'),
(68, 15, 'Student Projects : Animation'),
(69, 15, 'e-Inclusion & Sustainability'),
(70, 15, 'Applicative Robot'),
(71, 16, 'Android MedApp'),
(72, 17, 'SAP Lumira'),
(73, 18, 'Kategori Teori'),
(74, 18, 'Kategori Proyek Sains'),
(75, 19, 'CompFest'),
(76, 20, 'Tebas Award'),
(77, 21, 'ACM/ICPC Multi-Provincial'),
(78, 21, 'UI/UX Design'),
(79, 22, 'ImagineCup'),
(80, 23, 'Web Design Competition'),
(81, 24, 'Indonesia Cyber Army'),
(82, 25, 'Lomba Cipta Elektronika Nasional (LCEN)'),
(83, 26, 'Data Mining Statistic Competition (DIMENSION)'),
(84, 27, 'Kontes Robot ABU Indonesia (KRAI)'),
(85, 27, 'Kontes Robot Pemadam Api Indonesia (KRPAI)'),
(86, 27, 'Kontes Robot Seni Tari Indonesia (KRSTI)'),
(87, 27, 'Kontes Robot Sepak Bola Indonesia (KRSBI)'),
(88, 27, 'Ekshibisi Sepak Bola Beroda Indonesia (ERSBI)'),
(89, 28, 'Beasiswa AKMS'),
(90, 28, 'Beasiswa Akademik'),
(91, 28, 'Beasiswa Hafidz Alqur''an'),
(92, 28, 'Beasiswa Lembaga'),
(93, 29, 'Beasiswa Toyota Astra'),
(94, 29, 'Beasiswa Supersemar'),
(95, 29, 'Beasiswa Bank'),
(96, 29, 'Beasiswa Dikpora & Bidik Misi'),
(97, 34, 'Seminar Nasional Aplikasi Teknologi Informasi (SNATi)'),
(98, 34, 'Seminar Nasional Informatika Medsi (SNIMed)'),
(99, 34, 'Teknoin'),
(100, 35, 'Seminar Nasional Teknologi Informasi dan Aplikasinya (SNATIA)'),
(101, 35, 'Konferensi Nasional Sistem Informasi'),
(102, 35, 'Seminar Nasional Pendidikan Teknik Informatika (SENAPATI)'),
(103, 35, 'Seminar Nasional Sistem Informasi Indonesia (SESINDO)'),
(104, 35, 'Konferensi Nasional Teknologi Informasi dan Komunikasi (KNASTIK)'),
(105, 35, 'Seminar Nasional Teknologi Terapan (SNTT)'),
(106, 36, 'International Conference on Informatics and Computing (ICIC)'),
(107, 36, 'International Conference on Communications and Broadband Networking (ICCBN)'),
(108, 36, 'International Conference on "Engineering & Teknology, Computer, Basic & Applied Sciences" (ECBA)'),
(109, 36, 'International Conference on Information Technology and Digital Applications (ICITDA)'),
(110, 37, 'RMUTT, Thailand'),
(111, 37, 'IIUM, Malaysia');

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
  MODIFY `id_mhs_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
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
  MODIFY `id_sub_prestasi` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `sub_sub_prestasi`
--
ALTER TABLE `sub_sub_prestasi`
  MODIFY `id_sub_sub_prestasi` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
