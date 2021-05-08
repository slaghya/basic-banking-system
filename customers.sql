-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 08:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `customerid` varchar(50) NOT NULL,
  `accountno` int(20) NOT NULL,
  `balance` int(255) NOT NULL,
  `mobileno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `customerid`, `accountno`, `balance`, `mobileno`) VALUES
('slaghya', 'Tiwari', '1cr18is150', 789065, 3100, 45667),
('vageesha', 'tiwari', '1cr18is149', 456789, 4200, 56346),
('suman', 'das', '235667', 345677, 5000, 568878),
('shobhit', 'kumar', '234hdjk', 456803, 6000, 23456),
('suhasini', 'kumari', 'sddf3454', 345467, 5000, 5456677),
('anupama', 'mishra', 'dfr45t5t', 454678, 8000, 346787),
('zufi', 'firdaus', 'sesf435', 89564, 7000, 25657),
('saumya', 'pandey', 'fvfg4354t', 245789, 3000, 435667),
('riya', 'singh', '445fgh', 34678, 6000, 3456778),
('samta', 'sudiksha', '2334gffg', 325678, 5900, 34567),
('divyanshu', 'mishra', '445hghhg', 546787, 4500, 435678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
