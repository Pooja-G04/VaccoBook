-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 09:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `hd`
--

CREATE TABLE `hd` (
  `hname` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `vacc` varchar(100) NOT NULL,
  `trans` varchar(100) NOT NULL,
  `oxygen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hd`
--

INSERT INTO `hd` (`hname`, `area`, `vacc`, `trans`, `oxygen`) VALUES
('Sterling', 'Ahmedabad', 'Covaxin', 'no', 'yes'),
('Dr.Patels', 'Delhi', 'Covaxin', 'no', 'yes'),
('Apollo hospital', 'Chennai', 'Covaxin', 'yes', 'yes'),
('Apex Heart Institute', 'Ahmedabad', 'Covishield', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `username` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `vacc` varchar(100) NOT NULL,
  `trans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`username`, `hname`, `area`, `vacc`, `trans`) VALUES
('Chaman', 'Zydus', 'Ahmedabad', 'Covishield', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetails`
--

CREATE TABLE `hospitaldetails` (
  `oxygen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
