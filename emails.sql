-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2021 at 01:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `date`) VALUES
(7, 'juris.kucinskis@gmail.com', '2021-05-26 11:54:42'),
(9, 'hargh@inbox.lv', '2021-05-26 11:54:50'),
(14, 'juris.kucinskis@gmail.com', '2021-05-26 11:57:54'),
(15, 'juris.kucinskis@gmail.com', '2021-05-26 11:57:58'),
(28, 'wokring@gmail.com', '2021-05-28 16:15:01'),
(17, 'dtransport@inbox.lv', '2021-05-26 11:58:09'),
(18, 'dtransport@inbox.lv', '2021-05-26 11:58:13'),
(29, 'justanother@gmail.com', '2021-05-28 16:24:39'),
(20, 'dtransport@inbox.lv', '2021-05-26 11:58:21'),
(21, 'test@hotmail.com', '2021-05-27 06:34:19'),
(22, 'info@yahoo.com', '2021-05-27 06:57:15'),
(23, 'abs@yahoo.com', '2021-05-28 12:01:19'),
(24, 'second@yahoo.com', '2021-05-28 12:01:29'),
(25, 'third@yahoo.com', '2021-05-28 12:01:38'),
(27, 'albert@yahoo.com', '2021-05-28 16:14:31'),
(31, 'dtransport@inbox.lv', '2021-05-28 16:31:37'),
(35, 'juris.kucinskis@gmail.com', '2021-05-28 16:38:47'),
(85, 'abctest@abs.com', '2021-06-03 08:50:41'),
(37, 'dtransport@inbox.lv', '2021-05-28 16:52:53'),
(38, 'test@test.com', '2021-05-31 09:20:23'),
(43, 'columbian@columbian.com', '2021-05-31 09:39:58'),
(54, 'onemoretest@test.com', '2021-05-31 10:52:57'),
(60, 'dtransport@inbox.lv', '2021-05-31 11:49:35'),
(62, 'form@test.com', '2021-05-31 12:05:58'),
(84, 'testem@test.com', '2021-06-03 08:43:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
