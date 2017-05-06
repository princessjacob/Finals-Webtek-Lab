CREATE DATABASE  IF NOT EXISTS `petmovetko` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `petmovetko`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: petmovetko
-- ------------------------------------------------------
-- Server version	5.7.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custID` int(11) NOT NULL AUTO_INCREMENT,
  `custLastName` varchar(45) NOT NULL,
  `custFirstName` varchar(45) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custPassword` varchar(16) NOT NULL,
  `custAdd` varchar(45) NOT NULL,
  `custNum` varchar(45) NOT NULL,
  `custPhoto` mediumblob,
  PRIMARY KEY (`custID`),
  KEY `rr_ID_idx` (`custID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Caniba','Benj','bc@gmail.com','1234','Aurora Hill, Baguio City','09123456789',NULL),(2,'Bully','Big','bb@gmail.com','1234','Loakan, Baguio City','09121212121',NULL),(3,'Famorra','Halli','hallifamorra@gmail.com','1234','Ambiong, Baguio City','09987654321',NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petlist`
--

DROP TABLE IF EXISTS `petlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petlist` (
  `petID` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `breed` varchar(45) NOT NULL,
  PRIMARY KEY (`petID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petlist`
--

LOCK TABLES `petlist` WRITE;
/*!40000 ALTER TABLE `petlist` DISABLE KEYS */;
INSERT INTO `petlist` VALUES (1,'dog','Shih Tzu'),(2,'dog','Bulldog'),(3,'dog','Labrador');
/*!40000 ALTER TABLE `petlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petowner`
--

DROP TABLE IF EXISTS `petowner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petowner` (
  `owner` int(11) NOT NULL,
  `pet` int(11) NOT NULL,
  PRIMARY KEY (`owner`,`pet`),
  KEY `pet_fk_idx` (`pet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petowner`
--

LOCK TABLES `petowner` WRITE;
/*!40000 ALTER TABLE `petowner` DISABLE KEYS */;
INSERT INTO `petowner` VALUES (1,1),(2,1),(2,3),(3,2);
/*!40000 ALTER TABLE `petowner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `reqID` int(11) NOT NULL AUTO_INCREMENT,
  `reqStatus` varchar(45) NOT NULL,
  `reqDets` varchar(45) NOT NULL,
  PRIMARY KEY (`reqID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviewrating`
--

DROP TABLE IF EXISTS `reviewrating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviewrating` (
  `rr_ID` int(11) NOT NULL,
  `revDets` varchar(45) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rr_ID`),
  CONSTRAINT `revrat.custID` FOREIGN KEY (`rr_ID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  CONSTRAINT `revrat.spID` FOREIGN KEY (`rr_ID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviewrating`
--

LOCK TABLES `reviewrating` WRITE;
/*!40000 ALTER TABLE `reviewrating` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviewrating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_provider` (
  `spID` int(11) NOT NULL AUTO_INCREMENT,
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
  `spStatus` varchar(45) NOT NULL,
  `spServices` varchar(45) NOT NULL,
  `spDay` varchar(10) NOT NULL,
  `spTime` datetime NOT NULL,
  PRIMARY KEY (`spID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `servID` int(11) NOT NULL AUTO_INCREMENT,
  `servName` varchar(45) NOT NULL,
  `servPrice` int(11) NOT NULL,
  `servImage` mediumblob NOT NULL,
  PRIMARY KEY (`servID`),
  UNIQUE KEY `servID_UNIQUE` (`servID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp`
--

DROP TABLE IF EXISTS `ssp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp` (
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL,
  PRIMARY KEY (`servID`,`spID`),
  CONSTRAINT `ssp.servID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  CONSTRAINT `ssp.spID` FOREIGN KEY (`servID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp`
--

LOCK TABLES `ssp` WRITE;
/*!40000 ALTER TABLE `ssp` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `trans_ID` int(11) NOT NULL,
  `transStatus` varchar(45) NOT NULL,
  `transDate` date NOT NULL,
  `timeStart` varchar(45) NOT NULL,
  `timeIn` varchar(45) NOT NULL,
  `payment` int(11) NOT NULL,
  `payStatus` varchar(45) NOT NULL,
  PRIMARY KEY (`trans_ID`),
  CONSTRAINT `transaction.custID` FOREIGN KEY (`trans_ID`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  CONSTRAINT `transaction.reqID` FOREIGN KEY (`trans_ID`) REFERENCES `request` (`reqID`) ON UPDATE CASCADE,
  CONSTRAINT `transaction.servID` FOREIGN KEY (`trans_ID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  CONSTRAINT `transaction.spID` FOREIGN KEY (`trans_ID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-07  0:39:19
