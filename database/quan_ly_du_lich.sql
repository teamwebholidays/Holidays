-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 07:58 PM
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
  `tendiadiemurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mavung` int(5) NOT NULL,
  `published` int(3) NOT NULL,
  `ordering` int(3) NOT NULL,
  `loaidiadiem` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diadiem`
--

INSERT INTO `diadiem` (`stt`, `tendiadiem`, `tendiadiemurl`, `mavung`, `published`, `ordering`, `loaidiadiem`) VALUES
(1, 'An Giang', 'an-giang', 805, 1, 63, NULL),
(2, 'Bà Rịa - Vũng Tầu', 'ba-ria-vung-tau', 717, 1, 46, 'NKH'),
(3, 'Bình Dương', 'binh-duong', 711, 1, 45, 'NKH'),
(4, 'Bình Phước', '', 707, 1, 44, NULL),
(5, 'Bình Thuận', 'binh-thuan', 715, 1, 43, NULL),
(6, 'Bình Định', 'binh-dinh', 507, 1, 42, NULL),
(7, 'Bắc Giang', 'bac-giang', 221, 1, 41, NULL),
(8, 'Bắc Kạn', 'bac-kan', 207, 1, 40, NULL),
(9, 'Bắc Ninh', 'bac-ninh', 223, 1, 39, NULL),
(10, 'Bến Tre', 'ben-tre', 811, 1, 38, NULL),
(11, 'Cao Bằng', 'cao-bang', 203, 1, 37, NULL),
(12, 'Cà Mau', 'ca-mau', 823, 1, 36, 'NKH'),
(13, 'Cần Thơ', 'can-tho', 815, 1, 35, 'NKH'),
(14, 'Cam Ranh', 'cam-ranh', 815, 1, 35, NULL),
(15, 'Côn Đảo', 'con-dao', 815, 1, 35, NULL),
(16, 'Đà Lạt', 'da-lat', 815, 1, 35, 'NKH'),
(17, 'Đà Nẵng', 'da-nang', 815, 1, 35, 'NKH'),
(18, 'Điện Biên', 'dien-bien', 815, 1, 35, NULL),
(19, 'Đồng Nai', 'dong-nai', 815, 1, 35, 'NKH'),
(20, 'Đồng Tháp', 'dong-thap', 815, 1, 35, NULL),
(21, 'Nghệ An', 'nghe-an', 815, 1, 35, NULL),
(22, 'Hà Giang', 'ha-giang', 815, 1, 35, NULL),
(23, 'Hạ Long', 'ha-long', 815, 1, 35, NULL),
(24, 'Hà Nội', 'ha-noi', 815, 1, 35, 'NKH'),
(25, 'Hà Tây', 'ha-tay', 815, 1, 35, NULL),
(26, 'Hà Tiên', 'ha-tien', 815, 1, 35, NULL),
(27, 'Hà Tĩnh', 'ha-tinh', 815, 1, 35, NULL),
(28, 'Hải Phòng', 'hai-phong', 815, 1, 35, 'NKH'),
(29, 'Hồ Chí Minh', 'ho-chi-minh', 815, 1, 35, 'NKH'),
(30, 'Huế', 'hue', 815, 1, 35, 'NKH'),
(31, 'Kiên Giang', 'kien-giang', 815, 1, 35, NULL),
(32, '', '', 815, 1, 35, NULL),
(33, 'Lạng Sơn', 'lang-son', 815, 1, 35, NULL),
(34, 'Lào Cai', 'lao-cai', 815, 1, 35, NULL),
(35, 'Long An', 'long-an', 815, 1, 35, 'NKH'),
(36, 'Nam Định', 'nam-dinh', 815, 1, 35, NULL),
(37, 'Nha Trang', 'nha-trang', 815, 1, 35, 'NKH'),
(38, 'Ninh Bình', 'ninh-binh', 815, 1, 35, NULL),
(39, 'Ninh Thuận', 'ninh-thuan', 815, 1, 35, NULL),
(40, 'Pleiku', 'pleiku', 815, 1, 35, NULL),
(41, 'Phan Thiết', 'phan-thiet', 815, 1, 35, NULL),
(42, 'Phú Quốc', 'phu-quoc', 815, 1, 35, 'NKH'),
(43, 'Phú Thọ', 'phu-tho', 815, 1, 35, NULL),
(44, 'Phú Yên', 'phu-yen', 815, 1, 35, 'NKH'),
(45, 'Quảng Bình', 'quan-binh', 815, 1, 35, 'NKH'),
(46, 'Quảng Ngãi', 'quang-ngai', 815, 1, 35, 'NKH'),
(47, 'Quảng Nam', 'quang-nam', 815, 1, 35, 'NKH'),
(48, 'Quảng Ninh', 'quang-ninh', 815, 1, 35, 'NKH'),
(49, 'Quảng Trị', 'quang-tri', 815, 1, 35, NULL),
(50, 'Quy Nhơn', 'quy-nhon', 815, 1, 35, 'NKH'),
(51, 'Sóc Trăng', 'soc-trang', 815, 1, 35, NULL),
(52, 'Sơn La', 'son-la', 815, 1, 35, NULL),
(53, 'Tây Bắc', 'tay-bac', 815, 1, 35, NULL),
(54, 'Tây Nguyễn', 'tay-nguyen', 815, 1, 35, NULL),
(55, 'Tây Ninh', 'tay-ninh', 815, 1, 35, NULL),
(56, 'Tiền Giang', 'tien-giang', 815, 1, 35, NULL),
(57, 'Trà Vinh', 'tra-vinh', 815, 1, 35, NULL),
(58, 'Thái Bình', 'thai-binh', 815, 1, 35, NULL),
(59, 'Thái Nguyên', 'thai-nguyen', 815, 1, 35, NULL),
(60, 'Thanh Hóa', 'thanh-hoa', 815, 1, 35, 'NKH'),
(61, 'Vinh', 'vinh', 815, 1, 35, 'NKH'),
(62, 'Vĩnh Long', 'vinh-long', 815, 1, 35, NULL),
(63, 'Vĩnh Phúc', 'vinh-phuc', 815, 1, 35, NULL),
(64, 'Buôn Mê Thuộc', 'buon-me-thuoc', 555, 2, 2, 'NKH');

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
('NDSGN311010080', 'ba-na.jpg'),
('NDSGN311010080', 'da-nang.jpg'),
('NDSGN847063', 'chau-doc.jpg'),
('NDSGN847063', 'mien-tay.png'),
('NTDL28032018', 'an-do-nepal.jpg'),
('NTDL28032018', 'nha-trang-da-lat.jpg');

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
  `TenTourURL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(10) DEFAULT NULL,
  `NoiKhoiHanh` int(5) DEFAULT NULL,
  `NoiDen` int(5) DEFAULT NULL,
  `NgayKhoiHanh` date DEFAULT NULL,
  `DongTour` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungTour` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGianTour` int(5) NOT NULL,
  `LuotXem` int(10) NOT NULL,
  `TinhTrang` int(2) NOT NULL,
  `NgayTaoTour` date DEFAULT NULL,
  `URLThumb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoCho` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtintour`
--

INSERT INTO `thongtintour` (`MaTour`, `MaLoai`, `TenTour`, `TenTourURL`, `Gia`, `NoiKhoiHanh`, `NoiDen`, `NgayKhoiHanh`, `DongTour`, `NoiDungTour`, `ThoiGianTour`, `LuotXem`, `TinhTrang`, `NgayTaoTour`, `URLThumb`, `SoCho`) VALUES
('BMTHOLAK29032018', 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 'buon-ma-thuoc-ba-don-ho-lak-buon-kotam-mua-hoa-ca-he', 3390000, 29, 64, '2018-03-29', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuộc', 4, 327, 1, '2018-02-05', NULL, 30),
('NDSGN311010080', 1, 'Đà Nẵng - Bà Nà - Hội An - La Vang - Động Thiên Đường - Huế', 'da-nag-ba-na-hoi-an-la-vang-dong-thien-duong-hue', 4190000, 29, 45, '2018-04-05', 'CC', 'Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: - Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất. - Khu Du Lịch Tràng An: di sản văn hóa & thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt. Nghỉ đêm tại Ninh Bình', 6, 58, 1, '2018-02-03', NULL, 40),
('NDSGN847063', 1, 'Miền Tây - Châu Đốc - Rừng Tràm Trà Sư - Hà Tiên - Rạch Giá - Cần Thơ', 'mien-tay-chau-doc-rung-tram-tra-su-ha-tien-rach-gia-can-tho', 3290000, 12, 10, '2018-03-28', 'TK', 'Sau khi dùng bữa sáng, Quý khách tham quan : \r\n       - Rừng Tràm Trà Sư: Khách di chuyển bằng xuồng máy hay những chiếc ghe để len lỏi giữa các lối đi nhỏ xuyên qua khu rừng, tham quan phong cảnh thiên nhiên hoang sơ và hệ sinh thái đa dạng với nhiều loại động, thực vật hoang dã.\r\nQuý khách tiếp tục hành trình đi Hà Tiên, nhận phòng khách sạn và nghỉ ngơi.\r\nBuổi chiều, quý khách tiếp tục tham quan :\r\n      - Làng Mạc Cửu: nơi thờ dòng họ Mạc mà khởi đầu là ông Mạc Cửu, người đã có công khai phá mảnh đất Hà Tiên.\r\n      - Viếng chùa Phù Dung: tọa lạc dưới chân núi Bình San, hấp dẫn du khách bởi vẻ đẹp cổ kính, hài hòa với thiên nhiên và những câu chuyện bí ẩn về ngôi chùa.\r\n      - Biển Mũi Nai: Quý khách tự do thưởng thức hải sản địa phương và khi những tia nắng cuối ngày dần tắt Mũi Nai trong ánh hoàng hôn của biển tây nam sẽ để lại cho Quý khách những cảm xúc khó quên. \r\nNghỉ đêm tại Hà Tiên.', 7, 7, 1, '2018-02-10', NULL, 50),
('NTDL28032018', 1, 'Nha Trang-Đà Lạt', 'nha-trang-da-lat', 4190000, 29, 16, '2018-03-28', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 191, 1, '2018-02-25', NULL, 60);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaitour`
--
ALTER TABLE `loaitour`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
