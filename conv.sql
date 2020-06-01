-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 08:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conv`
--

CREATE TABLE `tbl_conv` (
  `firstname` mediumtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `Websitetype` mediumtext NOT NULL,
  `WebpageRequired` int(5) NOT NULL,
  `Contentwriting` mediumtext NOT NULL,
  `developmenttime` varchar(50) NOT NULL,
  `HostingServices` mediumtext NOT NULL,
  `DomainName` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
