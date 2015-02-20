-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2015 at 12:27 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `BarangayMovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `official_details`
--

CREATE TABLE IF NOT EXISTS `official_details` (
  `official_fname` varchar(30) NOT NULL,
  `official_lname` varchar(30) NOT NULL,
  `official_mi` char(1) NOT NULL,
  `official_account` char(5) NOT NULL,
  `official_password` varchar(30) NOT NULL,
  `official_brgy` varchar(20) NOT NULL,
  PRIMARY KEY (`official_account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official_details`
--

INSERT INTO `official_details` (`official_fname`, `official_lname`, `official_mi`, `official_account`, `official_password`, `official_brgy`) VALUES
('Juan', 'Dela Cruz', 'P', '1234a', 'iamjuan', 'Paknaan');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `project_filename` varchar(20) NOT NULL,
  `project_title` varchar(20) NOT NULL,
  `project_description` text NOT NULL,
  `project_location` varchar(20) NOT NULL,
  `project_status` char(1) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_filename`, `project_title`, `project_description`, `project_location`, `project_status`, `project_id`) VALUES
('', 'Coastal Clean-up', 'I think that this site could be one of our barangay''s attraction but hugaw lang kaayu due to basura nga ilabay lang sa dagat. If pwede unta ni ma maintain sa barangay mas maayu unta. ', 'Camansi Zone', '0', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE IF NOT EXISTS `resident_details` (
  `resident_fname` varchar(30) NOT NULL,
  `resident_lname` varchar(30) NOT NULL,
  `resident_mi` char(1) NOT NULL,
  `resident_account` char(5) NOT NULL,
  `resident_password` varchar(30) NOT NULL,
  `resident_brgy` varchar(20) NOT NULL,
  PRIMARY KEY (`resident_account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`resident_fname`, `resident_lname`, `resident_mi`, `resident_account`, `resident_password`, `resident_brgy`) VALUES
('Jose', 'Rizal', 'P', '123', '123', 'Paknaan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
