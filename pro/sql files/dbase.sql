-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2015 at 12:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `refugees`
--

CREATE TABLE IF NOT EXISTS `refugees` (
  `refugee_id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year_of_birth` year(4) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `origin` varchar(100) NOT NULL,
  PRIMARY KEY (`refugee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `refugees`
--

INSERT INTO `refugees` (`refugee_id`, `firstname`, `lastname`, `full_name`, `gender`, `year_of_birth`, `zone`, `origin`) VALUES
(1, 'jerusha', 'aine', 'jerusha aine', 'female', 1990, 'B', 'kisoro'),
(2, 'racheal', 'begumisa', 'racheal begumisa', 'female', 1991, 'C', 'kabale'),
(3, 'herbert', 'niyo', 'herbert niyo', 'male', 1999, 'B', 'kinshasha'),
(4, 'herbert', 'nsaba', 'herbert nsaba', 'male', 1909, 'B', 'kinshasha');

-- --------------------------------------------------------

--
-- Table structure for table `relative`
--

CREATE TABLE IF NOT EXISTS `relative` (
  `r_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_refugee` varchar(50) NOT NULL,
  `second_refugee` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `origin` varchar(100) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `relative`
--

INSERT INTO `relative` (`r_id`, `first_refugee`, `second_refugee`, `relationship`, `origin`) VALUES
(1, 'jerusha aine', 'racheal begumisa', 'sister', 'uganda'),
(2, 'herbert niyo', 'herbert nsaba', 'father', 'uganda'),
(3, 'herbert nsaba', 'herbert nsaba', 'brother', 'uganda');

-- --------------------------------------------------------

--
-- Table structure for table `settlement`
--

CREATE TABLE IF NOT EXISTS `settlement` (
  `reg_id` varchar(20) NOT NULL,
  `group` varchar(100) NOT NULL,
  `zone` varchar(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settlement`
--

INSERT INTO `settlement` (`reg_id`, `group`, `zone`) VALUES
('c/1', '	herbert nsaba,	', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(4) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(70) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_appointment` date NOT NULL,
  `residence` varchar(50) NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `username`, `gender`, `status`, `date_of_birth`, `date_of_appointment`, `residence`, `contact`, `email`, `password`) VALUES
(0, 'bright', 'niyonzima', 'brightniyonzima', 'male', 'supervisor', '1990-10-05', '1996-01-01', 'mplrw', '0775040213', 'brightniyonzima@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(1, 'bright', 'niyonzima', 'brightniyo', 'male', 'system adm', '2015-04-12', '2015-08-11', 'mpelerwe', '0700155098', 'brightniyonzima@gmail.com', '123'),
(2, 'alex', 'mukibi', 'alexmukibi', 'male', 'system admin', '2015-10-05', '1996-01-01', 'kampala', '0798898989', 'alextarzan.musisi@yahoo.com', '250cf8b51c773f3f8dc8b4be867a9a02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
