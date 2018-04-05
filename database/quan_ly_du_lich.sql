-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 05, 2018 lúc 04:37 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_du_lich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

DROP TABLE IF EXISTS `diadiem`;
CREATE TABLE IF NOT EXISTS `diadiem` (
  `stt` int(5) NOT NULL,
  `tendiadiem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mavung` int(5) NOT NULL,
  `published` int(3) NOT NULL,
  `ordering` int(3) NOT NULL,
  `loaidiadiem` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`stt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`stt`, `tendiadiem`, `mavung`, `published`, `ordering`, `loaidiadiem`) VALUES
(1, 'An Giang', 805, 1, 63, NULL),
(2, 'Bà Rịa - Vũng Tầu', 717, 1, 46, 'NKH'),
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
-- Cấu trúc bảng cho bảng `dongtour`
--

DROP TABLE IF EXISTS `dongtour`;
CREATE TABLE IF NOT EXISTS `dongtour` (
  `MaDongTour` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenDongTour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDongTour`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dongtour`
--

INSERT INTO `dongtour` (`MaDongTour`, `TenDongTour`) VALUES
('CC', 'Cao Cấp'),
('GT', 'Giá Tốt'),
('TC', 'Tiêu Chuẩn'),
('TK', 'Tiết Kiệm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhtour`
--

DROP TABLE IF EXISTS `hinhanhtour`;
CREATE TABLE IF NOT EXISTS `hinhanhtour` (
  `MaTour` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `URLHinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTour`,`URLHinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanhtour`
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
-- Cấu trúc bảng cho bảng `loaitour`
--

DROP TABLE IF EXISTS `loaitour`;
CREATE TABLE IF NOT EXISTS `loaitour` (
  `MaLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitour`
--

INSERT INTO `loaitour` (`MaLoai`, `TenLoai`) VALUES
(1, 'Tour Trong Nước'),
(2, 'Tour Nước Ngoài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintour`
--

DROP TABLE IF EXISTS `thongtintour`;
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
  `TinhTrang` int(2) NOT NULL,
  PRIMARY KEY (`MaTour`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtintour`
--

INSERT INTO `thongtintour` (`MaTour`, `MaLoai`, `TenTour`, `Gia`, `NoiKhoiHanh`, `NoiDen`, `NgayKhoiHanh`, `DongTour`, `NoiDungTour`, `ThoiGianTour`, `LuotXem`, `TinhTrang`) VALUES
('BMTHOLAK29032018', 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 3390000, 29, 64, '2018-03-29', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuộc', 4, 247, 1),
('NDSGN311010080', 1, 'Đà Nẵng - Bà Nà - Hội An - La Vang - Động Thiên Đường - Huế (Khách sạn 4* 2 đêm. Tour tiết kiệm)', 4190000, 29, 45, '2018-04-05', 'CC', 'Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: - Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất. - Khu Du Lịch Tràng An: di sản văn hóa & thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt. Nghỉ đêm tại Ninh Bình', 6, 32, 1),
('NDSGN847063', 1, 'Miền Tây - Châu Đốc - Rừng Tràm Trà Sư - Hà Tiên - Rạch Giá - Cần Thơ (Tour Tiết Kiệm)', 3290000, 12, 10, '2018-03-28', 'TK', 'Sau khi dùng bữa sáng, Quý khách tham quan : \r\n       - Rừng Tràm Trà Sư: Khách di chuyển bằng xuồng máy hay những chiếc ghe để len lỏi giữa các lối đi nhỏ xuyên qua khu rừng, tham quan phong cảnh thiên nhiên hoang sơ và hệ sinh thái đa dạng với nhiều loại động, thực vật hoang dã.\r\nQuý khách tiếp tục hành trình đi Hà Tiên, nhận phòng khách sạn và nghỉ ngơi.\r\nBuổi chiều, quý khách tiếp tục tham quan :\r\n      - Làng Mạc Cửu: nơi thờ dòng họ Mạc mà khởi đầu là ông Mạc Cửu, người đã có công khai phá mảnh đất Hà Tiên.\r\n      - Viếng chùa Phù Dung: tọa lạc dưới chân núi Bình San, hấp dẫn du khách bởi vẻ đẹp cổ kính, hài hòa với thiên nhiên và những câu chuyện bí ẩn về ngôi chùa.\r\n      - Biển Mũi Nai: Quý khách tự do thưởng thức hải sản địa phương và khi những tia nắng cuối ngày dần tắt Mũi Nai trong ánh hoàng hôn của biển tây nam sẽ để lại cho Quý khách những cảm xúc khó quên. \r\nNghỉ đêm tại Hà Tiên.', 7, 31, 1),
('NTDL28032018', 1, 'Nha Trang-Đà Lạt', 4190000, 29, 16, '2018-03-28', 'TK', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 108, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `MaTour` int(11) NOT NULL AUTO_INCREMENT,
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
  `TinhTrang` int(11) NOT NULL,
  PRIMARY KEY (`MaTour`),
  KEY `fk_tour_loaitour` (`MaLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`MaTour`, `MaLoai`, `TenTour`, `Gia`, `NoiKhoiHanh`, `NoiDen`, `NgayKhoiHanh`, `DongTour`, `NoiDungTour`, `ThoiGianTour`, `Hinh`, `LuotXem`, `TinhTrang`) VALUES
(1, 1, 'Nha Trang-Đà Lạt', 4190000, 'Hồ Chí Minh', 'Đà Lạt', '2018-03-28 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 'nha-trang-da-lat.jpg', 11, 1),
(2, 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 3390000, 'Hồ Chí Minh', 'Bản Đôn', '2018-03-29 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuột.', 4, 'buon-me-thuoc-ban-don.jpg', 248, 1),
(3, 2, 'Hành Hương Đất Phật Ấn Độ - Nepal', 32990000, 'Hồ Chí Minh', 'Nepal', '2018-03-28 00:00:00', 'Giá tốt', 'Trưởng đoàn Vietravel đón Quý khách tại cổng hẹn ở sân bay Tân Sân Nhất làm thủ tục đáp chuyến bay đi Delhi (quá cảnh tại Bangkok hoặc Malaysia). Tới Delhi, Quý khách nhận phòng và tự do nghỉ ngơi.\r\n', 10, 'an-do-nepal.jpg', 60, 1),
(4, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 802, 1),
(5, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 558, 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_tour_loaitour` FOREIGN KEY (`MaLoai`) REFERENCES `loaitour` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
