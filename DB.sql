-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 09:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonators`
--

CREATE TABLE `blooddonators` (
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobno` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `bgroup` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonators`
--

INSERT INTO `blooddonators` (`name`, `sex`, `age`, `district`, `city`, `mobno`, `state`, `email`, `bgroup`) VALUES
('Aditya Pal', 'M', 'ww5y', 'Khurdha', 'Kolkata', '8902009274', 'yf', '1234', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonators`
--
ALTER TABLE `blooddonators`
  ADD UNIQUE KEY `mobno` (`mobno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
