-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 08:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theblackthreat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip_location`
--

CREATE TABLE `ip_location` (
  `username` varchar(30) NOT NULL,
  `sl_no` int(11) NOT NULL,
  `statusCode` varchar(300) DEFAULT NULL,
  `ipAddress` varchar(300) NOT NULL,
  `countryCode` varchar(300) DEFAULT NULL,
  `countryName` varchar(300) DEFAULT NULL,
  `regionName` varchar(300) DEFAULT NULL,
  `zipCode` varchar(300) DEFAULT NULL,
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  `timeZone` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_location`
--

INSERT INTO `ip_location` (`username`, `sl_no`, `statusCode`, `ipAddress`, `countryCode`, `countryName`, `regionName`, `zipCode`, `latitude`, `longitude`, `timeZone`) VALUES
('', 203, 'OK', '145.3.2.1', 'NL', 'Netherlands', 'Noord-Holland', '1000', '52.374', '4.88969', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `trn_date`) VALUES
('test', 'test', 'test@test.mail', '0000-00-00'),
('ravi', 'test', 'test@test.com', '2021-08-14'),
('haila', 'haila', 'haila@cc.com', '2021-08-14'),
('weiner', 'peter', 'wpeter@cc.com', '2021-08-14'),
('john', 'vishwa', 'john@test.com', '2021-08-14'),
('\'or\'=\'1', 'or\'\'<>/', 'hell@hh.com', '2021-08-14'),
('uuuu', 'uuuu', 'usbvf', '2021-08-14'),
('11111111', '222222222222', '@#$@{><', '2021-08-14'),
('uuu', 'uuub', 'scbcfv', '2021-08-14'),
('tcydvh', 'vhscuh', 'hvsdcsc', '2021-08-14'),
('hacvj', 'jhsdcjb', 'jhdc', '2021-08-14'),
('dc32', 'sdc', 'sc', '2021-08-14'),
('tttt', 'tttt', 'tt@dd.cc', '2021-08-14'),
('test1', 'test', 'test1@test.com', '2021-10-28'),
('test2', 'test', 'test2@test.com', '2021-10-28'),
('t```', 'test', 'test123@mm.com', '2021-10-28'),
('sdc', 'scd', 'scd', '2021-10-29'),
('ed', 'fe', 'vf', '2021-10-29'),
('wd', 'sc', 'dsvc', '2021-10-29'),
('rrrr', 'rrrr', 'rrrrr', '2021-10-29'),
('ss', 'ss', '', '2021-10-29'),
('f', 'f', 'f', '2021-10-29'),
('a', 'a', 'a', '2021-10-29'),
('we', 'w', 'w', '2021-10-29'),
('ijo', 'cgg', 'cgfv', '2021-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip_location`
--
ALTER TABLE `ip_location`
  ADD PRIMARY KEY (`ipAddress`) USING BTREE,
  ADD UNIQUE KEY `sl_no` (`sl_no`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip_location`
--
ALTER TABLE `ip_location`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
