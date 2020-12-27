-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2020 at 01:30 AM
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
-- Database: `topsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `nam` mediumtext NOT NULL,
  `blog` longtext NOT NULL,
  `pic` mediumtext NOT NULL,
  `pic2` mediumtext NOT NULL,
  `tim` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `nam`, `blog`, `pic`, `pic2`, `tim`) VALUES
(2, 'test', 'okay anther try', 'img/Picture 589.jpg', 'img/Picture 891.jpg', '2020-12-25'),
(3, 'test', 'Hola how are you', 'img/IMG_20201201_181412.jpg', 'img/Picture 639.jpg', '2020-12-25'),
(4, 'test', 'next', 'img/Snapchat-1806327131.jpg', 'img/IMG_20201028_115853.jpg', '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `EmpoID` mediumtext NOT NULL,
  `designat` mediumtext NOT NULL,
  `roles` mediumtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Id`, `EmpoID`, `designat`, `roles`) VALUES
(1, '1', 'manager', 'Admin'),
(2, '2', 'backend developer', 'Editor'),
(5, '3', 'accountant', 'Admin'),
(7, '4', 'Director of operations ', 'Editor'),
(9, '5', 'Manages the network', 'Admin'),
(11, '6', 'IT', 'Admin'),
(13, '7', 'Finance', 'Viewer'),
(15, '8', 'systems admin', 'Editor'),
(17, '9', 'backend developer', 'Editor'),
(19, '10', 'Communications manager', 'Admin'),
(21, '11', 'Assistant director ', 'Admin'),
(23, '12', 'Backend developer ', 'Editor'),
(25, '13', 'General caretaker', 'Editor'),
(27, '14', 'Front end developer', 'Editor'),
(29, '15', 'graphics designer', 'Viewer'),
(30, '15', 'graphics designer', 'Viewer');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `EmpoID` int(100) NOT NULL AUTO_INCREMENT,
  `Nam` mediumtext NOT NULL,
  `Emplo_status` mediumtext NOT NULL,
  `Statu` mediumtext NOT NULL,
  `Start_dat` varchar(20) NOT NULL,
  PRIMARY KEY (`EmpoID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmpoID`, `Nam`, `Emplo_status`, `Statu`, `Start_dat`) VALUES
(1, 'Nabimanya Nelson John Paul', 'Employed', 'Active', '2019-12-12'),
(2, 'Kenneth Ojakol', 'Employed', 'Active', '2020-06-13'),
(3, 'Thomas Kyamagero', 'Unemployed', 'Pending', '2020-10-14'),
(4, 'Paul Nabimanya', 'Employed', 'Active', '2017-01-01'),
(5, 'Kyamagero Paul', 'Employed', 'Active', '2012-12-12'),
(6, 'SSali Peter', 'Employed', 'Active', '2012-12-12'),
(7, 'Zizinga Pius ', 'Employed', 'Active', '2012-12-12'),
(8, 'Jalia Nabukalu Esther', 'Unemployed', 'Pending', '2020-09-28'),
(9, 'John Zizinga ', 'Employed', 'Pending', '2021-01-01'),
(10, 'Sharon Opoka', 'Employed', 'Active', '2012-12-12'),
(11, 'Nabimanya Paul', 'Employed', 'Active', '2012-12-12'),
(12, 'Ojakol Kenneth', 'Employed', 'Active', '2012-12-12'),
(13, 'Opoka Jane Sharon', 'Employed', 'Active', '2012-12-12'),
(14, 'Kikoyo Paul', 'Employed', 'Active', '2012-12-12'),
(15, 'Esther Nabukalu', 'Unemployed', 'Pending', '2020-12-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
