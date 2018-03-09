-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 11:35 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1400degrees`
--
CREATE DATABASE IF NOT EXISTS `1400degrees` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `1400degrees`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  `Surname` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Phone` varchar(32) NOT NULL,
  `Position` varchar(32) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Surname`, `Email`, `Phone`, `Position`) VALUES
(9, 'george', 'ionescu', 'george.ionescu@mail.com', '0744329540', 'developer-PHP'),
(11, 'florin', 'pana', 'florinellllll@mail.com', '0744329540', 'CEO'),
(16, 'sergiu', 'vartic', 'sergiu@mail.com', '0744329540', 'QA'),
(21, 'Manuel', 'Romario', 'manuel@gmail.com', '0744329540', 'Supervisor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
