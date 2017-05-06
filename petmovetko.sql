-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 03:01 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petmovetko`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(11) NOT NULL,
  `custLastName` varchar(45) NOT NULL,
  `custFirstName` varchar(45) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custPassword` varchar(16) NOT NULL,
  `custAdd` varchar(45) NOT NULL,
  `custNum` int(11) NOT NULL,
  `custPhoto` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqID` int(11) NOT NULL,
  `reqStatus` varchar(45) NOT NULL,
  `reqDets` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviewrating`
--

CREATE TABLE `reviewrating` (
  `rr_ID` int(11) NOT NULL,
  `revDets` varchar(45) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servID` int(11) NOT NULL,
  `servName` varchar(45) NOT NULL,
  `servDesc` varchar(45) NOT NULL,
  `servPrice` int(11) NOT NULL,
  `servImage` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `spID` int(11) NOT NULL,
  `spUsername` varchar(45) NOT NULL,
  `spLastName` varchar(45) NOT NULL,
  `spFirstName` varchar(45) NOT NULL,
  `spEmail` varchar(45) NOT NULL,
  `spPassword` varchar(16) NOT NULL,
  `spAdd` varchar(45) NOT NULL,
  `spNum` int(11) NOT NULL,
  `spPet` varchar(20) NOT NULL,
  `spZip` int(5) NOT NULL,
  `spLastLogged` date NOT NULL,
  `spStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssp`
--

CREATE TABLE `ssp` (
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_ID` int(11) NOT NULL,
  `transStatus` varchar(45) NOT NULL,
  `transDate` date NOT NULL,
  `timeStart` varchar(45) NOT NULL,
  `timeIn` varchar(45) NOT NULL,
  `payment` int(11) NOT NULL,
  `payStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`),
  ADD KEY `rr_ID_idx` (`custID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqID`);

--
-- Indexes for table `reviewrating`
--
ALTER TABLE `reviewrating`
  ADD PRIMARY KEY (`rr_ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`servID`),
  ADD UNIQUE KEY `servID_UNIQUE` (`servID`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`spID`);

--
-- Indexes for table `ssp`
--
ALTER TABLE `ssp`
  ADD PRIMARY KEY (`servID`,`spID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `servID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer.reqID` FOREIGN KEY (`custID`) REFERENCES `request` (`reqID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `customer.servID` FOREIGN KEY (`custID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE;

--
-- Constraints for table `reviewrating`
--
ALTER TABLE `reviewrating`
  ADD CONSTRAINT `revrat.custID` FOREIGN KEY (`rr_ID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `revrat.spID` FOREIGN KEY (`rr_ID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `service.custID` FOREIGN KEY (`servID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `service.spID` FOREIGN KEY (`servID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `service.transID` FOREIGN KEY (`servID`) REFERENCES `transaction` (`trans_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD CONSTRAINT `servprov.reqID` FOREIGN KEY (`spID`) REFERENCES `request` (`reqID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `servprov.servID` FOREIGN KEY (`spID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `servprov.transID` FOREIGN KEY (`spID`) REFERENCES `transaction` (`trans_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `ssp`
--
ALTER TABLE `ssp`
  ADD CONSTRAINT `ssp.servID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ssp.spID` FOREIGN KEY (`servID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction.custID` FOREIGN KEY (`trans_ID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction.reqID` FOREIGN KEY (`trans_ID`) REFERENCES `request` (`reqID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction.servID` FOREIGN KEY (`trans_ID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction.spID` FOREIGN KEY (`trans_ID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
