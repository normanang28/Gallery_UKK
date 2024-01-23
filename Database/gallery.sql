-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 03:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(4) NOT NULL,
  `nama_album` varchar(255) NOT NULL,
  `maker_album` int(4) NOT NULL,
  `tanggal_album` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `maker_album`, `tanggal_album`) VALUES
(5, 'Pariwisata', 2, '2024-01-23'),
(6, 'coba-1', 2, '2024-01-23'),
(7, 'coba-2', 2, '2024-01-23'),
(8, 'coba-3', 3, '2024-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(4) NOT NULL,
  `id_album_gallery` int(4) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_gallery` varchar(15) NOT NULL,
  `gallery` text NOT NULL,
  `maker_gallery` int(4) NOT NULL,
  `tanggal_gallery` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album_gallery`, `kategori`, `nama_gallery`, `gallery`, `maker_gallery`, `tanggal_gallery`) VALUES
(4, 5, 'pariwisata', 'Eiffel Tower ', '1706013038_811055a71f17a6ff8f68.jpg', 2, '2024-01-23'),
(5, 5, 'pariwisata', 'Cina Si He Yuan', '1706014739_91246a0bf67173b66756.jpg', 2, '2024-01-23'),
(6, 5, 'pariwisata', 'big ben', '1706016950_3b86fc5da882402e4432.jpg', 2, '2024-01-23'),
(7, 5, 'pariwisata', 'Colosseum', '1706017173_f8f5e7157a6c4ff99ebe.jpg', 2, '2024-01-23'),
(8, 5, 'pariwisata', 'Trevi Fountain', '1706017249_89770ee9343828ef0a3a.jpg', 2, '2024-01-23'),
(9, 5, 'pariwisata', 'Castel Sant\'Ang', '1706017517_1ed200a5b7b9ba61abdc.jpg', 2, '2024-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `id_user_pengguna` int(4) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_user_pengguna`, `nama_pengguna`) VALUES
(2, 2, 'norman ang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `foto`) VALUES
(2, 'norman', '9ac915832a9a1c970c1564708917c3aa', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD UNIQUE KEY `NAMA_ALBUM` (`nama_album`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `USERNAME` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
