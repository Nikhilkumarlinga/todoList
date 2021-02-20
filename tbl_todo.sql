-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 08:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `taskId` int(11) NOT NULL,
  `taskName` varchar(200) NOT NULL,
  `currentStatus` int(10) NOT NULL,
  `isDeleted` int(2) NOT NULL,
  `createDateTime` datetime(6) NOT NULL,
  `modifiedDateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_todo`
--

INSERT INTO `tbl_todo` (`taskId`, `taskName`, `currentStatus`, `isDeleted`, `createDateTime`, `modifiedDateTime`) VALUES
(1, 'hi', 1, 0, '2021-02-20 12:42:47.000000', '2021-02-20 12:54:08.000000'),
(2, 'th', 2, 0, '2021-02-20 12:42:51.000000', '2021-02-20 12:57:18.000000'),
(3, 'dajvdskjvb', 3, 0, '2021-02-20 12:43:02.000000', '2021-02-20 12:57:19.000000'),
(4, 'dskjvbkjdsv', 2, 0, '2021-02-20 12:43:05.000000', '2021-02-20 12:57:38.000000'),
(5, 'vbdskjvbdskj', 3, 0, '2021-02-20 12:43:08.000000', '2021-02-20 12:57:37.000000'),
(6, 'test', 3, 0, '2021-02-20 12:50:25.000000', '2021-02-20 12:57:39.000000'),
(7, 'fbf', 3, 0, '2021-02-20 12:57:45.000000', '2021-02-20 12:57:47.000000'),
(8, 'ddggwe', 2, 0, '2021-02-20 12:57:49.000000', '2021-02-20 12:57:50.000000'),
(9, 'dvwrere', 2, 0, '2021-02-20 12:57:53.000000', '2021-02-20 12:57:54.000000'),
(10, 'rerhreh', 3, 0, '2021-02-20 12:57:57.000000', '2021-02-20 12:57:58.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`taskId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `taskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
