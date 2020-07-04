-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 06:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllop`
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
-- Dumping data for table `tbllop`
--

INSERT INTO `tbllop` (`idlop`, `tenlop`, `GVCN`, `username`, `password`, `nghanh`) VALUES
(1, '18IT1', 'Trương Thanh Tâm', 'tt', '123', 'CNTT'),
(2, '18IT2', 'Nguyễn Hoàng Huy', 'hh', '123', 'CNTT'),
(3, '18IT3', 'Trần Xuân Thìn', 'xt', '123', 'CNTT'),
(5, '18IT5', 'Võ Minh Lũy', 'vl', '123', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `tblsinhvien`
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
-- Dumping data for table `tblsinhvien`
--

INSERT INTO `tblsinhvien` (`id`, `hoten`, `masv`, `matkhau`, `ngaysinh`, `gioitinh`, `dt`, `email`, `diachi`, `diemtoan`, `diemly`, `diemhoa`, `diemtb`, `idlop`) VALUES
(1, 'Thanh Tâm', '190', '001', '2000-01-01', 'nam', '0123422214', 'tamg@gmail.com', 'bình định', 4, 8, 8, 7, 0),
(2, 'Minh Lũy', '133', '002', '2000-11-20', 'nam', '0123433314', 'luy@gmail.com', 'bình định', 6, 7, 8, 7, 1),
(3, 'Xuân Thìn ', '217', '003', '2000-11-22', 'nam', '0123444414', 'thib@gmail.com', 'Sơn Trà', 10, 10, 7, 9, 2),
(4, 'Hoàng Huy', '099', '004', '2000-02-21', 'nam', '0123111142', 'huy@gmail.com', 'Ngũ Hành Sơn', 10, 10, 7, 9, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbllop`
--
ALTER TABLE `tbllop`
  ADD PRIMARY KEY (`idlop`);

--
-- Indexes for table `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
