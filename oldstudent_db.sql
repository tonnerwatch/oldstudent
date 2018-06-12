-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 03:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oldstudent_db`
--
CREATE DATABASE IF NOT EXISTS `oldstudent_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oldstudent_db`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_admin`
--

CREATE TABLE `detail_admin` (
  `ADMIN_ID` tinyint(4) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `ID_CARD` varchar(13) NOT NULL,
  `BIRTHDAY` varchar(20) NOT NULL,
  `ADDRESS` text NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `IMAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_admin`
--

INSERT INTO `detail_admin` (`ADMIN_ID`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `ID_CARD`, `BIRTHDAY`, `ADDRESS`, `PHONE`, `EMAIL`, `IMAGE`) VALUES
(2, 'sadfsadf', 'asdfsadf', 'ชาย', '1546545151515', '11/20/2016', 'sadfasdfsd', '0846515151', 'sadfsafd@gmail.com', 'img/1546545151515.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_student`
--

CREATE TABLE `detail_student` (
  `ID` tinyint(4) NOT NULL,
  `GENERATION` int(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `NICKNAME` varchar(20) NOT NULL,
  `BIRTHDAY` varchar(20) NOT NULL,
  `ID_CARD` varchar(13) NOT NULL,
  `JHSYEAR` varchar(4) NOT NULL,
  `JHSNAME` text NOT NULL,
  `SHSYEAR` varchar(4) NOT NULL,
  `SHSNAME` text NOT NULL,
  `COLLEGEYEAR` varchar(4) NOT NULL,
  `COLLEGENAME` text NOT NULL,
  `ADDRESSHOME` text NOT NULL,
  `ADDRESSWORK` text NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `LINE` varchar(20) NOT NULL,
  `FACEBOOK` varchar(100) NOT NULL,
  `IMAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_student`
--

INSERT INTO `detail_student` (`ID`, `GENERATION`, `YEAR`, `FIRSTNAME`, `LASTNAME`, `NICKNAME`, `BIRTHDAY`, `ID_CARD`, `JHSYEAR`, `JHSNAME`, `SHSYEAR`, `SHSNAME`, `COLLEGEYEAR`, `COLLEGENAME`, `ADDRESSHOME`, `ADDRESSWORK`, `PHONE`, `EMAIL`, `LINE`, `FACEBOOK`, `IMAGE`) VALUES
(6, 1, 2559, 'วัชริส', 'พรหมทอง', 'เจมส์', '07/01/1993', '1800900134462', '2550', 'โรงเรียนวัดคลองสวน', '2551', 'โรงเรียนพณิชยการทุ่งสง', '2560', 'มหาวิทยาลัยธุรกิจบัณฑิตย์', '451/122 ม.2 ต.บ้านคลองสวน อ.พระสมุทรเจดีย์ จ.สมุทรปราการ 10290', '451/122 ม.2 ต.บ้านคลองสวน อ.พระสมุทรเจดีย์ จ.สมุทรปราการ 10290', '0619802021', 'wachcharis_p@outlook', 'guitarjane', 'wachcharis', 'old/1800900134462.jpg'),
(7, 2, 2558, 'วัชรากร', 'พรหมทอง', 'เจมส์', '11/01/2016', '1515151515111', '', '', '', '', '', '', 'asasasasas', 'asasasasas', '0619802021', 'wachcharis_p@outlook', 'guitarjane', 'wachcharis', 'old/1515151515111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `ID_CARD` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`USERNAME`, `PASSWORD`, `ID_CARD`) VALUES
('admin1', '123456789', '1546545151515');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_admin`
--
ALTER TABLE `detail_admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `detail_student`
--
ALTER TABLE `detail_student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_admin`
--
ALTER TABLE `detail_admin`
  MODIFY `ADMIN_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_student`
--
ALTER TABLE `detail_student`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
