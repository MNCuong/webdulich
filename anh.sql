-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 02:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anh`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `username`, `password`, `email`, `full_name`, `role`) VALUES
(2, '2', '2', 'hl@gmail.com', '2', 'User'),
(10, 'hanhluu', '123456', 'hl@gmail.com', '1', 'User'),
(23, '3', '3', '3@3', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `anhhh`
--

CREATE TABLE `anhhh` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `anhphong` varchar(255) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhhh`
--

INSERT INTO `anhhh` (`id`, `price`, `description`, `anhphong`, `tinhtrang`) VALUES
(88, 1, '1', '23_09_14_18h_09m_44sz4198326090229_51f6b04b6e6a867cc2c4c6375dfa18ce.jpg', ''),
(92, 23, 'tốt', '23_09_14_18h_09m_33sz4198326087687_8f277628ae5a84e80993fa43db6892e6.jpg', 'Chưa đặt');

-- --------------------------------------------------------

--
-- Table structure for table `chuyendi`
--

CREATE TABLE `chuyendi` (
  `id` int(11) NOT NULL,
  `phuongTien` int(11) NOT NULL,
  `diemKhoiHanh` varchar(255) NOT NULL,
  `diemDen` varchar(255) NOT NULL,
  `ngayDi` varchar(255) NOT NULL,
  `soHanhKhach` int(11) NOT NULL,
  `giaVe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chuyendi`
--

INSERT INTO `chuyendi` (`id`, `phuongTien`, `diemKhoiHanh`, `diemDen`, `ngayDi`, `soHanhKhach`, `giaVe`) VALUES
(40, 1, 'Hà Nội', 'Hạ Long', '2023-09-19', 100, 1000000),
(48, 3, 'Cao Bằng', 'Sài Gòn', '', 100, 500000),
(53, 3, 'Cao Bằng', 'Sài Gòn', '', 100, 500000),
(55, 2, '2', '2', '', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phuongtien`
--

CREATE TABLE `phuongtien` (
  `id` int(11) NOT NULL,
  `phuongtien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phuongtien`
--

INSERT INTO `phuongtien` (`id`, `phuongtien`) VALUES
(1, 'Máy bay'),
(2, 'Tàu hỏa'),
(3, 'Xe khách');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anhhh`
--
ALTER TABLE `anhhh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phuongTien` (`phuongTien`);

--
-- Indexes for table `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `anhhh`
--
ALTER TABLE `anhhh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `chuyendi`
--
ALTER TABLE `chuyendi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `phuongtien`
--
ALTER TABLE `phuongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD CONSTRAINT `chuyendi_ibfk_1` FOREIGN KEY (`phuongTien`) REFERENCES `phuongtien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
