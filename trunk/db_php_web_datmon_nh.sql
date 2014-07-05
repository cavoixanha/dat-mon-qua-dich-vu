-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2014 at 04:05 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_php_web_datmon_nh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ban_an`
--

CREATE TABLE IF NOT EXISTS `tbl_ban_an` (
  `id_ban` int(11) NOT NULL AUTO_INCREMENT,
  `loai_ban` int(11) NOT NULL,
  PRIMARY KEY (`id_ban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE IF NOT EXISTS `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(10) NOT NULL,
  `ho_khach_hang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_khach_hang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_ban`
--

CREATE TABLE IF NOT EXISTS `tbl_loai_ban` (
  `id_loai_ban` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_ban` varchar(50) NOT NULL,
  `he_so_gia` float NOT NULL,
  PRIMARY KEY (`id_loai_ban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mon_an`
--

CREATE TABLE IF NOT EXISTS `tbl_mon_an` (
  `id_mon_an` int(11) NOT NULL AUTO_INCREMENT,
  `ten_mon` varchar(50) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `thong_tin` text NOT NULL,
  `don_gia` float NOT NULL,
  `id_nhom_mon_an` int(11) NOT NULL,
  PRIMARY KEY (`id_mon_an`),
  KEY `id_nhom_mon_an` (`id_nhom_mon_an`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_mon_an`
--

INSERT INTO `tbl_mon_an` (`id_mon_an`, `ten_mon`, `hinhanh`, `thong_tin`, `don_gia`, `id_nhom_mon_an`) VALUES
(1, 'Lẩu', 'img/mon_an/dui-ga-sot-nam.jpg', '', 350000, 1),
(2, 'Thịt Quay Sốt Me', 'img/mon_an/thit-quay-sot-me.jpg', '', 200000, 2),
(3, 'Đùi Gà Sốt Mắn', 'img/mon_an/thit-quay-sot-me.jpg', '', 200000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhom_mon_an`
--

CREATE TABLE IF NOT EXISTS `tbl_nhom_mon_an` (
  `id_nhom` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_nhom`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_nhom_mon_an`
--

INSERT INTO `tbl_nhom_mon_an` (`id_nhom`, `ten_nhom`) VALUES
(1, 'Lẩu'),
(2, 'Nướng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phieu_yeu_cau`
--

CREATE TABLE IF NOT EXISTS `tbl_phieu_yeu_cau` (
  `id_ban` int(11) NOT NULL,
  `id_phieu_yeu_cau` int(11) NOT NULL AUTO_INCREMENT,
  `id_mon_an` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_nhan` date NOT NULL,
  `ngay_dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_khach_hang` int(11) NOT NULL,
  PRIMARY KEY (`id_phieu_yeu_cau`),
  KEY `id_khach_hang` (`id_khach_hang`),
  KEY `id_ban` (`id_ban`),
  KEY `id_mon_an` (`id_mon_an`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quangcao`
--

CREATE TABLE IF NOT EXISTS `tbl_quangcao` (
  `id_QuangCao` int(10) NOT NULL AUTO_INCREMENT,
  `tenquangcao` varchar(100) NOT NULL,
  `anhminhhoa` varchar(100) NOT NULL,
  `trangthai_qc` tinyint(1) NOT NULL,
  `vitri` int(10) NOT NULL,
  PRIMARY KEY (`id_QuangCao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tintuc`
--

CREATE TABLE IF NOT EXISTS `tbl_tintuc` (
  `id_TinTuc` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinTuc` varchar(100) NOT NULL,
  `anhminhhoa` varchar(100) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`id_TinTuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_TinTuc`, `TenTinTuc`, `anhminhhoa`, `trangthai`, `thutu`) VALUES
(1, 'Thủ Thuật nấu ăn hay', 'img/mon_an/dui-ga-sot-nam.jpg', 1, 1),
(6, 'Món Ăn', '../img/mon_an/plugin_add.png', 0, 1),
(7, 'Tin Thời Sự', '../img/anhminhhoa.jpg', 1, 2),
(8, 'Bí Quyết Nấu Ăn', '../img/anhminhhoa.jpg', 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ban_an`
--
ALTER TABLE `tbl_ban_an`
  ADD CONSTRAINT `tbl_ban_an_ibfk_1` FOREIGN KEY (`id_ban`) REFERENCES `tbl_loai_ban` (`id_loai_ban`);

--
-- Constraints for table `tbl_mon_an`
--
ALTER TABLE `tbl_mon_an`
  ADD CONSTRAINT `tbl_mon_an_ibfk_1` FOREIGN KEY (`id_nhom_mon_an`) REFERENCES `tbl_nhom_mon_an` (`id_nhom`);

--
-- Constraints for table `tbl_phieu_yeu_cau`
--
ALTER TABLE `tbl_phieu_yeu_cau`
  ADD CONSTRAINT `tbl_phieu_yeu_cau_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_khach_hang` (`id_khach_hang`),
  ADD CONSTRAINT `tbl_phieu_yeu_cau_ibfk_2` FOREIGN KEY (`id_ban`) REFERENCES `tbl_ban_an` (`id_ban`),
  ADD CONSTRAINT `tbl_phieu_yeu_cau_ibfk_3` FOREIGN KEY (`id_mon_an`) REFERENCES `tbl_mon_an` (`id_mon_an`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
