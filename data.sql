-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(65) NOT NULL,
  `affiliation` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pword`, `affiliation`, `photo`) VALUES
(1, 'Juan Dela Cruz', 'admin@gmail.com', '$2y$10$Uq8znSVfYUBAiRa83taR/e6KIDHL0dPdLIqbsbQunQrQF/TbRtJse', 'Government', '164960799090017135762530536ba54e');

-- --------------------------------------------------------

--
-- Table structure for table `tblinformation`
--

CREATE TABLE `tblinformation` (
  `EmployeeID` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Middlename` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `EmergencyContactName` varchar(200) NOT NULL,
  `EmergencyContactNumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `ProductSupplier` varchar(200) NOT NULL,
  `ProductExpiry` date NOT NULL,
  `SupplierNumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsalary`
--

CREATE TABLE `tblsalary` (
  `EmployeeID` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Middlename` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `EmployeeID` int(11) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `TimeIn` datetime NOT NULL,
  `TimeOut` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbltable`
--

CREATE TABLE `tbltable` (
  `TableID` int(11) NOT NULL,
  `tableOrder` varchar(200) NOT NULL,
  `OrderPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `Transaction_ID` int(11) NOT NULL,
  `TransactionTotal` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `ProductPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinformation`
--
ALTER TABLE `tblinformation`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `tblinventory`
--
ALTER TABLE `tblinventory`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblinformation`
--
ALTER TABLE `tblinformation`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblinventory`
--
ALTER TABLE `tblinventory`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
