-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 05:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`, `level`) VALUES
(5, 'admin@gmail.com', 'admin', '$2y$10$WpPux7EexdBuHeaP1CU9yuIBxBYHjMxJY4aADhCJFpyREgpvMsQty', 'admin'),
(6, 'zidan@gmail', 'zidannnn', '$2y$10$GntDKrMhWJy/wV.EKDqHyeRT5SoIqEH9K4.ybNa8OjgmZP3Z5OLMK', 'siswa'),
(8, 'user@gmail.com', 'user', '$2y$10$RJd0f0eJsm1BapriL/fKkeuqxABppuzIEfKO/jK8gKdZB/0kZiX0e', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(100) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama_siswa`, `induk`, `jenis_pembayaran`, `gambar`) VALUES
(13, 'upin', '214132', 'SPP Rp.300.000', '5e8b066f706a0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(100) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `anak_ke` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `alamat`) VALUES
(1, 'wqsx', 'laki-laki', 'xcv', '0000-00-00', 'sxxxxx ', '', 2, '2dc'),
(2, 'zidan', 'laki-laki', 'vdv', '2077-06-09', 'atgsrd', 'WNI', 2, 'wdcv dcsfr dcs c cscsrevcc ssdff'),
(3, 'zidan', 'laki-laki', 'bandung', '2015-12-05', 'islam', 'WNI', 0, ''),
(7, 'Dilla', 'perempuan', 'Bandung', '2008-08-30', 'Islam', 'WNA', 2, 'Clan Blackmix '),
(8, 'Zidan Muhamad Daffa', 'laki-laki', 'Bandund', '2015-07-17', 'Islam', 'WNI', 11, 'jl. jl. jl. jl.'),
(53, 'asd', 'laki-laki', 'qsw', '4122-12-31', 'dsa', 'WNI', 13, 'dsaaa'),
(54, 'sbjb', 'laki-laki', 'jnasjnj', '0121-11-04', 'jnajndn', 'WNI', 123, 'nasnkcanc\r\n'),
(55, 'razwa', 'laki-laki', 'bandung', '2665-04-20', 'atheis', 'WNI', 100, 'sdajdn\r\n'),
(56, 'fikry', 'laki-laki', 'bandung', '0000-00-00', 'satanis', 'WNI', 21, 'lsalda'),
(57, 'shandy', 'laki-laki', 'bandung', '3532-03-24', 'islam', 'WNI', 234, 'maksm'),
(58, 'kharisma', 'laki-laki', 'bandung', '5678-01-31', 'athehis', 'WNI', 2713, 'kmaskm'),
(59, 'aulia', 'laki-laki', 'bandung', '2332-02-12', 'jsnj', 'WNI', 2, 'kjdk'),
(60, 'erlangga', 'laki-laki', 'samkdmk', '0454-02-13', 'konghucu', 'WNI', 123, 'ancnck'),
(61, 'daffa', 'perempuan', 'bandunadn', '0434-02-12', 'budha', 'WNI', 12, 'ksmk'),
(62, 'robert', 'laki-laki', 'bandung', '0532-12-12', 'satanis', 'WNI', 21343, 'ksmakm'),
(63, 'alisha', 'perempuan', 'kaskdm', '0012-02-13', 'kmskmk', 'WNI', 132, 'ndsmadn\r\n'),
(64, 'arani', 'perempuan', 'ndajn', '0032-02-12', 'sqc', 'WNI', 23, 'ndan'),
(65, 'rensi', 'perempuan', 'jasnsdjn', '0041-02-13', 'kamskm', 'WNI', 213, 'kmckam'),
(66, 'susanti', 'perempuan', 'malaysia', '0322-02-12', 'isjak', 'WNA', 1, 'sadaca'),
(67, 'upin', 'laki-laki', 'malaysia', '0000-00-00', 'islam', 'WNA', 2, 'kampung durian runtuh\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `induk` char(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `induk`, `nama`, `gender`, `tanggalLahir`, `alamat`, `gambar`) VALUES
(14, '12345', 'upin', 'Laki-laki', '2020-03-03', 'kampung durian runtuh rt 07', '5e7f16c8c21e0.jpg'),
(15, '696969', 'ipin', 'Laki-laki', '2009-06-23', 'kampung durian runtuh', '5e7f16d59bfa4.jpg'),
(16, '63571', 'ijat', 'Laki-laki', '2009-12-21', 'Kampung durian runtuh', '5e7b177167c69.jpg'),
(18, '12341', 'mei mei', 'Laki-laki', '0003-12-31', 'kampung durian runtuh', '5e7e103a1d259.jpg'),
(19, '26716371', 'Fizi', 'Laki-laki', '2009-12-04', 'kampung durian runtuh', '5e7f16a85400e.jpg'),
(20, '23456', 'mail', 'Laki-laki', '2009-02-13', 'kampung durian runtuh', '5e7f17087763a.jpg'),
(21, '21342', 'ehsan', 'Laki-laki', '2009-02-22', 'kampung durian runtuh', '5e7f1767839bc.jpeg'),
(23, '12345', 'test', 'Laki-laki', '0132-02-12', 'sads', '5e8bd35e67072.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
