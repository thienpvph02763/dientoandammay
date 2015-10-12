-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 07:44 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thien`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `ID_KH` int(11) NOT NULL,
  `Ten_KH` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_KH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `ID_LSP` int(11) NOT NULL,
  `TenLoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_LSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ID_LSP`, `TenLoai`) VALUES
(1, 'Iphone'),
(2, 'SamSung'),
(3, 'Nokia'),
(4, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID_SP` int(11) NOT NULL,
  `Ten_SP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ID_LSP` int(11) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `phukien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_SP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID_SP`, `Ten_SP`, `ID_LSP`, `gia_sp`, `phukien`) VALUES
(1, 'Iphone4', 1, 20000000, 'Tai nghe'),
(2, 'Nokia 8800', 3, 10000000, 'ốp'),
(3, 'Samsung 2190', 2, 1212121212, 'Tai nghe'),
(4, 'oppo N3', 4, 212121212, 'dây sạc'),
(5, 'samsung23847', 2, 2147483647, 'ksjdfhksjdh'),
(6, 'sdjfhskjdh', 2, 2147483647, 'ựdhasd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
