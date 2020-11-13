-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 12:59 PM
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
-- Cơ sở dữ liệu: `webcse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `id` int(10) NOT NULL,
  `tentinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`id`, `tentinh`) VALUES
(1, 'Hoà Bình'),
(2, 'Sơn La'),
(3, 'Điện Biên'),
(4, 'Lai Châu'),
(5, 'Lào Cai'),
(6, 'Yên Bái'),
(7, 'Hà Giang'),
(8, 'Cao Bằng'),
(9, 'Bắc Kạn'),
(10, 'Lạng Sơn'),
(11, 'Tuyên Quang'),
(12, 'Thái Nguyên'),
(13, 'Phú Thọ'),
(14, 'Bắc Giang'),
(15, 'Quảng Ninh\r\n'),
(16, 'Hà Nội'),
(17, 'Hải Phòng'),
(18, 'Bắc Ninh'),
(19, 'Hà Nam'),
(20, 'Hải Dương'),
(21, 'Hưng Yên'),
(22, 'Nam Định'),
(23, 'Ninh Bình'),
(24, 'Thái Bình'),
(25, 'Vĩnh Phúc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttusers`
--

CREATE TABLE `ttusers` (
  `id` int(10) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(100) NOT NULL,
  `hocluc` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `dantoc` varchar(50) NOT NULL,
  `tongiao` varchar(50) NOT NULL,
  `namtotnghiep` year(4) NOT NULL,
  `hanhkiem` varchar(50) NOT NULL,
  `cmnd` char(100) NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(100) NOT NULL,
  `hokhautc` varchar(100) NOT NULL,
  `dtuutien` char(10) NOT NULL,
  `kvuutien` char(10) NOT NULL,
  `diachilh` varchar(100) NOT NULL,
  `sdt` char(100) NOT NULL,
  `sdtph` char(100) NOT NULL,
  `matinh10` char(10) NOT NULL,
  `matinh11` char(10) NOT NULL,
  `matinh12` char(10) NOT NULL,
  `tinh10` varchar(50) NOT NULL,
  `tinh11` varchar(50) NOT NULL,
  `tinh12` varchar(50) NOT NULL,
  `matruong10` char(10) NOT NULL,
  `matruong11` char(10) NOT NULL,
  `matruong12` char(10) NOT NULL,
  `tentruong10` varchar(50) NOT NULL,
  `tentruong11` varchar(50) NOT NULL,
  `tentruong12` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ttusers`
--

INSERT INTO `ttusers` (`id`, `hoten`, `ngaysinh`, `noisinh`, `hocluc`, `gioitinh`, `dantoc`, `tongiao`, `namtotnghiep`, `hanhkiem`, `cmnd`, `ngaycap`, `noicap`, `hokhautc`, `dtuutien`, `kvuutien`, `diachilh`, `sdt`, `sdtph`, `matinh10`, `matinh11`, `matinh12`, `tinh10`, `tinh11`, `tinh12`, `matruong10`, `matruong11`, `matruong12`, `tentruong10`, `tentruong11`, `tentruong12`) VALUES
(1, 'Lê Trần Hiếu', '2000-07-18', 'Nam Định', 'Giỏi', 'Nam', 'Kinh', 'Không', 2018, 'Tốt', '023688851457', '2018-02-05', 'Nam Định', 'Cổ Lễ - Trực Ninh - Nam Định', '02', 'KV2', 'Cổ Lễ - Trực Ninh - Nam Định', '0325146257', '0974651365', 'M1', 'M1', 'M2', 'Nam Định', 'Nam Định', 'Nam Định', 'T1', 'T1', 'T1', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn'),
(2, 'Trần Thế Kha', '2000-06-15', 'Hà Nội', 'Khá', 'Nam', 'Tày', 'Không', 2018, 'Khá', '035214596874', '2018-01-24', 'Hà Nội', 'Trường Chinh - Đống Đa - Hà Nội', '01', 'KV1', 'Trường Chinh - Đống Đa - Hà Nội', '0231459325', '02354532483', 'M2', 'M2', 'M2', 'Hà Nội', 'Hà Nội', 'Hà Nội', 'T2', 'T2', 'T2', 'THPT Chu Văn An', 'THPT Chu Văn An', 'THPT Chu Văn An'),
(3, 'Nguyễn Văn A', '2000-05-04', 'Nam Định', 'Khá', 'Nam', 'Kinh', 'Không', 2018, 'Khá', '032566685415', '2018-05-04', 'Nam Định', 'Cổ Lễ - Trực Ninh - Nam Định', '02', 'KV2', 'Cổ Lễ - Trực Ninh - Nam Định', '0325146257', '02354532483', 'M1', 'M1', 'M1', 'Nam Định', 'Nam Định', 'Nam Định', 'T1', 'T1', 'T1', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn'),
(4, 'Nguyễn Thị B', '2000-08-09', 'Hà Nội', 'Khá', 'Nữ', 'Kinh', 'Không', 2018, 'Trung bình', '032654489652', '2018-05-12', 'Hà Nội', 'Trường Chinh - Đống Đa - Hà Nội', '01', 'KV1', 'Trường Chinh - Đống Đa - Hà Nội', '0396541265', '0943258741', 'M2', 'M2', 'M1', 'Hà Nội', 'Hà Nội', 'Hà Nội', 'T2', 'T2', 'T2', 'THPT Chu Văn An', 'THPT Chu Văn An', 'THPT Chu Văn An'),
(5, 'Nguyễn Văn C', '2000-07-12', 'Nam Định', 'Trung bình', 'Nam', 'Kinh', 'Không', 2018, 'Khá', '036298562541', '2018-12-05', 'Nam Định', 'Cổ Lễ - Trực Ninh - Nam Định', '02', 'KV2', 'Cổ Lễ - Trực Ninh - Nam Định', '0956321458', '0965214785', 'M1', 'M1', 'M1', 'Nam Định', 'Nam Định', 'Nam Định', 'T1', 'T1', 'T1', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn'),
(6, 'Nguyễn Thị D', '2000-11-12', 'Hà Nội', 'Giỏi', 'Nữ', 'Kinh', 'Không', 2018, 'Khá', '036200041962', '2018-04-02', 'Hà Nội', 'Trường Chinh - Đống Đa - Hà Nội', '01', 'KV1', 'Trường Chinh - Đống Đa - Hà Nội', '0396541265', '0943258741', 'M2', 'M2', 'M2', 'Hà Nội', 'Hà Nội', 'Hà Nội', 'T2', 'T2', 'T2', 'THPT Chu Văn An', 'THPT Chu Văn An', 'THPT Chu Văn An'),
(7, 'Nguyễn Văn E', '2000-08-13', 'Nam Định', 'Khá', 'Nam', 'Tày', 'Không', 2018, 'Trung bình', '036200014258', '2018-04-05', 'Nam Định', 'Cổ Lễ - Trực Ninh - Nam Định', '02', 'KV2', 'Cổ Lễ - Trực Ninh - Nam Định', '09656821478', '0942653258', 'M1', 'M1', 'M1', 'Nam Định', 'Nam Định', 'Nam Định', 'T1', 'T1', 'T1', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn', 'THPT Lê Qúy Đôn'),
(8, 'Nguyễn Thị F', '2000-03-15', 'Hà Nội', 'Khá', 'Nữ', 'Kinh', 'Không', 2018, 'Khá', '036200014258', '2018-05-21', 'Hà Nội', 'Trường Chinh - Đống Đa - Hà Nội', '01', 'KV1', 'Trường Chinh - Đống Đa - Hà Nội', '0963251478', '0963251425', 'M2', 'M2', 'M1', 'Hà Nội', 'Hà Nội', 'Hà Nội', 'T2', 'T2', 'T2', 'THPT Chu Văn An', 'THPT Chu Văn An', 'THPT Chu Văn An');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'hieule187', 'hieule187@gmail.com', 1, '0fed9c19644935070349041f76f358ef36750e06c41bba111580b339f1f85f18ae322df08482d5bedc649befc0181724c4db', '$2y$10$gRDUCTR1sn2qbWbYqI4Hp.8jJQnlyRjaCs/oTGKuau/UPvXKmcItm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ttusers`
--
ALTER TABLE `ttusers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `ttusers`
--
ALTER TABLE `ttusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
