-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 08:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan_ly_du_lich`
--

-- --------------------------------------------------------

--
-- Table structure for table `diadiem`
--

CREATE TABLE IF NOT EXISTS `diadiem` (
  `stt` int(5) NOT NULL,
  `tendiadiem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mavung` int(5) NOT NULL,
  `published` int(3) NOT NULL,
  `ordering` int(3) NOT NULL,
  `loaidiadiem` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diadiem`
--

INSERT INTO `diadiem` (`stt`, `tendiadiem`, `mavung`, `published`, `ordering`, `loaidiadiem`) VALUES
(1, 'An Giang', 805, 1, 63, NULL),
(2, 'Bà Rịa - Vũng Tàu', 717, 1, 46, 'NKH'),
(3, 'Bình Dương', 711, 1, 45, 'NKH'),
(4, 'Bình Phước', 707, 1, 44, NULL),
(5, 'Bình Thuận', 715, 1, 43, NULL),
(6, 'Bình Định', 507, 1, 42, NULL),
(7, 'Bắc Giang', 221, 1, 41, NULL),
(8, 'Bắc Kạn', 207, 1, 40, NULL),
(9, 'Bắc Ninh', 223, 1, 39, NULL),
(10, 'Bến Tre', 811, 1, 38, NULL),
(11, 'Cao Bằng', 203, 1, 37, NULL),
(12, 'Cà Mau', 823, 1, 36, 'NKH'),
(13, 'Cần Thơ', 815, 1, 35, 'NKH'),
(14, 'Cam Ranh', 815, 1, 35, NULL),
(15, 'Côn Đảo', 815, 1, 35, NULL),
(16, 'Đà Lạt', 815, 1, 35, 'NKH'),
(17, 'Đà Nẵng', 815, 1, 35, 'NKH'),
(18, 'Điện Biên', 815, 1, 35, NULL),
(19, 'Đồng Nai', 815, 1, 35, 'NKH'),
(20, 'Đồng Tháp', 815, 1, 35, NULL),
(21, 'Nghệ An', 815, 1, 35, NULL),
(22, 'Hà Giang', 815, 1, 35, NULL),
(23, 'Hạ Long', 815, 1, 35, NULL),
(24, 'Hà Nội', 815, 1, 35, 'NKH'),
(25, 'Hà Tây', 815, 1, 35, NULL),
(26, 'Hà Tiên', 815, 1, 35, NULL),
(27, 'Hà Tĩnh', 815, 1, 35, NULL),
(28, 'Hải Phòng', 815, 1, 35, 'NKH'),
(29, 'Hồ Chí Minh', 815, 1, 35, 'NKH'),
(30, 'Huế', 815, 1, 35, 'NKH'),
(31, 'Kiên Giang', 815, 1, 35, NULL),
(32, '', 815, 1, 35, NULL),
(33, 'Lạng Sơn', 815, 1, 35, NULL),
(34, 'Lào Cai', 815, 1, 35, NULL),
(35, 'Long An', 815, 1, 35, 'NKH'),
(36, 'Nam Định', 815, 1, 35, NULL),
(37, 'Nha Trang', 815, 1, 35, 'NKH'),
(38, 'Ninh Bình', 815, 1, 35, NULL),
(39, 'Ninh Thuận', 815, 1, 35, NULL),
(40, 'Pleiku', 815, 1, 35, NULL),
(41, 'Phan Thiết', 815, 1, 35, NULL),
(42, 'Phú Quốc', 815, 1, 35, 'NKH'),
(43, 'Phú Thọ', 815, 1, 35, NULL),
(44, 'Phú Yên', 815, 1, 35, 'NKH'),
(45, 'Quảng Bình', 815, 1, 35, 'NKH'),
(46, 'Quảng Ngãi', 815, 1, 35, 'NKH'),
(47, 'Quảng Nam', 815, 1, 35, 'NKH'),
(48, 'Quảng Ninh', 815, 1, 35, 'NKH'),
(49, 'Quảng Trị', 815, 1, 35, NULL),
(50, 'Quy Nhơn', 815, 1, 35, 'NKH'),
(51, 'Sóc Trăng', 815, 1, 35, NULL),
(52, 'Sơn La', 815, 1, 35, NULL),
(53, 'Tây Bắc', 815, 1, 35, NULL),
(54, 'Tây Nguyễn', 815, 1, 35, NULL),
(55, 'Tây Ninh', 815, 1, 35, NULL),
(56, 'Tiền Giang', 815, 1, 35, NULL),
(57, 'Trà Vinh', 815, 1, 35, NULL),
(58, 'Thái Bình', 815, 1, 35, NULL),
(59, 'Thái Nguyên', 815, 1, 35, NULL),
(60, 'Thanh Hóa', 815, 1, 35, 'NKH'),
(61, 'Vinh', 815, 1, 35, 'NKH'),
(62, 'Vĩnh Long', 815, 1, 35, NULL),
(63, 'Vĩnh Phúc', 815, 1, 35, NULL),
(64, 'Buôn Mê Thuộc', 555, 2, 2, 'NKH');

-- --------------------------------------------------------

