-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 07:45 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1smp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `idBinhLuan` int(11) NOT NULL,
  `noiDung` varchar(255) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `ngayBinhLuan` date DEFAULT NULL,
  `idSp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`idBinhLuan`, `noiDung`, `idUser`, `ngayBinhLuan`, `idSp`) VALUES
(1, 'kkk', 8, '2023-12-12', 7),
(2, 'hhh', 8, '2023-12-12', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idChiTietDonHang` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `idSp` int(11) NOT NULL,
  `idDonHang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idChiTietDonHang`, `soLuong`, `idSp`, `idDonHang`) VALUES
(3, 17, 7, 1),
(4, 9, 6, 1),
(5, 1, 6, 2),
(6, 1, 7, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `idDm` int(11) NOT NULL,
  `tenDm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`idDm`, `tenDm`) VALUES
(2, 'Iphone'),
(4, 'App watch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `idDonHang` int(11) NOT NULL,
  `ngayDat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` varchar(255) NOT NULL DEFAULT 'đợi xử lý',
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`idDonHang`, `ngayDat`, `trangthai`, `idUser`) VALUES
(1, '2023-12-13 17:45:20', 'Đã vận chuyển', 8),
(2, '2023-12-13 17:56:06', 'Đã vận chuyển', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `idSp` int(11) NOT NULL,
  `tenSp` varchar(255) NOT NULL,
  `gia` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `moTa` varchar(255) DEFAULT NULL,
  `luotXem` varchar(255) DEFAULT NULL,
  `giaKm` varchar(255) DEFAULT NULL,
  `trangThai` int(11) NOT NULL DEFAULT 1,
  `idDm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`idSp`, `tenSp`, `gia`, `anh`, `moTa`, `luotXem`, `giaKm`, `trangThai`, `idDm`) VALUES
(6, 'iPhone 15 Pro Max 256GB ', '34990000', 'iphone-15-pro-max_3.webp', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế khung viền từ titan chuẩn hàng không vũ trụ - Cực nhẹ, bền cùng viền cạnh mỏng cầm nắm thoải mái\r\nHiệu năng Pro chiến game thả ga - Chip A17 Pro mang lại hiệu năng đồ họa vô cùng sống động và chân thực\r\nThoả sức sáng tạo và quay', NULL, '32990000', 1, 4),
(7, 'iPhone 15 Plus 256GB ', '28990000', 'iphone-15-plus-256gb_2.webp', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế dẫn đầu xu hướng - Nhiều màu sắc trendy cùng chất liệu kính pha màu và khung nhôm vô cùng bền bỉ\r\nNắm bắt và tương tác mọi thông tin dễ dàng hơn với Dynamic Island mở rộng\r\nChụp ảnh chân dung xuất sắc mọi khoảnh khắc - Camera ch', NULL, '28590000', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `idUser` int(11) NOT NULL,
  `vaiTro` varchar(255) DEFAULT 'Người dùng',
  `tenUser` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `hoTenUser` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`idUser`, `vaiTro`, `tenUser`, `Password`, `hoTenUser`, `sdt`, `diaChi`, `role`) VALUES
(7, 'admin', 'bacdz', 'bac', '', '', '', 1),
(8, 'Người dùng', 'phuong', 'phuong', 'Dương Đức Phương', '0124532456', 'hà nội', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`idBinhLuan`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSp` (`idSp`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idChiTietDonHang`),
  ADD KEY `idSp` (`idSp`),
  ADD KEY `idDonHang` (`idDonHang`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`idDm`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`idDonHang`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`idSp`),
  ADD KEY `idDm` (`idDm`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `idBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `idDm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `idDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `idSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tai_khoan` (`idUser`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`idSp`) REFERENCES `san_pham` (`idSp`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`idSp`) REFERENCES `san_pham` (`idSp`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idDonHang`) REFERENCES `don_hang` (`idDonHang`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `tai_khoan` (`idUser`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`idDm`) REFERENCES `danh_muc` (`idDm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
