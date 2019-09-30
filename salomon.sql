-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2019 lúc 10:07 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `salomon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chudegopy`
--

CREATE TABLE `chudegopy` (
  `cdgy_ma` int(11) NOT NULL,
  `cdgy_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chudegopy`
--

INSERT INTO `chudegopy` (`cdgy_ma`, `cdgy_ten`) VALUES
(0, 'lasdnlkfa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `dh_ma` int(11) NOT NULL,
  `dh_ngaylap` datetime NOT NULL,
  `dh_ngaygiao` datetime DEFAULT NULL,
  `dh_noigiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_trangthaithanhtoan` int(11) NOT NULL,
  `httt_ma` int(11) NOT NULL,
  `kh_tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`dh_ma`, `dh_ngaylap`, `dh_ngaygiao`, `dh_noigiao`, `dh_trangthaithanhtoan`, `httt_ma`, `kh_tendangnhap`) VALUES
(1, '2013-02-21 16:45:44', '2013-02-01 00:00:00', 'Can Tho', 0, 1, 'vdduy'),
(2, '2013-02-21 16:46:33', '2013-02-07 00:00:00', 'Ã¡dsadsad', 0, 1, 'vdduy'),
(3, '2013-02-21 16:47:22', '2013-02-01 00:00:00', 'sdfsdf', 0, 1, 'vdduy'),
(4, '2013-02-21 16:48:10', '2013-02-08 00:00:00', 'Can Tho', 0, 1, 'vdduy'),
(5, '2013-02-21 16:48:59', '2013-02-09 00:00:00', 'Can Tho', 0, 1, 'vdduy'),
(8, '2019-07-30 11:43:51', '2019-07-30 11:43:49', 'Can Tho', 0, 2, 'admin'),
(9, '2019-07-30 11:44:27', '2019-07-30 11:44:28', 'Can Tho', 0, 3, 'admin'),
(11, '2019-07-30 11:44:47', '2019-07-30 11:44:48', 'Can Tho', 0, 3, 'usermoi'),
(12, '2019-07-30 11:59:32', '2019-07-30 11:59:33', 'can tho', 0, 2, 'usermoi'),
(13, '2020-07-30 11:59:52', '2019-07-30 11:59:53', 'can tho', 0, 2, 'usermoi'),
(14, '2019-07-30 12:00:16', '2019-07-30 12:00:17', 'can tho', 0, 3, 'nta'),
(15, '2019-09-29 10:09:41', NULL, NULL, 0, 1, 'NguyễnHoang'),
(16, '2019-09-29 10:09:54', NULL, NULL, 0, 1, 'NguyễnHoang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `gy_ma` int(11) NOT NULL,
  `gy_hoten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_dienthoai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_noidung` text COLLATE utf8_unicode_ci,
  `gy_ngaygopy` datetime DEFAULT NULL,
  `cdgy_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhsanpham`
--

CREATE TABLE `hinhsanpham` (
  `hsp_ma` int(11) NOT NULL,
  `hsp_tentaptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhsanpham`
--

INSERT INTO `hinhsanpham` (`hsp_ma`, `hsp_tentaptin`, `sp_ma`) VALUES
(62, 'samsungs3.jpg', 1),
(64, 'samsungs32.jpg', 1),
(65, 'samsungs31.jpg', 1),
(66, 'iphone5.jpeg', 3),
(67, 'iphone51.jpg', 3),
(68, 'iphone52.jpeg', 3),
(69, 'samsung-galaxy-tab-10.jpg', 5),
(70, 'samsung-galaxy-tab.jpg', 7),
(71, 'ip7.jpeg', 11),
(72, 'ip71.jpeg', 11),
(73, 'i73.jpeg', 11),
(74, 'ixsm.jpeg', 12),
(75, 'ixsm2.jpeg', 12),
(76, 'ixsm1.jpeg', 12),
(77, 'sma50.jpeg', 13),
(78, 'sma501.jpeg', 13),
(79, 'spa503.jpeg', 13),
(81, 'mic.jpg', 14),
(82, 'mic2.jpg', 14),
(83, 'mic3.jpg', 14),
(84, 'ipod.jpeg', 16),
(85, 'ipod2.jpeg', 16),
(86, 'ipod3.jpeg', 16),
(87, 'lt1.jpeg', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `httt_ma` int(11) NOT NULL,
  `httt_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`httt_ma`, `httt_ten`) VALUES
(1, 'Tiền Mặt'),
(2, 'Chuyển Khoản'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kh_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_gioitinh` int(11) NOT NULL,
  `kh_diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kh_dienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_ngaysinh` int(11) DEFAULT NULL,
  `kh_thangsinh` int(11) DEFAULT NULL,
  `kh_namsinh` int(11) NOT NULL,
  `kh_cmnd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_makichhoat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_trangthai` int(11) NOT NULL,
  `kh_quantri` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`kh_tendangnhap`, `kh_matkhau`, `kh_ten`, `kh_gioitinh`, `kh_diachi`, `kh_dienthoai`, `kh_email`, `kh_ngaysinh`, `kh_thangsinh`, `kh_namsinh`, `kh_cmnd`, `kh_makichhoat`, `kh_trangthai`, `kh_quantri`) VALUES
('admin', '123', 'Quản trị', 1, 'Số 01 - Lý Tự Trọng - Cần Thơ', '0912.123.567', 'admin@salomon.vn', 2, 2, 1985, NULL, NULL, 1, 1),
('NguyễnHoang', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Hoang', 0, '1 cmt8', '0888855368', 'mmlkhang@gmail.com', 23, 10, 1995, '222222222', '1c0d1a5ffdefb39fb135ba0af22044c6d9c3d885', 1, 0),
('NguyenVuKhang', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'khang', 0, '1 cmt8', '0888855368', 'mmlkhang@gmail.com', 23, 10, 1995, '000362479', 'f87dd49cda71fd90fadcef006e5f64369371a8be', 0, 0),
('nta', '|J	Ê7b¯aå• ”=Âd”ø”', 'Nguyen Thi A', 1, 'Cáº§n ThÆ¡', '0903100550', 'nta@gmail.com', 17, 5, 1987, '', '', 0, 0),
('usermoi', 'fcea920f7412b5da7be0cf42b8c93759', 'Nguoi dung moi', 0, 'Can Tho', '07103-273.344', 'vdduy@ctu.edu.vn', 2, 2, 1985, '', '44766fb4dd4e4977e75a9321cbc6413e', 0, 0),
('vdduy', 'fcea920f7412b5da7be0cf42b8c93759', 'Vo Dinh Duy', 0, 'Can Tho', '0975107705', 'vdduy@ctu.edu.vn', 2, 2, 1985, '', 'â€zcnl82qbuj', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_ma` int(11) NOT NULL,
  `km_ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_noidung` text COLLATE utf8_unicode_ci,
  `kh_tungay` date DEFAULT NULL,
  `km_denngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `lsp_ma` int(11) NOT NULL,
  `lsp_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lsp_mota` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`lsp_ma`, `lsp_ten`, `lsp_mota`) VALUES
(1, 'Máy Tính Bảng', ''),
(3, 'Điện thoại', NULL),
(4, 'Linh phụ kiện', NULL),
(29, 'LapTop', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `nsx_ma` int(11) NOT NULL,
  `nsx_ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`nsx_ma`, `nsx_ten`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'HTC'),
(4, 'Nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` int(11) NOT NULL,
  `sp_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` decimal(12,2) DEFAULT NULL,
  `sp_giacu` decimal(12,2) DEFAULT NULL,
  `sp_mota_ngan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota_chitiet` text COLLATE utf8_unicode_ci,
  `sp_ngaycapnhat` datetime NOT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `lsp_ma` int(11) NOT NULL,
  `nsx_ma` int(11) NOT NULL,
  `km_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `sp_ten`, `sp_gia`, `sp_giacu`, `sp_mota_ngan`, `sp_mota_chitiet`, `sp_ngaycapnhat`, `sp_soluong`, `lsp_ma`, `nsx_ma`, `km_ma`) VALUES
(1, 'Samsung Galaxy S3', '12000000.00', '12600000.00', 'Sản phẩm của Samsung năm 2013', 'Cấu hình: CPU Dual Core – Ram 1 GB', '2012-12-22 11:20:30', 17, 3, 2, NULL),
(3, 'Apple iPhone 5 16GB', '14890000.00', NULL, 'CPU: Dual-core 1 GHz', 'Chi tiết iPhone 5', '2013-01-16 17:13:45', 0, 3, 1, NULL),
(5, 'Samsung Galaxy Tab 10.1 3G 16G', '10990000.00', '12000000.00', 'Màn hình 10.1 inch cảm ứng đa điểm', 'Vi xử lý Dual-core 1 Cortex-A9 tốc độ 1GHz', '2013-01-17 14:18:03', 1, 1, 2, NULL),
(7, 'Samsung Galaxy Tab 2 7.0', '7500000.00', '7950000.00', 'MÃ¡y tÃ­nh báº£ng Samsung Galaxy Tab 2 7.0 ', 'Mï¿½n hï¿½nh 7 inch C?m ?ng ?i?n dung,?a ?i?m', '2013-01-28 10:42:08', 12, 1, 2, NULL),
(11, 'iPhone 7 32GB', '11490000.00', '11990000.00', '', '', '0000-00-00 00:00:00', 20, 3, 1, NULL),
(12, 'iPhone XS', '20000000.00', '23000000.00', '', '', '0000-00-00 00:00:00', 20, 3, 1, NULL),
(13, 'SamSung A50', '5000000.00', '6000000.00', '', '', '0000-00-00 00:00:00', 20, 3, 2, NULL),
(14, 'MID K960', '1700000.00', '1800000.00', 'Cpu 4 nhân Ram 2GB gắn Sim 3G', '', '0000-00-00 00:00:00', 20, 1, 2, NULL),
(16, 'AirPods Apple MMEF2', '2000000.00', '2200000.00', '', '', '0000-00-00 00:00:00', 10, 4, 1, NULL),
(17, 'Surface Laptop', '20000000.00', '25000000.00', 'Core i5, 128GB, platinum', '', '0000-00-00 00:00:00', 5, 29, 3, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_dondathang`
--

CREATE TABLE `sanpham_dondathang` (
  `sp_ma` int(11) NOT NULL,
  `dh_ma` int(11) NOT NULL,
  `sp_dh_soluong` int(11) NOT NULL,
  `sp_dh_dongia` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_dondathang`
--

INSERT INTO `sanpham_dondathang` (`sp_ma`, `dh_ma`, `sp_dh_soluong`, `sp_dh_dongia`) VALUES
(1, 5, 3, '12000000.00'),
(5, 5, 2, '10990000.00'),
(7, 4, 1, '7500000.00'),
(11, 15, 1, '11490000.00'),
(11, 16, 1, '11490000.00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chudegopy`
--
ALTER TABLE `chudegopy`
  ADD PRIMARY KEY (`cdgy_ma`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`dh_ma`),
  ADD KEY `dondathang_khachhang_idx` (`kh_tendangnhap`),
  ADD KEY `dondathang_hinhthucthanhtoan_idx` (`httt_ma`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`gy_ma`),
  ADD KEY `gopy_chudegopy_idx` (`cdgy_ma`);

--
-- Chỉ mục cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD PRIMARY KEY (`hsp_ma`),
  ADD KEY `fk_hinhsanpham_sanpham1_idx` (`sp_ma`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`httt_ma`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_tendangnhap`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_ma`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`lsp_ma`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`nsx_ma`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `sanpham_loaisanpham_idx` (`lsp_ma`),
  ADD KEY `sanpham_nhasanxuat_idx` (`nsx_ma`),
  ADD KEY `sanpham_khuyenmai_idx` (`km_ma`);

--
-- Chỉ mục cho bảng `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD PRIMARY KEY (`sp_ma`,`dh_ma`),
  ADD KEY `sanpham_donhang_sanpham_idx` (`sp_ma`),
  ADD KEY `sanpham_donhang_dondathang_idx` (`dh_ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `dh_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  MODIFY `hsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `httt_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `lsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `nsx_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_hinhthucthanhtoan` FOREIGN KEY (`httt_ma`) REFERENCES `hinhthucthanhtoan` (`httt_ma`),
  ADD CONSTRAINT `dondathang_khachhang` FOREIGN KEY (`kh_tendangnhap`) REFERENCES `khachhang` (`kh_tendangnhap`);

--
-- Các ràng buộc cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `gopy_chudegopy` FOREIGN KEY (`cdgy_ma`) REFERENCES `chudegopy` (`cdgy_ma`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD CONSTRAINT `fk_hinhsanpham_sanpham1` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_khuyenmai` FOREIGN KEY (`km_ma`) REFERENCES `khuyenmai` (`km_ma`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`lsp_ma`) REFERENCES `loaisanpham` (`lsp_ma`),
  ADD CONSTRAINT `sanpham_nhasanxuat` FOREIGN KEY (`nsx_ma`) REFERENCES `nhasanxuat` (`nsx_ma`);

--
-- Các ràng buộc cho bảng `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD CONSTRAINT `sanpham_donhang_dondathang` FOREIGN KEY (`dh_ma`) REFERENCES `dondathang` (`dh_ma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_donhang_sanpham` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
