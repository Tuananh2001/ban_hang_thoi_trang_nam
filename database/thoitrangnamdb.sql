-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 12:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thoitrangnamdb`
--
CREATE DATABASE IF NOT EXISTS `thoitrangnamdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thoitrangnamdb`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--
-- Tạo: Th6 18, 2022 lúc 09:52 AM
-- Cập nhật lần cuối: Th6 18, 2022 lúc 10:45 PM
--

DROP TABLE IF EXISTS `cthoadon`;
CREATE TABLE `cthoadon` (
  `Id` int(100) NOT NULL,
  `MaHD` int(100) NOT NULL,
  `masp` varchar(20) CHARACTER SET utf8 NOT NULL,
  `soluong` int(100) NOT NULL,
  `GiaSP` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `cthoadon`:
--

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--
-- Tạo: Th6 18, 2022 lúc 08:35 PM
-- Cập nhật lần cuối: Th6 18, 2022 lúc 10:45 PM
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `MaHD` int(100) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngayhd` date NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tongtien` float NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `hoadon`:
--

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--
-- Tạo: Th6 18, 2022 lúc 09:52 AM
-- Cập nhật lần cuối: Th6 18, 2022 lúc 10:45 PM
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `khachhang`:
--

--
-- Đang đổ dữ liệu cho bảng ``
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--
-- Tạo: Th6 16, 2022 lúc 08:14 PM
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE `loaisp` (
  `maloai` varchar(20) NOT NULL,
  `tenloai` varchar(50) DEFAULT NULL,
  `Mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `loaisp`:
--

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--
-- Tạo: Th6 13, 2022 lúc 02:50 PM
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE `nguoidung` (
  `taikhoan` varchar(40) NOT NULL,
  `matkhau` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `nguoidung`:
--

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`taikhoan`, `matkhau`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--
-- Tạo: Th6 13, 2022 lúc 02:50 PM
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
  `masp` varchar(20) NOT NULL,
  `maloai` varchar(20) DEFAULT NULL,
  `tensp` varchar(100) DEFAULT NULL,
  `soluong` int(30) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `anh` varchar(30) DEFAULT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `sanpham`:
--   `maloai`
--       `loaisp` -> `maloai`
--

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `masp` (`masp`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `khachhang1`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
