-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 03:19 AM
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
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `compID` int(11) NOT NULL,
  `compMessage` varchar(100) NOT NULL,
  `compDate` datetime NOT NULL,
  `spID` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `complainer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `custZip` varchar(45) NOT NULL,
  `custNum` varchar(45) NOT NULL,
  `custAbout` varchar(100) DEFAULT NULL,
  `custPhoto` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `custLastName`, `custFirstName`, `custEmail`, `custPassword`, `custAdd`, `custZip`, `custNum`, `custAbout`, `custPhoto`) VALUES
(1, 'Caniba', 'Benj', 'bc@gmail.com', '1234', 'Aurora Hill, Baguio City', '', '09123456789', '', NULL),
(2, 'Bully', 'Big', 'bb@gmail.com', '1234', 'Loakan, Baguio City', '', '09121212121', '', NULL),
(3, 'Famorra', 'Halli', 'hallifamorra@gmail.com', '1234', 'Ambiong, Baguio City', '', '09987654321', '', NULL),
(4, 'GDL', 'Imo', 'imoimo@gmail.com', 'imo', 'Aurora Hill', '2600', '09123456789', NULL, NULL),
(5, 'vbhjkl', 'nmll', 'vbjkl@nmnm.com', 'hgrfds', 'ujyhtgrfd', '2600', '6543276543222', NULL, NULL),
(6, 'sfhsgd', 'htgrf', 'ehrsr@gmail.com', 'grerw', 'rgeragg', '2600', '2132143506', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petlist`
--

CREATE TABLE `petlist` (
  `petID` int(11) NOT NULL,
  `type` enum('dog','cat') DEFAULT NULL,
  `breed` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petlist`
--

INSERT INTO `petlist` (`petID`, `type`, `breed`) VALUES
(1, 'dog', 'Shih Tzu'),
(2, 'dog', 'Bulldog'),
(3, 'dog', 'Labrador');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `owner` int(11) NOT NULL,
  `pet` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petowner`
--

INSERT INTO `petowner` (`owner`, `pet`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqID` int(11) NOT NULL,
  `reqStatus` varchar(45) NOT NULL,
  `custId` int(11) NOT NULL,
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL
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
  `spNum` varchar(45) NOT NULL,
  `spPet` enum('dog','cat','both') NOT NULL,
  `spZip` int(5) NOT NULL,
  `spLastLogged` date DEFAULT NULL,
  `spStatus` enum('active','not active') NOT NULL,
  `spServices` varchar(45) NOT NULL,
  `spDay` varchar(10) DEFAULT NULL,
  `spTime` varchar(45) DEFAULT NULL,
  `spReqStatus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`spID`, `spUsername`, `spLastName`, `spFirstName`, `spEmail`, `spPassword`, `spAdd`, `spNum`, `spPet`, `spZip`, `spLastLogged`, `spStatus`, `spServices`, `spDay`, `spTime`, `spReqStatus`) VALUES
(1, 'sp101', 'Kilma', 'Dona', 'dk@gmail.com', '1234', 'A. Bonifacio St., Baguio City', '09090912345', 'dog', 2600, NULL, 'active', 'grooming', 'mwf', '10:00:00', ''),
(2, 'nerimae', 'Halos', 'Neri ', 'nerimaechalos@gmail.com', 'nerimae', 'New Lucban', '09175855137', 'dog', 2600, NULL, 'active', 'Training,Sitting', NULL, NULL, 'acc'),
(3, 'asjnas asn', 'asdeubbas', 'kasdjandn', 'asjdie@adnskac.ada', 'asdasidenda', 'aosdamand', '12354664', 'dog', 1234, NULL, 'active', 'Training,Grooming', NULL, NULL, 'acc'),
(4, 'imogdl', 'GDL', 'Imogen', 'imogdl@gmail.com', 'imogdl', 'Aurora Hill', '09123456789', 'dog', 2600, NULL, 'active', 'Training,Grooming,Vet', NULL, NULL, 'acc'),
(5, 'rgjfawehi', 'WRYHQRY', 'tenewrh', 'DGNFF@eherg.com', 'asg9feoy', 'ndkjgfhweiyfh', '10927491221', 'dog', 137129, NULL, 'active', 'Training,Vet', NULL, NULL, 'acc'),
(6, 'qt4wyte', 'lkjhg', 'kjhgfds', 'hnfxgrd@trjyr.rtyr', '66rtwe', 'fjjngfsv', '709843', 'dog', 43645, NULL, 'active', 'Training,Vet', NULL, NULL, 'acc');

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
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`compID`),
  ADD UNIQUE KEY `compID_UNIQUE` (`compID`),
  ADD KEY `sp_fk_idx` (`spID`),
  ADD KEY `cust_fk_idx` (`custID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`),
  ADD KEY `rr_ID_idx` (`custID`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petlist`
--
ALTER TABLE `petlist`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `petowner`
--
ALTER TABLE `petowner`
  ADD PRIMARY KEY (`owner`,`pet`),
  ADD KEY `pet_fk_idx` (`pet`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqID`),
  ADD KEY `c_fk_idx` (`custId`),
  ADD KEY `serv_fk_idx` (`servID`),
  ADD KEY `sp_fk_idx` (`spID`);

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
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `compID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `comp_cust_fk` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comp_sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `c_fk` FOREIGN KEY (`custId`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `serv_fk` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviewrating`
--
ALTER TABLE `reviewrating`
  ADD CONSTRAINT `revrat.custID` FOREIGN KEY (`rr_ID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `revrat.spID` FOREIGN KEY (`rr_ID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE;

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
