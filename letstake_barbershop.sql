-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2021 at 12:33 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letstake_barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `bdate` datetime NOT NULL,
  `services` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `email`, `bdate`, `services`, `dob`, `status`, `fullname`, `mobile`, `comment`) VALUES
(1, 'dhannesh@gmail.com', '2021-05-04 19:48:10', 'Cream & Shampoo, Beard Shaving, ', '2021-05-03 18:17:58', 1, 'Dhanesh Kumar', '08439516563', ''),
(2, 'dhannesh@gmail.com', '2021-05-12 20:45:00', 'Cream & Shampoo, Haircuting, Beard Shaving, ', '2021-05-03 18:21:36', 2, 'Dhanesh Kumar', '08439516563', ''),
(3, 'dhannesh@gmail.com', '2021-05-10 10:12:00', 'Beard Shaving, ', '2021-05-03 20:04:44', 0, 'Dhanesh Kumar', '08439516563', 'Dettol shaving cream should be use'),
(4, 'dhanesh.psit@gmail.com', '2021-05-04 10:30:00', 'Cream & Shampoo, Haircuting, ', '2021-05-03 22:43:43', 0, 'Praharsh Shree', '7017777155', 'No Bleach');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `srno` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(250) NOT NULL,
  `dom` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`srno`, `cname`, `email`, `mobile`, `message`, `dom`) VALUES
(1, 'Dhanesh', 'dhannesh@gmail.com', '7017777155', 'this is just testing of message', '2021-05-03'),
(2, 'Dr. Snow', 'drsnow@gmail.com', '+6123456125', 'Hi, I want to ask about kids hair cutting.', '2021-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `pswd` varchar(256) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `srno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `pswd`, `fullname`, `mobile`, `active`, `srno`) VALUES
('dhannesh@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'Dhanesh Kumar', '08439516563', 1, 1),
('admin@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'Admin', '+61 8439516365', 1, 2),
('dhanesh.psit@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'Praharsh Shree', '7017777155', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
