-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2019 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sinhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllop`
--

CREATE TABLE `tbllop` (
  `idlop` int(5) NOT NULL,
  `tenlop` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `GVCN` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nghanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbllop`
--

INSERT INTO `tbllop` (`idlop`, `tenlop`, `GVCN`, `username`, `password`, `nghanh`) VALUES
(1, '18IT1', 'Huỳnh Ngọc Thọ', 'ngoctho', '123', 'CNTT'),
(2, '18IT2', 'Võ Hùng Cường', 'hungcuong', '123', 'CNTT'),
(3, '18IT3', 'Phan Trọng Thanh', 'trongthanh', '123', 'CNTT'),
(5, '18IT5', 'Nguyễn Anh Tuấn', 'anhtuan', '123', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsinhvien`
--

CREATE TABLE `tblsinhvien` (
  `id` int(5) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `masv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `dt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `diemtoan` int(5) NOT NULL,
  `diemly` int(5) NOT NULL,
  `diemhoa` int(5) NOT NULL,
  `diemtb` int(5) NOT NULL,
  `idlop` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblsinhvien`
--

INSERT INTO `tblsinhvien` (`id`, `hoten`, `masv`, `matkhau`, `ngaysinh`, `gioitinh`, `dt`, `email`, `diachi`, `diemtoan`, `diemly`, `diemhoa`, `diemtb`, `idlop`) VALUES
(1, 'Xuân Trường', '18IT001', '001', '2000-01-01', 'nam', '0123422214', 'truong@gmail.com', 'Hải Châu', 8, 8, 8, 8, 1),
(2, 'Công Phượng', '18IT002', '002', '2000-11-20', 'nam', '0123433314', 'phuong@gmail.com', 'Liên Chiểu ', 6, 7, 8, 7, 1),
(3, 'Công Vinh', '18IT003', '003', '2000-11-22', 'nam', '0123444414', 'vinh@gmail.com', 'Sơn Trà', 10, 10, 7, 9, 2),
(4, 'Quang Hải', '18IT004', '004', '2000-02-21', 'nam', '0123111142', 'hai@gmail.com', 'Ngũ Hành Sơn', 10, 10, 7, 9, 3),
(5, 'Thanh Nhàn', '18IT183', '1404', '2000-04-14', 'nữ', '0799188786', 'pttnhan@gmail.com', 'Ngũ Hành Sơn', 10, 10, 10, 10, 2),
(6, 'Văn Lâm', '18IT006', '006', '1999-02-21', 'nam', '0123111142', 'lam@gmail.com', 'Ngũ Hành Sơn', 10, 10, 7, 9, 3),
(7, 'Văn Hậu', '18IT210', '210', '2000-09-25', 'nam', '0984521565', 'hau@gmail.com', 'Sơn Trà', 7, 9, 8, 8, 2),
(8, 'Dương Quang', '18IT111', '111', '2000-02-12', 'nam', '0122348464', 'quang@gmail.com', 'Liên Chiểu', 9, 7, 8, 8, 3),
(9, 'Quang Huy', '18IT277', '277', '2000-05-17', 'nam', '0987654321', 'huy@gmail.com', 'Cẩm Lệ', 8, 10, 9, 9, 5),
(10, 'Ngọc Định', '18IT169', '169', '2000-05-17', 'nam', '0986145523', 'dinh@gmail.com', 'Hải Châu', 7, 7, 9, 8, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbllop`
--
ALTER TABLE `tbllop`
  ADD PRIMARY KEY (`idlop`);

--
-- Chỉ mục cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
