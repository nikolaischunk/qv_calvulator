-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2020 at 03:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qv_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `eFK`
--

CREATE TABLE `eFK` (
  `ID` bigint(20) NOT NULL,
  `EnglishMark` double DEFAULT NULL,
  `NWMark` double DEFAULT NULL,
  `MathMark` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `IPA`
--

CREATE TABLE `IPA` (
  `Id` bigint(20) NOT NULL,
  `Mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester`
--

CREATE TABLE `Semester` (
  `ID` bigint(20) NOT NULL,
  `fk_Semester1` bigint(20) NOT NULL,
  `fk_Semester2` bigint(20) NOT NULL,
  `fk_Semester3` bigint(20) NOT NULL,
  `fk_Semester4` bigint(20) NOT NULL,
  `fk_Semester5` bigint(20) NOT NULL,
  `fk_Semester6` bigint(20) NOT NULL,
  `fk_Semester7` bigint(20) NOT NULL,
  `fk_Semester8` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester1`
--

CREATE TABLE `Semester1` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester2`
--

CREATE TABLE `Semester2` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester3`
--

CREATE TABLE `Semester3` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester4`
--

CREATE TABLE `Semester4` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester5`
--

CREATE TABLE `Semester5` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester6`
--

CREATE TABLE `Semester6` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester7`
--

CREATE TABLE `Semester7` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Semester8`
--

CREATE TABLE `Semester8` (
  `ID` bigint(20) NOT NULL,
  `AvgMarkABU` double DEFAULT NULL,
  `Mark_eFK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` bigint(20) NOT NULL,
  `Firstname` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `fk_Semester` bigint(20) NOT NULL,
  `fk_IPA` bigint(20) NOT NULL,
  `fk_UEK` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TBZModule`
--

CREATE TABLE `TBZModule` (
  `ModulName` int(11) NOT NULL,
  `Mark` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `UEK`
--

CREATE TABLE `UEK` (
  `UEKName` int(11) NOT NULL,
  `Mark` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eFK`
--
ALTER TABLE `eFK`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `IPA`
--
ALTER TABLE `IPA`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Semester`
--
ALTER TABLE `Semester`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester1`
--
ALTER TABLE `Semester1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester2`
--
ALTER TABLE `Semester2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester3`
--
ALTER TABLE `Semester3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester4`
--
ALTER TABLE `Semester4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester5`
--
ALTER TABLE `Semester5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester6`
--
ALTER TABLE `Semester6`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester7`
--
ALTER TABLE `Semester7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Semester8`
--
ALTER TABLE `Semester8`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `TBZModule`
--
ALTER TABLE `TBZModule`
  ADD PRIMARY KEY (`ModulName`);

--
-- Indexes for table `UEK`
--
ALTER TABLE `UEK`
  ADD PRIMARY KEY (`UEKName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eFK`
--
ALTER TABLE `eFK`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `IPA`
--
ALTER TABLE `IPA`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester`
--
ALTER TABLE `Semester`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester1`
--
ALTER TABLE `Semester1`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester2`
--
ALTER TABLE `Semester2`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester3`
--
ALTER TABLE `Semester3`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester4`
--
ALTER TABLE `Semester4`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester5`
--
ALTER TABLE `Semester5`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester6`
--
ALTER TABLE `Semester6`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester7`
--
ALTER TABLE `Semester7`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Semester8`
--
ALTER TABLE `Semester8`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
