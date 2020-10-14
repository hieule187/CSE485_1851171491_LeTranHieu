-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 05:51 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth04`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `salary` int(20) NOT NULL,
  `gender` enum('Male','Female','','','') NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `description`, `salary`, `gender`, `birthday`, `created_at`) VALUES
(1, 'A', 'khong co gi', 1000, 'Male', '2020-10-01', '2020-10-14 13:33:28'),
(2, 'B', 'khong co gi', 2000, 'Male', '2020-10-02', '2020-10-14 13:33:46'),
(3, 'C', 'khong co gi', 3000, 'Female', '2020-10-03', '2020-10-14 13:41:20'),
(4, 'D', 'khong co gi', 4000, 'Female', '2020-10-04', '2020-10-14 13:41:48'),
(5, 'E', 'khong co gi', 5000, 'Male', '2020-10-05', '2020-10-14 13:42:08'),
(6, 'F', 'khong co gi', 6000, 'Female', '2020-10-06', '2020-10-14 13:42:31'),
(7, 'G', 'khong co gi', 7000, 'Male', '2020-10-07', '2020-10-14 13:42:56'),
(8, 'H', 'khong co gi', 8000, 'Female', '2020-10-08', '2020-10-14 13:43:20'),
(9, 'I', 'khong co gi', 9000, 'Male', '2020-10-09', '2020-10-14 13:43:50'),
(10, 'K', 'khong co gi', 10000, 'Male', '2020-10-10', '2020-10-14 13:44:10'),
(11, 'L', 'khong co gi', 11000, 'Female', '2020-10-11', '2020-10-14 13:37:17'),
(12, 'M', 'khong co gi', 12000, 'Female', '2020-10-12', '2020-10-14 15:02:13'),
(13, '13', 'khong co gi', 13000, 'Male', '2020-10-13', '2020-10-14 15:38:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
