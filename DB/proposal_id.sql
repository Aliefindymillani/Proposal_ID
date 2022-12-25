-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 05:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proposal_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tgl_pengajuan` datetime NOT NULL,
  `ketua_pelaksana` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `berkas_file` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `username`, `password`, `name`, `akses`) VALUES
('joko@gmail.com', 'joko123', '$2y$10$ATHrr183sCPuZJ3CnnDmYeZNDNHfNVPzJUaEkf3ZHnd4/6g76TwXO', 'joko', 'admin'),
('siti@email.com', 'siti123', '$2y$10$BY8ZWJ/AsgchFFqnwK13LOE9jjN2FYeJ.RHb1Li6gIZqP7AZCvp52', 'siti', 'admin'),
('ukmsatu@email.com', 'ukm1', '$2y$10$fzkur4NMUGk6tQwM4xw9BOKkqXHT3ieioe2MoipFWVM0Tgd69dU36', 'ukm satu', 'user'),
('ukm2@email.com', 'ukm2', '$2y$10$pXRDYUvrgKxF8rkrsKgKSuQvq9zTe6Yd6ZRLuPNzb8HGnUsa8S/Z6', 'ukm dua', 'user'),
('wahyu@gmail.com', 'wahyu123', '$2y$10$wg9459i.xMUxN93pJ6pQCuGgaz4NhWnuHpbOoWWpXX7Zjc5eN8.tK', 'wahyu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
