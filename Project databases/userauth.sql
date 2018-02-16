-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 03:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdet`
--

CREATE TABLE IF NOT EXISTS `userdet` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `mobile` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `backup` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdet`
--

INSERT INTO `userdet` (`fname`, `lname`, `mobile`, `username`, `password`, `backup`) VALUES
('Sanveg', 'Rane', 2147483647, 'Sanny', '1knoBava', 'sanveg@gmail.co'),
('Karan', 'Kadakia', 2147483647, 'KaranWt', '2noBava', 'karan@gmail.com'),
('Kushal', 'Gosar', 2147483647, 'Kruskal', '3noBava', 'kushal@gmail.co'),
('Akshar', 'Panchal', 2147483647, 'Aksar', '4noBava', 'aksar@gmail.com'),
('Rushabh', 'Shah', 2147483647, 'RushabhS', '6noBava', 'rs@gmail.com'),
('Rushabh', 'Shah', 2147483647, 'RushabhSuee', '10noBava', 'rse@gmail.com'),
('Dhiraj', 'Uchil', 2147483647, 'Duchil', '16noBava', 'ducil@gmail.com'),
('Priyank', 'Shah', 987865687, 'PriyankS', '15nobava', 'ps@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
