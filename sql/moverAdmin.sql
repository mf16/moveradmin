CREATE DATABASE  IF NOT EXISTS `moverAdmin` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `moverAdmin`;
-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: moverAdmin
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `driversForJob`
--

DROP TABLE IF EXISTS `driversForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driversForJob` (
  `iddriversForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) NOT NULL DEFAULT '0',
  `driversid` int(11) DEFAULT '0',
  PRIMARY KEY (`iddriversForJob`),
  KEY `index2` (`jobid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driversForJob`
--

LOCK TABLES `driversForJob` WRITE;
/*!40000 ALTER TABLE `driversForJob` DISABLE KEYS */;
INSERT INTO `driversForJob` VALUES (10,1,1),(11,1,2),(13,10,1);
/*!40000 ALTER TABLE `driversForJob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeeEndorsements`
--

DROP TABLE IF EXISTS `employeeEndorsements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employeeEndorsements` (
  `idemployeeEndorsements` int(11) NOT NULL AUTO_INCREMENT,
  `employeeid` int(11) DEFAULT '0',
  `endorsement` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idemployeeEndorsements`),
  KEY `index2` (`employeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeeEndorsements`
--

LOCK TABLES `employeeEndorsements` WRITE;
/*!40000 ALTER TABLE `employeeEndorsements` DISABLE KEYS */;
INSERT INTO `employeeEndorsements` VALUES (65,1,'double/tripple'),(66,1,'hazmat');
/*!40000 ALTER TABLE `employeeEndorsements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `idemployees` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dailyRate` int(11) DEFAULT NULL,
  `cellPhone` varchar(10) DEFAULT NULL,
  `homePhone` varchar(10) DEFAULT NULL,
  `empSince` date DEFAULT NULL,
  `CID` varchar(45) DEFAULT NULL,
  `PVO` varchar(45) DEFAULT NULL,
  `drugScreened` tinyint(1) DEFAULT NULL,
  `screenedDate` date DEFAULT NULL,
  `canDrive` tinyint(1) DEFAULT NULL,
  `license` varchar(45) DEFAULT '0',
  `licenseState` varchar(45) DEFAULT NULL,
  `licenseClass` varchar(45) DEFAULT NULL,
  `bobtailExp` tinyint(1) DEFAULT NULL,
  `bobtailYears` int(11) DEFAULT NULL,
  `bobtailMiles` decimal(8,2) DEFAULT NULL,
  `tractorExp` tinyint(1) DEFAULT NULL,
  `tractorYears` int(11) DEFAULT NULL,
  `tractorMiles` decimal(8,2) DEFAULT NULL,
  `picURI` varchar(100) DEFAULT NULL,
  `skill` int(11) DEFAULT NULL,
  PRIMARY KEY (`idemployees`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Mitch','Mitchell','Facer','email@email.com','123 address',52,'1234567890','0987654321','2014-03-05','6','3',1,'2014-08-24',1,'51236','FL','B',1,232,1.00,1,1,3.00,'mitch.jpg',10),(2,NULL,'Tyler','Slater',NULL,NULL,52,'5555555555',NULL,'0000-00-00',NULL,NULL,NULL,NULL,1,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'tyler.jpg',7),(3,'Superman','Clark','Kent','savindawurld@gmail.com','555 Some Street, Earth',1000,'1234567890','','0000-00-00','','',0,'0000-00-00',0,'','AL','pick',1,233,11362.00,0,0,0.00,'superman.jpg',10);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `idequipment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `manufacid` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `make` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `mileage` decimal(8,2) DEFAULT '0.00',
  `length` int(11) DEFAULT NULL,
  `heightFt` int(11) DEFAULT NULL,
  `heightIn` int(11) DEFAULT NULL,
  `GVW` decimal(8,2) DEFAULT NULL,
  `rentOwn` varchar(45) DEFAULT NULL,
  `billable` tinyint(4) DEFAULT NULL,
  `equipped` tinyint(4) DEFAULT NULL,
  `isAvailable` tinyint(4) DEFAULT '1',
  `picURI` varchar(100) DEFAULT NULL,
  `damages` blob,
  `notes` blob,
  PRIMARY KEY (`idequipment`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES (47,'White Pickup Truck','3FM 48Q','Pickup Truck','GMC','K1500',1985,3256.23,8,6,7,3262.30,'own',1,1,1,'truck.jpg','Some rust','Diesel, make sure to warm up glow plugs first!'),(48,'Red Moving Lift','32sM9','other','RedMachine','Lift-o-Matic',1998,0.00,3,8,2,262.00,'own',0,0,0,'lift.jpg','no damages.','Be careful!'),(49,'Hippiemobile','PEA CE','van','VW','Type 2',1973,78000.00,14,8,3,2323.00,'own',0,0,1,'hippiemobile.jpg','','One love, man.');
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipmentForJob`
--

DROP TABLE IF EXISTS `equipmentForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipmentForJob` (
  `idequipmentForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` tinyint(4) DEFAULT '0',
  `equipmentid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idequipmentForJob`),
  KEY `index2` (`jobid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmentForJob`
--

LOCK TABLES `equipmentForJob` WRITE;
/*!40000 ALTER TABLE `equipmentForJob` DISABLE KEYS */;
INSERT INTO `equipmentForJob` VALUES (7,1,47),(8,10,48),(9,10,49);
/*!40000 ALTER TABLE `equipmentForJob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `idjobs` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `onsiteTime` time DEFAULT NULL,
  `notes` blob,
  `regNum` varchar(255) DEFAULT NULL,
  `shipperName` varchar(255) DEFAULT NULL,
  `shipperPhone` varchar(45) DEFAULT NULL,
  `altShipperName` varchar(255) DEFAULT NULL,
  `altPhone` varchar(45) DEFAULT NULL,
  `originAddress` varchar(255) DEFAULT NULL,
  `originShuttle` tinyint(1) DEFAULT NULL,
  `originInstructions` blob,
  `destinationAddress` varchar(255) DEFAULT NULL,
  `destinationShuttle` tinyint(1) DEFAULT NULL,
  `destinationInstructions` blob,
  `status` varchar(45) DEFAULT NULL,
  `confirmedBy` varchar(255) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `weightType` varchar(45) DEFAULT NULL,
  `vaultPackOrder` varchar(45) DEFAULT NULL,
  `shuttleTruckNumber` varchar(45) DEFAULT NULL,
  `insuranceChargesApply` tinyint(4) DEFAULT '0',
  `picURI` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idjobs`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'2014-08-25','12:00:00','16:45:00','driver ntoes hereasdf','regNum1245','shipperName Here','1234567890','alt shipper name','0987654321','1asdf23 provo street, someplace UT 84604',0,'Don\'t mess it up!','Salt Lake City, UT',1,'no, really.','Confirmed by CSR','confirmed by this dude','624','weight type.. wat?','valt pack order#135t','shuttletrucknumber?asdf',1,'house1.jpg'),(10,'2014-08-26','15:45:00','04:30:00','','','','','','','',0,'','Scotch Plains, NJ',0,'','Not confirmed','','6123','','','',0,'house3.jpg');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laborersForJob`
--

DROP TABLE IF EXISTS `laborersForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laborersForJob` (
  `idlaborersForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) DEFAULT '0',
  `laborersid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlaborersForJob`),
  KEY `index2` (`jobid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laborersForJob`
--

LOCK TABLES `laborersForJob` WRITE;
/*!40000 ALTER TABLE `laborersForJob` DISABLE KEYS */;
INSERT INTO `laborersForJob` VALUES (10,1,2),(11,1,3),(14,10,2),(15,10,3);
/*!40000 ALTER TABLE `laborersForJob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moveTypes`
--

DROP TABLE IF EXISTS `moveTypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moveTypes` (
  `idmoveTypes` int(11) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idmoveTypes`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moveTypes`
--

LOCK TABLES `moveTypes` WRITE;
/*!40000 ALTER TABLE `moveTypes` DISABLE KEYS */;
INSERT INTO `moveTypes` VALUES (1,'HHG-Atlas'),(2,'HHG-Intra'),(3,'O&I-Local'),(4,'O&I-Intra'),(5,'O&I-Interstate'),(6,'O&I-Move on Premises'),(7,'SP'),(8,'SmartMove'),(9,'Crate/Frgt'),(10,'INTL'),(11,'Other-See Driver/Crew/Scope Notes');
/*!40000 ALTER TABLE `moveTypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moveTypesForJob`
--

DROP TABLE IF EXISTS `moveTypesForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moveTypesForJob` (
  `idmoveTypesForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) DEFAULT '0',
  `moveTypesid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmoveTypesForJob`),
  KEY `index2` (`jobid`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moveTypesForJob`
--

LOCK TABLES `moveTypesForJob` WRITE;
/*!40000 ALTER TABLE `moveTypesForJob` DISABLE KEYS */;
INSERT INTO `moveTypesForJob` VALUES (76,1,3),(77,1,5),(78,1,9),(81,10,5),(82,10,7);
/*!40000 ALTER TABLE `moveTypesForJob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceTypes`
--

DROP TABLE IF EXISTS `serviceTypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceTypes` (
  `idserviceTypes` int(11) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idserviceTypes`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceTypes`
--

LOCK TABLES `serviceTypes` WRITE;
/*!40000 ALTER TABLE `serviceTypes` DISABLE KEYS */;
INSERT INTO `serviceTypes` VALUES (1,'Pack'),(2,'Crate/Freight'),(3,'Export Wrap'),(4,'Unpack'),(5,'Load'),(6,'Deliver'),(7,'Early Out'),(8,'Release'),(9,'Shuttle'),(10,'DOS'),(11,'SIT'),(12,'APU'),(13,'DPU'),(14,'Mat\'l Del'),(15,'Mat\'l P/U'),(16,'Spot Trailer'),(17,'Orig Svs'),(18,'Dest Svs'),(19,'Smart Move'),(20,'Air'),(21,'Surface'),(22,'Military/GSA'),(23,'Install (AMS)'),(24,'Install (3P)'),(25,'Rigging (3P)'),(26,'PC Dis/Rec (3P)'),(27,'Storage In'),(28,'Storage Perm'),(29,'Stage & Store'),(30,'Day 1 of 2'),(31,'Day 2 of 2'),(32,'Day 1 of 3'),(33,'Day 2 of 3'),(34,'Day 3 of 3'),(35,'Day 1 of 4'),(36,'Day 2 of 4'),(37,'Day 3 of 4'),(38,'Day 4 of 4'),(39,'Other - See Notes');
/*!40000 ALTER TABLE `serviceTypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceTypesForJob`
--

DROP TABLE IF EXISTS `serviceTypesForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceTypesForJob` (
  `idservicesForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) DEFAULT '0',
  `serviceTypesid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idservicesForJob`),
  KEY `index2` (`jobid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceTypesForJob`
--

LOCK TABLES `serviceTypesForJob` WRITE;
/*!40000 ALTER TABLE `serviceTypesForJob` DISABLE KEYS */;
INSERT INTO `serviceTypesForJob` VALUES (5,1,6),(6,1,8),(9,10,5),(10,10,6);
/*!40000 ALTER TABLE `serviceTypesForJob` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-27 14:54:22
