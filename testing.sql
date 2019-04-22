-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2019 at 04:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `year` year(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` int(3) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` int(3) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `description`, `image`, `location`, `year`, `create_at`, `create_by`, `update_at`, `update_by`, `startDate`, `endDate`) VALUES
(1, 'ค่าย SWE ไหวป่ะ1', 'ลากเลือดแน่นอน อิอิ', 'assets/img/test1.jpg', '0', 2019, '2019-04-22 10:40:27', 57, '0000-00-00 00:00:00', 57, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ค่าย SWE ไหวป่ะ2', 'ลากเลือดแน่นอน อิอิ', 'assets/img/test2.jpg', '0', 2019, '2019-04-22 10:40:31', 57, '0000-00-00 00:00:00', 57, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ค่าย SWE ไหวป่ะ3', 'ลากเลือดแน่นอน อิอิ', 'assets/img/test3.jpg', '0', 2019, '2019-04-22 10:40:35', 57, '0000-00-00 00:00:00', 57, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ID` int(3) NOT NULL,
  `studentID` varchar(10) NOT NULL,
  `studentName` text NOT NULL,
  `year` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ID`, `studentID`, `studentName`, `year`, `email`, `tel`, `image`) VALUES
(41, '57140980', 'ชัชชาติ สิทธิพันธุ์', 4, 'jeeraphat.wi@gmai.com', '0800200060', ''),
(42, '57119935', 'สุดารัตน์ เกยุราพันธุ์', 3, 'jeeraphat.wi@gmail.com', '0923519779', ''),
(43, '57140860', 'จาตุรนต์ ฉายแสง', 2, 'jeeraphat.wi@gmail.com', '0638416777', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `year` year(4) NOT NULL,
  `sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`year`, `sector`) VALUES
(2018, 1),
(2019, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
