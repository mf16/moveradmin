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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `idemployees` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `dailyRate` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `CDL` tinyint(4) DEFAULT '0',
  `license` tinyint(4) DEFAULT '0',
  `empSince` date DEFAULT NULL,
  `picURI` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idemployees`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeesForJob`
--

DROP TABLE IF EXISTS `employeesForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employeesForJob` (
  `idemployeeConfirmation` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) DEFAULT NULL,
  `empid` int(11) DEFAULT NULL,
  `confirmed` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`idemployeeConfirmation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeesForJob`
--

LOCK TABLES `employeesForJob` WRITE;
/*!40000 ALTER TABLE `employeesForJob` DISABLE KEYS */;
/*!40000 ALTER TABLE `employeesForJob` ENABLE KEYS */;
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
  `type` varchar(45) DEFAULT NULL,
  `propertyType` varchar(45) DEFAULT NULL,
  `mileage` int(11) DEFAULT '0',
  `picURI` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idequipment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
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
  `jobid` tinyint(4) DEFAULT NULL,
  `equipmentid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idequipmentForJob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmentForJob`
--

LOCK TABLES `equipmentForJob` WRITE;
/*!40000 ALTER TABLE `equipmentForJob` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipmentForJob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `idJobs` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `shipperCompany` varchar(45) DEFAULT NULL,
  `originAddress` varchar(255) DEFAULT NULL,
  `originCity` varchar(45) DEFAULT NULL,
  `originState` varchar(45) DEFAULT NULL,
  `originZip` int(11) DEFAULT NULL,
  `destinationAddress` varchar(255) DEFAULT NULL,
  `destinationCity` varchar(45) DEFAULT NULL,
  `destinationState` varchar(45) DEFAULT NULL,
  `destinationZip` int(11) DEFAULT NULL,
  `moveType` varchar(45) DEFAULT NULL,
  `shipperPhone` varchar(45) DEFAULT NULL,
  `vaultPackOrder` varchar(45) DEFAULT NULL,
  `PVOid` varchar(45) DEFAULT NULL,
  `notes` blob,
  `weight` varchar(45) DEFAULT NULL,
  `weightType` varchar(45) DEFAULT NULL,
  `deliveryInstructions` blob,
  `jobDuration` int(11) DEFAULT '1',
  `insuranceChargesApply` tinyint(4) DEFAULT '0',
  `shuttleTruckNumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idJobs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceTypes`
--

LOCK TABLES `serviceTypes` WRITE;
/*!40000 ALTER TABLE `serviceTypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `serviceTypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicesForJob`
--

DROP TABLE IF EXISTS `servicesForJob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicesForJob` (
  `idservicesForJob` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) DEFAULT NULL,
  `serviceid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idservicesForJob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicesForJob`
--

LOCK TABLES `servicesForJob` WRITE;
/*!40000 ALTER TABLE `servicesForJob` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicesForJob` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-04  1:09:57
