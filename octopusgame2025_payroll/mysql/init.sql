-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 04:42 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `first_name`, `last_name`, `password`, `salary`) VALUES
('seong_gi_hun', 'Seong', 'Gi-hun', 'RedLightGreenLight123!', 50000),
('cho_sang_woo', 'Cho', 'Sang-woo', 'StocksCrash2021!', 120000),
('kang_saebyeok', 'Kang', 'Saebyeok', 'NorthStar!', 30000),
('jang_deok_su', 'Jang', 'Deok-su', 'GangsterLife!', 25000),
('han_mi_nyeo', 'Han', 'Mi-nyeo', 'SmartSurvivor!', 20000),
('hwang_jun_ho', 'Hwang', 'Jun-ho', 'Undercover456!', 60000),
('the_front_man', 'Unknown', 'Front Man', 'MARBLE{sGSrdJmptP}', 150000);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
