-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 04:23 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--
CREATE DATABASE IF NOT EXISTS `hrs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hrs`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--
-- Creation: Sep 03, 2018 at 01:41 PM
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `message`) VALUES
(1, 'a@b.c', 'Message sample here'),
(2, 'will@gmail.com', 'Good Day!'),
(3, 'jonathan@gmail.com', 'hello!'),
(4, 'coco@gmail.com', 'Hihe'),
(5, 'eleven@gmail.com', 'willlll!');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--
-- Creation: Sep 03, 2018 at 01:41 PM
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bed_type` varchar(100) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `Number_of_days` int(11) NOT NULL,
  `Payment` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `email`, `phone`, `bed_type`, `cin`, `cout`, `Number_of_days`, `Payment`, `Username`, `status`) VALUES
(1, 'Juan', 'Dela Cruz', 'juan@gmail.com', '09876543211', 'Single', '2018-09-04', '2018-09-06', 2, 798, 'Pocket', 'approved'),
(3, 'Vice', 'Ganda', 'vice@gmail.com', '09876543210', 'Deluxe', '2018-09-17', '2018-09-22', 5, 499, '', 'checkout'),
(7, 'Yomama', 'Sushi', 'yomama@gmail.com', '09876543210', 'Single', '2018-09-03', '2018-09-04', 1, 399, 'Pocket', 'approved'),
(10, 'Will', 'Byers', 'will@gmail.com', '09854123654', 'Single', '2018-09-03', '2018-09-13', 24, 47976, 'Byers', 'checkout'),
(11, 'Jonathan', 'Byers', 'jonathan@gmail.com', '09874521036', 'Single', '2018-09-03', '2018-09-05', 2, 798, 'Byers', 'incoming'),
(13, 'Coco', 'Martin', 'coco@gmail.com', '09523652365', 'Single', '2018-09-03', '2018-09-06', 3, 1197, 'Dela Cruz', 'incoming'),
(14, 'Jane', 'Hopper', 'eleven@gmail.com', '09523587410', 'Deluxe', '2018-09-03', '2018-09-06', 3, 5997, 'Hopper', 'incoming');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--
-- Creation: Sep 03, 2018 at 01:41 PM
--

DROP TABLE IF EXISTS `users_table`;
CREATE TABLE IF NOT EXISTS `users_table` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` text NOT NULL,
  `Username` text NOT NULL,
  `UserPass` text NOT NULL,
  `UserAccess` varchar(10) NOT NULL,
  `UserFullName` text NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`UserID`, `UserEmail`, `Username`, `UserPass`, `UserAccess`, `UserFullName`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', ''),
(2, 'sample@gmail.com', 'sample', 'sample', 'client', 'sample'),
(3, 'admin@gmail.com', 'Admin', 'admin', 'client', 'Admin'),
(4, 'a@b.c', 'Pocket', 'pass', 'client', 'Winner'),
(5, 'will@gmail.com', 'Byers', 'willbyer', 'admin', 'Will'),
(6, 'jonathan@gmail.com', 'Byers', 'jonathan', 'admin', 'Jonathan'),
(7, 'juan@gmail.com', 'Dela Cruz', 'juan', 'admin', 'Juan '),
(8, 'eleven@gmail.com', 'Hopper', 'eleven', 'admin', 'Jane');


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table message
--

--
-- Metadata for table reservation
--

--
-- Metadata for table users_table
--

--
-- Metadata for database hrs
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
