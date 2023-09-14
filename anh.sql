-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 14, 2023 lúc 09:31 PM
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
(88, 1, '1', '23_09_14_18h_09m_44sz4198326090229_51f6b04b6e6a867cc2c4c6375dfa18ce.jpg', ''),
(92, 23, 'tốt', '23_09_14_18h_09m_33sz4198326087687_8f277628ae5a84e80993fa43db6892e6.jpg', 'Chưa đặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyendi`
--

CREATE TABLE `chuyendi` (
  `id` int(11) NOT NULL,
  `diemkhoihanh` varchar(255) NOT NULL,
  `diemden` varchar(255) NOT NULL,
  `sohanhkhach` int(11) NOT NULL,
  `ngaydi` varchar(255) NOT NULL,
  `ngaykhuhoi` varchar(255) NOT NULL,
  `khuhoi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtien`
--

CREATE TABLE `phuongtien` (
  `id` int(11) NOT NULL,
  `phuongtien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongtien`
--

INSERT INTO `phuongtien` (`id`, `phuongtien`) VALUES
(1, 'Máy bay'),
(2, 'Tàu hỏa'),
(3, 'Xe khách');

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
-- Chỉ mục cho bảng `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `chuyendi`
--
ALTER TABLE `chuyendi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
