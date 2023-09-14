-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 14, 2023 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acc`
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
-- Đang đổ dữ liệu cho bảng `acc`
--

INSERT INTO `acc` (`id`, `username`, `password`, `email`, `full_name`, `role`) VALUES
(3, 'cuongll', '912003', 'cuongll912003@gmail.com', 'Mai Ngọc Cường', 'Admin'),
(4, 'hanh0902', '09022003', 'hanh0902@gmail.com', 'Lưu Thị Hạnh', 'Admin'),
(9, 'halinh2202', '123456', 'hl@gmail.com', '1', 'User'),
(10, 'hanhluu', '123456', 'hl@gmail.com', '1', 'User'),
(22, '1', '1', 'c@gmail.com', 'mnc', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhhh`
--

CREATE TABLE `anhhh` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `anhphong` varchar(255) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anhhh`
--

INSERT INTO `anhhh` (`id`, `price`, `description`, `anhphong`, `tinhtrang`) VALUES
(88, 1, '1', '23_09_13_10h_09m_02s', ''),
(89, 647, '365565', '23_09_12_22h_09m_52sz4198326076154_85731bdf79af7e8ee8f3f2d99b49b568.jpg', ''),
(90, 45, '4536', '23_09_13_10h_09m_29sz4198326087687_8f277628ae5a84e80993fa43db6892e6.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `anhhh`
--
ALTER TABLE `anhhh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `anhhh`
--
ALTER TABLE `anhhh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
