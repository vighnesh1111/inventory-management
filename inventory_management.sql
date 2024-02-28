-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 05:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory management`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeans`
--

CREATE TABLE `jeans` (
  `sr no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `prod` text NOT NULL,
  `image` text NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sr no` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sr no`, `fname`, `lname`, `username`, `email`, `password`, `dt`) VALUES
(1, 'vicky', 'ren', 'vicky', 'vicky@123.com', '12345678', '2023-12-26 13:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

CREATE TABLE `shirt` (
  `sr no` int(11) NOT NULL,
  `username` text NOT NULL,
  `prod` text NOT NULL,
  `image` text NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`sr no`, `username`, `prod`, `image`, `size`, `price`, `dt`) VALUES
(2, 'vicky', 'deep olive green', '1703579936deep olive green.jpg', 'large', 899, '2023-12-26 14:08:56'),
(3, 'vicky', 'vebnor men', '1703579970vebnor men.jpg', 'medium', 799, '2023-12-26 14:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `sr no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `prod` text NOT NULL,
  `image` text NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `sr no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `prod` text NOT NULL,
  `image` text NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tshirt`
--

INSERT INTO `tshirt` (`sr no`, `username`, `prod`, `image`, `size`, `price`, `dt`) VALUES
(1, 'vicky', 'tensorflow', '1703595438tensorflow.jpeg', 'medium', 699, '2023-12-26 18:27:18'),
(2, 'vicky', 'cosmic sense', '1703595580cosmic sense.jpeg', 'XL', 899, '2023-12-26 18:29:40'),
(3, 'vicky', 'ullash', '1703595617ullash.jpeg', 'large', 799, '2023-12-26 18:30:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeans`
--
ALTER TABLE `jeans`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`sr no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeans`
--
ALTER TABLE `jeans`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shirt`
--
ALTER TABLE `shirt`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
