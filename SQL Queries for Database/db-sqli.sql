-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 08:23 AM
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
-- Database: `sqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `address`, `password`) VALUES
(1, 'Rachel', 'Green', 'rachel.green@gmail.com', 'London, UK', 'heheheheh'),
(2, 'Zinedine', 'Zidane', 'zz@gmail.com', 'London, UK', 'f25a2fc72690b780b2a14e140ef6a9e0'),
(3, 'Roger', 'Rabbit.', 'roger@gmail.com', 'London, UK', 'ab4f63f9ac65152575886860dde480a1'),
(4, 'Bob', 'Anderson', 'bob@gmail.com', 'London, UK', 'd0763edaa9d9bd2a9516280e9044d885'),
(5, 'Basile', 'Boli', 'basile@gmail.com', 'London, UK', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(6, 'mohit', 'Raj', 'mohit.raj@tbt.com', 'California, USA', 'jh trcbsA3iusu382382803939S0'),
(7, 'Robert', 'smith', 'robert.smith@tbt.com', 'California, USA', 'tdewdA3re382erf80fr9S'),
(8, 'Hela', 'Asgard', 'hela.asgard@tbt.com', 'Dubai, UAE', 'v6g5tr45tv444fc3828g3b39S'),
(9, 'Thor', 'Asgard', 'thor.asgard@tbt.com', 'Asgard, 9 Realem', '5rgdsd3r5su382385g8v39S0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
