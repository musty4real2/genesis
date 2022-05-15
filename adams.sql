-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 03:58 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Awareness` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_events`
--

CREATE TABLE IF NOT EXISTS `admin_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Address` text NOT NULL,
  `Awareness` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_finance`
--

CREATE TABLE IF NOT EXISTS `admin_finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Month` int(255) NOT NULL,
  `Date` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Amount` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_function`
--

CREATE TABLE IF NOT EXISTS `admin_function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` text NOT NULL,
  `Month` text NOT NULL,
  `Date` int(120) NOT NULL,
  `Title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_maintenance`
--

CREATE TABLE IF NOT EXISTS `admin_maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Item` text NOT NULL,
  `Stock_Remaining` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_schedule`
--

CREATE TABLE IF NOT EXISTS `admin_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Month` text NOT NULL,
  `Date` text NOT NULL,
  `Time` varchar(12) NOT NULL,
  `Title` text NOT NULL,
  `Venue` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_submit`
--

CREATE TABLE IF NOT EXISTS `admin_submit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Awareness` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Awareness` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Name`, `Phone_Number`, `Address`, `Awareness`) VALUES
(1, 'default', 2147483647, 'default', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `eventsdata`
--

CREATE TABLE IF NOT EXISTS `eventsdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Address` text NOT NULL,
  `Awareness` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Date` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Amount` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `Name`, `Month`, `Date`, `Description`, `Amount`) VALUES
(4, 'Gems Tech', 'Febuary', 14, 'Paid', '1000'),
(5, 'Reftek', 'January', 16, 'Not Paid', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `financetable`
--

CREATE TABLE IF NOT EXISTS `financetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Month` text NOT NULL,
  `Date` int(15) NOT NULL,
  `Year` int(12) NOT NULL,
  `Description` text NOT NULL,
  `Amount` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` text NOT NULL,
  `Month` text NOT NULL,
  `Date` int(120) NOT NULL,
  `Title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `Password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'ray', 'ray', 'maintenance'),
(3, 'dave', 'dave', 'administration'),
(4, 'dams', 'dams', 'Events'),
(5, 'Adams David', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Item` text NOT NULL,
  `Stock_Remaining` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `Name`, `Item`, `Stock_Remaining`, `Description`) VALUES
(1, 'dsds', 'dsdsg', '2', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` text NOT NULL,
  `Month` text NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Title` text NOT NULL,
  `Venue` text NOT NULL,
  `Description` text NOT NULL,
  `Year` varchar(223) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `Type`, `Month`, `Date`, `Time`, `Title`, `Venue`, `Description`, `Year`) VALUES
(1, 'appointment', 'Febuary', '10', '01:30 pm', 'Food', 'KFC', 'Menu', '2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
