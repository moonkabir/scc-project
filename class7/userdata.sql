-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2020 at 05:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moon`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `creationDate` varchar(100) DEFAULT current_timestamp(),
  `updateDate` varchar(100) DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `website`, `comment`, `gender`, `creationDate`, `updateDate`) VALUES
(1, 'Moon Kabir', 'moonkabir4@gmail.com', 'www.moonkabir.com', 'Hello Guys', 'male', '2020-09-04 22:15:09', '2020-09-04 22:15:09'),
(2, 'adminmoonnew', 'moonkabir4@gmail.com', 'www.moonkabir.com', 'erdgthfj', 'male', '2020-09-04 23:14:04', '2020-09-04 23:14:04'),
(3, 'adminmoonnew', 'moonkabir4@gmail.com', 'www.moonkabir.com', 'erdgthfj', '', '2020-09-04 23:15:39', '2020-09-04 23:15:39'),
(4, 'adminmoonnew', 'moonkabir4@gmail.com', 'FDfdhgfgj', 'sfddhgkhlj', '', '2020-09-04 23:15:53', '2020-09-04 23:15:53'),
(5, 'Jon Doe', 'jon@doe.com', 'www.moonkabir.com', 'dfgdhfgkhzdtfhgdj', 'male', '2020-09-04 23:20:21', '2020-09-04 23:20:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
