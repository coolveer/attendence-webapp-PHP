-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 07:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `ano` int(11) NOT NULL,
  `sno` varchar(255) DEFAULT NULL,
  `sbno` varchar(255) DEFAULT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`ano`, `sno`, `sbno`, `sem`) VALUES
(1, '1', '1', ''),
(2, '2', '1', ''),
(3, '2', '1', ''),
(4, '1', '1', ''),
(5, '2', '1', ''),
(6, '2', '1', ''),
(7, '1', '1', ''),
(8, '2', '2', '4'),
(9, '1', '2', '4'),
(10, '2', '2', '4'),
(11, '1', '2', '4'),
(12, '2', '2', '4'),
(13, '2', '2', '4'),
(14, '1', '2', '4'),
(15, '2', '2', '4'),
(16, '1', '2', '4'),
(17, '3', '6', ''),
(18, '1', '6', ''),
(19, '1', '', '4'),
(20, '1', '6', '4'),
(21, '3', '6', '4');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mno` int(11) NOT NULL,
  `sno` varchar(255) DEFAULT NULL,
  `sbno` varchar(255) DEFAULT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `sbname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mno`, `sno`, `sbno`, `marks`, `sbname`, `sem`) VALUES
(5, '2', '2', '33', '', ''),
(6, '1', '2', '49', '', '4'),
(7, '1', '7', '45', '', '2'),
(8, '3', '7', '34', '', ''),
(9, '3', '6', '45', '', ''),
(10, '1', '6', '11', '', '3'),
(11, '2', '1', '49', '', ''),
(12, '1', '1', '49', '', '4'),
(13, '2', '5', '33', '', ''),
(14, '1', '5', '48', '', '2'),
(15, '1', '6', '34', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `pno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `rno` varchar(255) DEFAULT NULL,
  `mno` varchar(255) DEFAULT NULL,
  `sep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pno`, `name`, `email`, `pwd`, `rno`, `mno`, `sep`) VALUES
(2, 'usha singh', 'coolveer.singh906@gmail.com', '123456', '216202', '7668480864', '2');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `rno` int(11) NOT NULL,
  `sno` varchar(255) DEFAULT NULL,
  `sbno` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `sbname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`rno`, `sno`, `sbno`, `remarks`, `sbname`, `sem`) VALUES
(1, '1', '1', 'he is not attentive in the classes', '', '4'),
(2, '1', '6', 'hope so', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `sem` varchar(255) DEFAULT NULL,
  `rno` varchar(255) DEFAULT NULL,
  `mno` varchar(255) DEFAULT NULL,
  `strm` varchar(255) DEFAULT NULL,
  `sep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `email`, `pwd`, `sem`, `rno`, `mno`, `strm`, `sep`) VALUES
(1, 'veer', '1@gmail.com', '123456', '4', '216202', '08604879756', 'cse', '0'),
(2, 'done', '2@gmail.com', '123456', '4', '216203', '08604879756', 'cse', '0'),
(3, 'dfgfgh', '3@gmail.com', '123456', '4', '216204', '08604879756', 'cse', '0');

-- --------------------------------------------------------

--
-- Table structure for table `studentsub`
--

CREATE TABLE `studentsub` (
  `ssno` int(11) NOT NULL,
  `sno` varchar(255) DEFAULT NULL,
  `sbno` varchar(255) DEFAULT NULL,
  `sem` varchar(255) NOT NULL,
  `rno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsub`
--

INSERT INTO `studentsub` (`ssno`, `sno`, `sbno`, `sem`, `rno`) VALUES
(1, '1', '7', '2', '216202'),
(2, '2', '1', '', ''),
(3, '2', '2', '', ''),
(4, '2', '5', '', ''),
(5, '3', '4', '', ''),
(6, '3', '6', '4', '216204'),
(7, '3', '7', '', ''),
(8, '1', '1', '3', ''),
(9, '1', '2', '4', '216202'),
(10, '1', '4', '4', '216202'),
(11, '1', '5', '3', ''),
(12, '1', '6', '4', '216202'),
(13, '1', '7', '3', ''),
(14, '1', '8', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sbno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nc` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sbno`, `name`, `nc`, `alt`, `sem`) VALUES
(1, 'Digital image prossesing', '4', 'a', ''),
(2, 'AI', '5', 'a', ''),
(4, 'Database Management System', '0', 'a', ''),
(5, 'Oprating System', '0', 'a', ''),
(6, 'data structure', '1', 'a', ''),
(7, 'algorithms', '0', 'a', ''),
(8, 'final year project', '0', 'na', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `dep` varchar(255) DEFAULT NULL,
  `mno` varchar(255) DEFAULT NULL,
  `f` varchar(255) DEFAULT NULL,
  `sep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tno`, `name`, `email`, `pwd`, `dep`, `mno`, `f`, `sep`) VALUES
(1, 'Satyan Upadhya', '1@gmail.com', '123456', 'electrical', '8452635148', 'c', '1'),
(2, 'veer', 'vishaly310@gmail.com', '123456', '221002', '08604879756', 'c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachersub`
--

CREATE TABLE `teachersub` (
  `tsno` int(11) NOT NULL,
  `tno` varchar(255) DEFAULT NULL,
  `sbno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachersub`
--

INSERT INTO `teachersub` (`tsno`, `tno`, `sbno`) VALUES
(1, '1', '2'),
(2, '1', '7'),
(3, '1', '6'),
(4, '1', '1'),
(5, '1', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mno`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `studentsub`
--
ALTER TABLE `studentsub`
  ADD PRIMARY KEY (`ssno`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sbno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tno`);

--
-- Indexes for table `teachersub`
--
ALTER TABLE `teachersub`
  ADD PRIMARY KEY (`tsno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentsub`
--
ALTER TABLE `studentsub`
  MODIFY `ssno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sbno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachersub`
--
ALTER TABLE `teachersub`
  MODIFY `tsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
