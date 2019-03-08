-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 01:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creativehandx`
--

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `freeId` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `oname` varchar(40) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `skills` varchar(400) NOT NULL,
  `license` tinyint(1) NOT NULL,
  `address` varchar(500) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `status` int(2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`freeId`, `fname`, `oname`, `username`, `email`, `password`, `gender`, `skills`, `license`, `address`, `descp`, `avatar`, `status`, `date_added`) VALUES
(2, 'Winston', 'Okatubo', 'shean', 'sheanwinston@gmail.com', '531c154c293dfa54ca8eb77046c68c1aad5eb1f8', 'Boss', 'ui design, full stack, ', 0, 'Flat 19 Chinda Estate, RSU main gate Port Harcourt Nigeria 500272', 'oboy awfa', '', 0, '2019-03-01 13:02:01'),
(3, 'Steven', 'Ryan', 'shean.winston', 'stevenryan931@gmail.com', '531c154c293dfa54ca8eb77046c68c1aad5eb1f8', 'Female', 'G-boy', 0, '500 elm street, Elm street', 'Any thing that is fun', '', 0, '2019-03-01 13:19:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`freeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `freeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
