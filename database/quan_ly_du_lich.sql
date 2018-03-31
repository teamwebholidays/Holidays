-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 29, 2018 lúc 12:09 PM
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
(1, 1, 'Nha Trang-Đà Lạt', 4190000, 'Hồ Chí Minh', 'Đà Lạt', '2018-03-28 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3), đoàn khởi hành đi Nha Trang tham quan: \r\n- Bãi biển Cà Ná: một trong những bãi biển đẹp nhất miền Trung. Từ Cam Ranh xe đưa Quý khách đi theo con đường cập sát biển đến thành phố Nha Trang, ngắm cảnh hoàng hôn trên Vịnh Nha Trang. \r\nBuổi tối, Quý khách tự do dạo phố biển, mua sắm tại chợ đêm Nha Trang. \r\nNghỉ đêm tại Nha Trang.', 5, 'nha-trang-da-lat.jpg', 125, 1),
(2, 1, 'Buôn Ma Thuột - Bản Đôn - Hồ Lắk - Buôn Kôtam - Mùa Hoa Cà Phê', 3390000, 'Hồ Chí Minh', 'Bản Đôn', '2018-03-29 00:00:00', 'Tiết Kiệm', 'Quý khách tập trung tại Vietravel (190 Pasteur, quận 3), khởi hành đi Buôn Ma Thuột tham quan:\r\n- Ngắm đường Trường Sơn (Quốc lộ 14) huyền thoại.\r\n- Thác Đray Nur: một thắng cảnh đẹp nhờ sự kết hợp giữa hai dòng sông Krông Nô và Krông A Na,  như một bức thành nước khổng lồ, hùng tráng giữa một vùng hoa nước long lanh.\r\nBuổi tối, Quý khách tự do khám phá, vui chơi tại Quảng trường 10/3 hay thưởng thức đặc sản: cơm lam – gà sa lửa, bò nhúng me, canh lá người Ê Đê. \r\nNghỉ đêm tại Buôn Ma Thuột.', 4, 'buon-me-thuoc-ban-don.jpg', 245, 1),
(3, 2, 'Hành Hương Đất Phật Ấn Độ - Nepal', 32990000, 'Hồ Chí Minh', 'Nepal', '2018-03-28 00:00:00', 'Giá tốt', 'Trưởng đoàn Vietravel đón Quý khách tại cổng hẹn ở sân bay Tân Sân Nhất làm thủ tục đáp chuyến bay đi Delhi (quá cảnh tại Bangkok hoặc Malaysia). Tới Delhi, Quý khách nhận phòng và tự do nghỉ ngơi.\r\n', 10, 'an-do-nepal.jpg', 59, 1),
(4, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 791, 1),
(5, 2, 'Pháp - Monaco - Tây Ban Nha - Bồ Đào Nha', 109990000, 'Hà Nội', 'Bồ Đào Nha', '2018-03-30 00:00:00', 'Cao cấp', 'Trưởng đoàn Vietravel đón đoàn tại điểm hẹn trong thành phố. Đoàn ra phi trường đón chuyến bay tới thành phố Nice nằm phía Nam nước Pháp. Đoàn nghỉ đêm trên máy bay (Chuyến bay quá cảnh tùy theo hàng không).', 12, 'phap-bo-dao-nha.jpg', 331, 1);

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
