-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 04:48 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `user_id`) VALUES
(45, 'Guitars', 45),
(106, 'Music', 45),
(133, 'Liquor', 45),
(141, 'data', 45),
(142, 'books', 45),
(132, 'World Cup', 45),
(140, 'Physics Fiest', 45),
(135, 'Books', 50),
(120, 'Management', 50);

-- --------------------------------------------------------

--
-- Table structure for table `categorydata`
--

DROP TABLE IF EXISTS `categorydata`;
CREATE TABLE IF NOT EXISTS `categorydata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `field_name` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_test` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorydata`
--

INSERT INTO `categorydata` (`id`, `category_id`, `field_name`) VALUES
(1, 106, 'Guitars'),
(3, 106, 'piano'),
(55, 133, 'Vodka'),
(50, 45, 'Electric Battleee'),
(51, 45, 'Acoustic'),
(54, 132, 'Semi Final'),
(52, 135, 'Stories'),
(57, 133, 'Beer'),
(65, 133, 'local'),
(59, 132, 'Final'),
(60, 132, 'Quarter final'),
(66, 133, 'Signature'),
(63, 120, 'Project Management'),
(64, 120, 'Accounting management');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(45, 'Rosan', 'aikido763@gmail.com', '1111'),
(50, 'Raju', 'cloudrajup@gmail.com', '1111'),
(57, 'roshan', 'roshan@roshan.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_data_id` int(11) NOT NULL,
  `field_value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_test` (`category_data_id`),
  KEY `fk_testing` (`user_id`),
  KEY `fk_someName` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