--
-- Table structure for table `dongtour`
--

CREATE TABLE IF NOT EXISTS `dongtour` (
  `MaDongTour` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenDongTour` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dongtour`
--

INSERT INTO `dongtour` (`MaDongTour`, `TenDongTour`) VALUES
('CC', 'Cao Cấp'),
('GT', 'Giá Tốt'),
('TC', 'Tiêu Chuẩn'),
('TK', 'Tiết Kiệm');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanhtour`
--

CREATE TABLE IF NOT EXISTS `hinhanhtour` (
  `MaTour` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `URLHinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhanhtour`
--

INSERT INTO `hinhanhtour` (`MaTour`, `URLHinh`) VALUES
('BMTHOLAK29032018', 'buon-me-thuoc-ban-don.jpg'),
('BMTHOLAK29032018', 'phap-bo-dao-nha.jpg'),
('BMTHOLAK29032018', 'vuto.jpg'),
('NTDL28032018', 'an-do-nepal.jpg'),
('NTDL28032018', 'nha-trang-da-lat.jpg'),
('NTDL28032018', 'vuto2.jpg'),
('NTDL29032018', 'an-do-nepal.jpg'),
('NTDL29032018', 'phap-bo-dao-nha.jpg'),
('NTDL29032018', 'vuto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaitour`
--

CREATE TABLE IF NOT EXISTS `loaitour` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitour`
--

INSERT INTO `loaitour` (`MaLoai`, `TenLoai`) VALUES
(1, 'Tour Trong Nước'),
(2, 'Tour Nước Ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `thongtintour`
--

CREATE TABLE IF NOT EXISTS `thongtintour` (
  `MaTour` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(5) DEFAULT NULL,
  `TenTour` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(10) DEFAULT NULL,
  `NoiKhoiHanh` int(5) DEFAULT NULL,
  `NoiDen` int(5) DEFAULT NULL,
  `NgayKhoiHanh` date DEFAULT NULL,
  `DongTour` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungTour` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGianTour` int(5) NOT NULL,
  `LuotXem` int(10) NOT NULL,
  `TinhTrang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtintour`
--

INSERT INTO `thongtintour` (`MaTour`, `MaLoai`, `TenTour`, `Gia`, `NoiKhoiHanh`, `NoiDen`, `NgayKhoiHanh`, `DongTour`, `NoiDungTour`, `ThoiGianTour`, `LuotXem`, `TinhTrang`) VALUES
('BMTHOLAK29032018', 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 3390000, 29, 64, '2018-03-29', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuộc', 4, 288, 1),
('NTDL28032018', 1, 'Nha Trang-Đà Lạt', 4190000, 29, 16, '2018-03-28', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 229, 1),
('NTDL29032018', 1, 'Nha Trang-Đà Lạt', 4190000, 29, 13, '2018-03-28', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 154, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `MaTour` int(11) NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `TenTour` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `NoiKhoiHanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayKhoiHanh` datetime NOT NULL,
  `DongTour` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungTour` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGianTour` int(11) NOT NULL,
  `Hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LuotXem` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`MaTour`, `MaLoai`, `TenTour`, `Gia`, `NoiKhoiHanh`, `NoiDen`, `NgayKhoiHanh`, `DongTour`, `NoiDungTour`, `ThoiGianTour`, `Hinh`, `LuotXem`, `TinhTrang`) VALUES
(1, 1, 'Nha Trang-Đà Lạt', 4190000, 'Hồ Chí Minh', 'Đà Lạt', '2018-03-28 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 'nha-trang-da-lat.jpg', 125, 1),
(2, 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 3390000, 'Hồ Chí Minh', 'Bản Đôn', '2018-03-29 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuột.', 4, 'buon-me-thuoc-ban-don.jpg', 247, 1),
(3, 2, 'Hành Hương Đất Phật Ấn Độ - Nepal', 32990000, 'Hồ Chí Minh', 'Nepal', '2018-03-28 00:00:00', 'Giá tốt', 'Trưởng đoàn Vietravel đón Quý khách tại cổng hẹn ở sân bay Tân Sân Nhất làm thủ tục đáp chuyến bay đi Delhi (quá cảnh tại Bangkok hoặc Malaysia). Tới Delhi, Quý khách nhận phòng và tự do nghỉ ngơi.\r\n', 10, 'an-do-nepal.jpg', 59, 1),
(4, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 803, 1),
(5, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 558, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `dongtour`
--
ALTER TABLE `dongtour`
  ADD PRIMARY KEY (`MaDongTour`);

--
-- Indexes for table `hinhanhtour`
--
ALTER TABLE `hinhanhtour`
  ADD PRIMARY KEY (`MaTour`,`URLHinh`);

--
-- Indexes for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `thongtintour`
--
ALTER TABLE `thongtintour`
  ADD PRIMARY KEY (`MaTour`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`), ADD KEY `fk_tour_loaitour` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaitour`
--
ALTER TABLE `loaitour`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `MaTour` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
ADD CONSTRAINT `fk_tour_loaitour` FOREIGN KEY (`MaLoai`) REFERENCES `loaitour` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
