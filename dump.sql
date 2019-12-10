-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: equine
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Current Database: `equine`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `equine` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `equine`;

--
-- Table structure for table `Forelimb`
--

DROP TABLE IF EXISTS `Forelimb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Forelimb` (
  `vdl` int(11) DEFAULT NULL,
  `rood` int(11) DEFAULT NULL,
  `leg` varchar(255) DEFAULT NULL,
  `norm` varchar(255) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `distalradius` varchar(255) DEFAULT NULL,
  `distalradiusdm` varchar(255) DEFAULT NULL,
  `distalradiusdl` varchar(255) DEFAULT NULL,
  `distalradiusp` varchar(255) DEFAULT NULL,
  `radiocarpal` varchar(255) DEFAULT NULL,
  `radiocarpalpm` varchar(255) DEFAULT NULL,
  `radiocarpalpl` varchar(255) DEFAULT NULL,
  `radiocarpaldm` varchar(255) DEFAULT NULL,
  `radiocarpaldl` varchar(255) DEFAULT NULL,
  `mcarpal3` varchar(255) DEFAULT NULL,
  `mcarpal3p` varchar(255) DEFAULT NULL,
  `mcarpal3pd` varchar(255) DEFAULT NULL,
  `mcarpal3pp` varchar(255) DEFAULT NULL,
  `mcarpal3dia` varchar(255) DEFAULT NULL,
  `mcarpal3diad` varchar(255) DEFAULT NULL,
  `mcarpal3diap` varchar(255) DEFAULT NULL,
  `mcarpal3dis` varchar(255) DEFAULT NULL,
  `mcarpal3disdm` varchar(255) DEFAULT NULL,
  `mcarpal3disdl` varchar(255) DEFAULT NULL,
  `mcarpal3disdsr` varchar(255) DEFAULT NULL,
  `mcarpal3dispm` varchar(255) DEFAULT NULL,
  `mcarpal3displ` varchar(255) DEFAULT NULL,
  `mcarpal3dispsr` varchar(255) DEFAULT NULL,
  `medialaa` varchar(255) DEFAULT NULL,
  `medialana` varchar(255) DEFAULT NULL,
  `medialma` varchar(255) DEFAULT NULL,
  `medialmna` varchar(255) DEFAULT NULL,
  `medialba` varchar(255) DEFAULT NULL,
  `medialbna` varchar(255) DEFAULT NULL,
  `medialaxa` varchar(255) DEFAULT NULL,
  `medialaxana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Forelimb`
--

LOCK TABLES `Forelimb` WRITE;
/*!40000 ALTER TABLE `Forelimb` DISABLE KEYS */;
INSERT INTO `Forelimb` VALUES (123,126,'left-forelimb','yes','1998-01-16','bryce','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed','','Not-Assessed','Not-Assessed','Not-Assessed','Not-Assessed');
/*!40000 ALTER TABLE `Forelimb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Hindlimb`
--

DROP TABLE IF EXISTS `Hindlimb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Hindlimb` (
  `vdl` int(11) DEFAULT NULL,
  `rood` int(11) DEFAULT NULL,
  `leg` varchar(255) DEFAULT NULL,
  `norm` varchar(255) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `distaltibia` varchar(255) DEFAULT NULL,
  `distaltibiadm` varchar(255) DEFAULT NULL,
  `distaltibiadl` varchar(255) DEFAULT NULL,
  `distaltibiatp` varchar(255) DEFAULT NULL,
  `centraltarsal` varchar(255) DEFAULT NULL,
  `centraltarsald` varchar(255) DEFAULT NULL,
  `centraltarsalp` varchar(255) DEFAULT NULL,
  `centraltarsalpr` varchar(255) DEFAULT NULL,
  `centraltarsaldis` varchar(255) DEFAULT NULL,
  `metatarsal3` varchar(255) DEFAULT NULL,
  `metatarsal3p` varchar(255) DEFAULT NULL,
  `metatarsal3pd` varchar(255) DEFAULT NULL,
  `metatarsal3pp` varchar(255) DEFAULT NULL,
  `metatarsal3dia` varchar(255) DEFAULT NULL,
  `metatarsal3diad` varchar(255) DEFAULT NULL,
  `metatarsal3diap` varchar(255) DEFAULT NULL,
  `metatarsal3dis` varchar(255) DEFAULT NULL,
  `metatarsal3disdm` varchar(255) DEFAULT NULL,
  `metatarsal3disdl` varchar(255) DEFAULT NULL,
  `metatarsal3disdsr` varchar(255) DEFAULT NULL,
  `metatarsal3dispm` varchar(255) DEFAULT NULL,
  `metatarsal3displ` varchar(255) DEFAULT NULL,
  `metatarsal3dispsr` varchar(255) DEFAULT NULL,
  `medialsesamoidaa` varchar(255) DEFAULT NULL,
  `medialsesamoidana` varchar(255) DEFAULT NULL,
  `medialsesamoidma` varchar(255) DEFAULT NULL,
  `medialsesamoidmna` varchar(255) DEFAULT NULL,
  `medialsesamoidba` varchar(255) DEFAULT NULL,
  `medialsesamoidbna` varchar(255) DEFAULT NULL,
  `medialsesamoidaxa` varchar(255) DEFAULT NULL,
  `medialsesamoidaxana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Hindlimb`
--

LOCK TABLES `Hindlimb` WRITE;
/*!40000 ALTER TABLE `Hindlimb` DISABLE KEYS */;
/*!40000 ALTER TABLE `Hindlimb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Horse`
--

DROP TABLE IF EXISTS `Horse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Horse` (
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `vdl` int(11) DEFAULT NULL,
  `rood` int(11) DEFAULT NULL,
  `outside` tinyint(1) DEFAULT NULL,
  `firstrace` tinyint(1) DEFAULT NULL,
  `racetrain` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Horse`
--

LOCK TABLES `Horse` WRITE;
/*!40000 ALTER TABLE `Horse` DISABLE KEYS */;
/*!40000 ALTER TABLE `Horse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Login`
--

DROP TABLE IF EXISTS `Login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Login` (
  `userid` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Login`
--

LOCK TABLES `Login` WRITE;
/*!40000 ALTER TABLE `Login` DISABLE KEYS */;
INSERT INTO `Login` VALUES ('brycekushner','password'),('Jrbi232',''),('jrb232','Password'),('cs405','cs405');
/*!40000 ALTER TABLE `Login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-09 21:56:29
