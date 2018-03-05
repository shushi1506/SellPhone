-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 05:27 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDh` int(11) NOT NULL,
  `TenKh` varchar(30) DEFAULT NULL,
  `Sdt` varchar(11) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `NgayDat` date DEFAULT NULL,
  `DaXacNhan` tinyint(1) DEFAULT NULL,
  `MaPhone` varchar(20) DEFAULT NULL,
  `MaMau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDh`, `TenKh`, `Sdt`, `DiaChi`, `NgayDat`, `DaXacNhan`, `MaPhone`, `MaMau`) VALUES
(1, 'Anh', '01648530887', 'gi do', '2016-04-12', 1, 'Htc one', 2);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `IdImage` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaPhone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaMau` int(11) NOT NULL,
  `UrlImage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`IdImage`, `MaPhone`, `MaMau`, `UrlImage`) VALUES
('Im1', 'LG6', 0, '/images/iphone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idkm` varchar(20) NOT NULL,
  `Km1` text,
  `Km2` text,
  `Km3` text,
  `Deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`idkm`, `Km1`, `Km2`, `Km3`, `Deadline`) VALUES
('Mkm1', 'Tặng PMH iPhone/ iPad trị giá 2 triệu HOẶC Trả góp 0%', 'Tặng PMH Laptop & Tablet 500.000đ ', 'Tặng Dock sạc', '2016-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `MaMau` int(11) NOT NULL,
  `TenMau` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`MaMau`, `TenMau`) VALUES
(1, 'Đen'),
(2, 'Đỏ'),
(3, 'Hồng'),
(4, 'Nâu');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `MaPhone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nsx` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gia` double DEFAULT NULL,
  `ManHinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HDH` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CameraSau` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CameraTruoc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPU` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ram` int(11) DEFAULT NULL,
  `BNT` int(11) DEFAULT NULL,
  `Httn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TheSim` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KetNoi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DungLuongPin` int(11) DEFAULT NULL,
  `ChucNangDacBiet` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mau` int(11) DEFAULT NULL,
  `PhuKien` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `BaoHanh` int(11) DEFAULT NULL,
  `idkm` varchar(20) DEFAULT NULL,
  `MayCu` tinyint(1) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`MaPhone`, `Nsx`, `Ten`, `Gia`, `ManHinh`, `HDH`, `CameraSau`, `CameraTruoc`, `CPU`, `Ram`, `BNT`, `Httn`, `TheSim`, `KetNoi`, `DungLuongPin`, `ChucNangDacBiet`, `Mau`, `PhuKien`, `BaoHanh`, `idkm`, `MayCu`, `Image`) VALUES
('1', 'Sky', 'Oppo Neo 5', 5650000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M3.jpg'),
('2', 'Sky', 'Oppo Neo 5', 3650000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M1.jpg'),
('4', 'Sky', 'Oppo Neo 6', 10650000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M2.jpg'),
('Htc one', 'HTC', 'Lexus', 24500060, 'đasdsd', 'androi', '12', '23', '2.4', 5, 34, 'none', '2', 'ewqed', 2345, 'cc', 4, 'fvsgsgfdgdfgdfgdf', 12, 'Mkm1', 0, 'images/image_M4.jpg'),
('HTC1', 'HTC', 'HTC one', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M5.jpg'),
('HTC11', 'HTC', 'HTC j', 4390000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 1, 'images/image_M2.jpg'),
('HTC13', 'HTC', 'HTC op', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 1, 'images/image_M7.jpg'),
('HTC14', 'HTC', 'HTC oplus', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 1, 'images/image_M5.jpg'),
('HTC2', 'HTC', 'HTC one plus', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M7.jpg'),
('HTC3', 'HTC', 'HTC grand', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M6.jpg'),
('HTC4', 'HTC', 'HTC Ex', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M6.jpg'),
('HTC5', 'HTC', 'HTC B', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M8.jpg'),
('Ip1', 'Iphone', 'Iphone 2', 1340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M10.jpg'),
('Ip2', 'Iphone', 'Iphone 4s', 2340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M11.jpg'),
('Ip3', 'Iphone', 'Iphone 5', 3140800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M12.jpg'),
('Ip4', 'Iphone', 'Iphone 5s', 3940800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M1.jpg'),
('Ip5', 'Iphone', 'Iphone 6 128GB', 13340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M2.jpg'),
('LG1', 'LG', 'LG2', 4340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M5.jpg'),
('LG2', 'LG', 'LG A', 24340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M11.jpg'),
('LG6', 'LG', 'LG5', 13650000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M5.jpg'),
('NK1', 'Nokia', 'Lumia 520', 4340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M11.jpg'),
('NK2', 'Nokia', 'Lumia 1020', 12240000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M12.jpg'),
('NK3', 'Nokia', 'Lumia 530', 9040000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M4.jpg'),
('NK4', 'Nokia', 'Lumia 720', 2344000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M7.jpg'),
('NK5', 'Nokia', 'Lumia 120', 14340000, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M8.jpg'),
('Sn1', 'Sony', 'Sony Z1', 4340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M9.jpg'),
('Sn10', 'Sony', 'Sony G6', 7840800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 1, 'images/image_M5.jpg'),
('Sn2', 'Sony', 'Sony Z2', 5340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M11.jpg'),
('Sn3', 'Sony', 'Sony Z3', 6440800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M12.jpg'),
('Sn4', 'Sony', 'Sony Z6', 7840800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M5.jpg'),
('Sn5', 'Sony', 'Sony Z10', 23340800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 0, 'images/image_M9.jpg'),
('Sn9', 'Sony', 'Sony V6', 7840800, 'Full HD', 'Android 5.0 Lolipop', '8', '5', '2.6Ghz', 2, 32, '64Gb', 'Nano Sim', '3G,4G LITE', 2350, 'Camera quay 360', 3, 'Tai Nghe, Sạc', 12, 'Mkm1', 1, 'images/image_M5.jpg'),
('SS1', 'SamSung', 'Sam Sung Galaxy s7', 2956000, 'Màn hình: Retina HD, 5.5 inches', 'HĐH: iOS 9', '12', '5', 'CPU: A9 64 bit', 2, 128, 'Khong', '1 Sim', 'WiFi, 3G, 4G LTE Cat 6', 2750, 'Khoa van tay', 4, 'Tai Nghe, Sac, SAch Huong Dan', 12, 'Mkm1', 0, 'images/iphone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `PassWord` varchar(50) NOT NULL,
  `Quyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `PassWord`, `Quyen`) VALUES
('1', 'a', NULL),
('ad', 's', NULL),
('admin', '123456', 1),
('anh', '1234', NULL),
('dđa', 'đấ', NULL),
('giang', '09041995', 0),
('nhomavidai', '123456', 0),
('Tun', '15061995', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDh`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`IdImage`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idkm`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`MaMau`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`MaPhone`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
