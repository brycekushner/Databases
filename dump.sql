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
  `medialaxana` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Forelimb`
--

LOCK TABLES `Forelimb` WRITE;
/*!40000 ALTER TABLE `Forelimb` DISABLE KEYS */;
INSERT INTO `Forelimb` VALUES (1234,1234,'left-forelimb','no','2019-12-10','Fracture','Fracture','Not-Assessed','Not-Assessed','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Kushner'),(9876,9876,'right-forelimb','yes','2019-12-08','Within-Normal-Limits','Lysis','Lysis','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Sclerosis','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','','Lysis','Lysis','Lysis','Within-Normal-Limits','Lydon'),(1111,1111,'right-forelimb','yes','2019-12-02','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','','Sclerosis','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','','Lysis','Lysis','Fracture','Fracture','Lysis','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Fracture','Within-Normal-Limits','Within-Normal-Limits','Kushner'),(2222,2222,'left-forelimb','yes','2019-12-05','Within-Normal-Limits','Within-Normal-Limits','Lysis','Lysis','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Fracture','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Lysis','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Kimmerer');
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
  `medialsesamoidaxana` varchar(255) DEFAULT NULL,
  `medialsesamoid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Hindlimb`
--

LOCK TABLES `Hindlimb` WRITE;
/*!40000 ALTER TABLE `Hindlimb` DISABLE KEYS */;
INSERT INTO `Hindlimb` VALUES (1234,1234,'left-hindlimb','no','2019-12-12','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Fracture','Fracture','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Lysis','Lysis','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Lysis','Fracture','Kushner'),(9876,9876,'left-hindlimb','yes','2019-12-08','Fracture','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Lysis','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Fracture','Lydon'),(1111,1111,'right-hindlimb','yes','2019-12-02','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Fracture','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Fracture','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Kushner'),(2222,2222,'left-hindlimb','yes','2019-12-04','Sclerosis','Sclerosis','Sclerosis','Sclerosis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Lysis','Within-Normal-Limits','Within-Normal-Limits','Within-Normal-Limits','Fracture','Kimmerer');
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
  `outside` varchar(255) DEFAULT NULL,
  `firstrace` tinyint(1) DEFAULT NULL,
  `racetrain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Horse`
--

LOCK TABLES `Horse` WRITE;
/*!40000 ALTER TABLE `Horse` DISABLE KEYS */;
INSERT INTO `Horse` VALUES ('Seabiscuit','2017-01-16','Thoroughbred','Male',1234,1234,'no',2,'yes'),('John Cena','2017-12-25','Arabian','Male',9876,9876,'yes',1,'yes'),('Lightning','2017-11-28','Quarter Horse','Male',1111,1111,'yes',2,'yes'),('Tom Brady','2018-01-30','Standardbred','Male',2222,2222,'no',0,'no');
/*!40000 ALTER TABLE `Horse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `HorseView`
--

DROP TABLE IF EXISTS `HorseView`;
/*!50001 DROP VIEW IF EXISTS `HorseView`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `HorseView` AS SELECT 
 1 AS `name`,
 1 AS `dob`,
 1 AS `breed`,
 1 AS `gender`,
 1 AS `vdl`,
 1 AS `rood`,
 1 AS `outside`,
 1 AS `firstrace`,
 1 AS `racetrain`,
 1 AS `ForelimbLeg`,
 1 AS `ForelimbNorm`,
 1 AS `ForelimbDate`,
 1 AS `distalradius`,
 1 AS `distalradiusdm`,
 1 AS `distalradiusdl`,
 1 AS `distalradiusp`,
 1 AS `radiocarpal`,
 1 AS `radiocarpalpm`,
 1 AS `radiocarpalpl`,
 1 AS `radiocarpaldm`,
 1 AS `radiocarpaldl`,
 1 AS `mcarpal3`,
 1 AS `mcarpal3p`,
 1 AS `mcarpal3pd`,
 1 AS `mcarpal3pp`,
 1 AS `mcarpal3dia`,
 1 AS `mcarpal3diad`,
 1 AS `mcarpal3diap`,
 1 AS `mcarpal3dis`,
 1 AS `mcarpal3disdm`,
 1 AS `mcarpal3disdl`,
 1 AS `mcarpal3disdsr`,
 1 AS `mcarpal3dispm`,
 1 AS `mcarpal3displ`,
 1 AS `mcarpal3dispsr`,
 1 AS `medialaa`,
 1 AS `medialana`,
 1 AS `medialma`,
 1 AS `medialmna`,
 1 AS `medialba`,
 1 AS `medialbna`,
 1 AS `medialaxa`,
 1 AS `medialaxana`,
 1 AS `ForelimbDoc`,
 1 AS `HindlimbLeg`,
 1 AS `HindlimbNorm`,
 1 AS `HindlimbDate`,
 1 AS `distaltibia`,
 1 AS `distaltibiadm`,
 1 AS `distaltibiadl`,
 1 AS `distaltibiatp`,
 1 AS `centraltarsal`,
 1 AS `centraltarsald`,
 1 AS `centraltarsalp`,
 1 AS `centraltarsalpr`,
 1 AS `centraltarsaldis`,
 1 AS `metatarsal3`,
 1 AS `metatarsal3p`,
 1 AS `metatarsal3pd`,
 1 AS `metatarsal3pp`,
 1 AS `metatarsal3dia`,
 1 AS `metatarsal3diad`,
 1 AS `metatarsal3diap`,
 1 AS `metatarsal3dis`,
 1 AS `metatarsal3disdm`,
 1 AS `metatarsal3disdl`,
 1 AS `metatarsal3disdsr`,
 1 AS `metatarsal3dispm`,
 1 AS `metatarsal3displ`,
 1 AS `metatarsal3dispsr`,
 1 AS `medialsesamoidaa`,
 1 AS `medialsesamoidana`,
 1 AS `medialsesamoidma`,
 1 AS `medialsesamoidmna`,
 1 AS `medialsesamoidba`,
 1 AS `medialsesamoidbna`,
 1 AS `medialsesamoidaxa`,
 1 AS `medialsesamoidaxana`,
 1 AS `medialsesamoid`,
 1 AS `HindlimbDoc`*/;
SET character_set_client = @saved_cs_client;

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

--
-- Final view structure for view `HorseView`
--

/*!50001 DROP VIEW IF EXISTS `HorseView`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `HorseView` AS select `Horse`.`name` AS `name`,`Horse`.`dob` AS `dob`,`Horse`.`breed` AS `breed`,`Horse`.`gender` AS `gender`,`Horse`.`vdl` AS `vdl`,`Horse`.`rood` AS `rood`,`Horse`.`outside` AS `outside`,`Horse`.`firstrace` AS `firstrace`,`Horse`.`racetrain` AS `racetrain`,`Forelimb`.`leg` AS `ForelimbLeg`,`Forelimb`.`norm` AS `ForelimbNorm`,`Forelimb`.`doe` AS `ForelimbDate`,`Forelimb`.`distalradius` AS `distalradius`,`Forelimb`.`distalradiusdm` AS `distalradiusdm`,`Forelimb`.`distalradiusdl` AS `distalradiusdl`,`Forelimb`.`distalradiusp` AS `distalradiusp`,`Forelimb`.`radiocarpal` AS `radiocarpal`,`Forelimb`.`radiocarpalpm` AS `radiocarpalpm`,`Forelimb`.`radiocarpalpl` AS `radiocarpalpl`,`Forelimb`.`radiocarpaldm` AS `radiocarpaldm`,`Forelimb`.`radiocarpaldl` AS `radiocarpaldl`,`Forelimb`.`mcarpal3` AS `mcarpal3`,`Forelimb`.`mcarpal3p` AS `mcarpal3p`,`Forelimb`.`mcarpal3pd` AS `mcarpal3pd`,`Forelimb`.`mcarpal3pp` AS `mcarpal3pp`,`Forelimb`.`mcarpal3dia` AS `mcarpal3dia`,`Forelimb`.`mcarpal3diad` AS `mcarpal3diad`,`Forelimb`.`mcarpal3diap` AS `mcarpal3diap`,`Forelimb`.`mcarpal3dis` AS `mcarpal3dis`,`Forelimb`.`mcarpal3disdm` AS `mcarpal3disdm`,`Forelimb`.`mcarpal3disdl` AS `mcarpal3disdl`,`Forelimb`.`mcarpal3disdsr` AS `mcarpal3disdsr`,`Forelimb`.`mcarpal3dispm` AS `mcarpal3dispm`,`Forelimb`.`mcarpal3displ` AS `mcarpal3displ`,`Forelimb`.`mcarpal3dispsr` AS `mcarpal3dispsr`,`Forelimb`.`medialaa` AS `medialaa`,`Forelimb`.`medialana` AS `medialana`,`Forelimb`.`medialma` AS `medialma`,`Forelimb`.`medialmna` AS `medialmna`,`Forelimb`.`medialba` AS `medialba`,`Forelimb`.`medialbna` AS `medialbna`,`Forelimb`.`medialaxa` AS `medialaxa`,`Forelimb`.`medialaxana` AS `medialaxana`,`Forelimb`.`name` AS `ForelimbDoc`,`Hindlimb`.`leg` AS `HindlimbLeg`,`Hindlimb`.`norm` AS `HindlimbNorm`,`Hindlimb`.`doe` AS `HindlimbDate`,`Hindlimb`.`distaltibia` AS `distaltibia`,`Hindlimb`.`distaltibiadm` AS `distaltibiadm`,`Hindlimb`.`distaltibiadl` AS `distaltibiadl`,`Hindlimb`.`distaltibiatp` AS `distaltibiatp`,`Hindlimb`.`centraltarsal` AS `centraltarsal`,`Hindlimb`.`centraltarsald` AS `centraltarsald`,`Hindlimb`.`centraltarsalp` AS `centraltarsalp`,`Hindlimb`.`centraltarsalpr` AS `centraltarsalpr`,`Hindlimb`.`centraltarsaldis` AS `centraltarsaldis`,`Hindlimb`.`metatarsal3` AS `metatarsal3`,`Hindlimb`.`metatarsal3p` AS `metatarsal3p`,`Hindlimb`.`metatarsal3pd` AS `metatarsal3pd`,`Hindlimb`.`metatarsal3pp` AS `metatarsal3pp`,`Hindlimb`.`metatarsal3dia` AS `metatarsal3dia`,`Hindlimb`.`metatarsal3diad` AS `metatarsal3diad`,`Hindlimb`.`metatarsal3diap` AS `metatarsal3diap`,`Hindlimb`.`metatarsal3dis` AS `metatarsal3dis`,`Hindlimb`.`metatarsal3disdm` AS `metatarsal3disdm`,`Hindlimb`.`metatarsal3disdl` AS `metatarsal3disdl`,`Hindlimb`.`metatarsal3disdsr` AS `metatarsal3disdsr`,`Hindlimb`.`metatarsal3dispm` AS `metatarsal3dispm`,`Hindlimb`.`metatarsal3displ` AS `metatarsal3displ`,`Hindlimb`.`metatarsal3dispsr` AS `metatarsal3dispsr`,`Hindlimb`.`medialsesamoidaa` AS `medialsesamoidaa`,`Hindlimb`.`medialsesamoidana` AS `medialsesamoidana`,`Hindlimb`.`medialsesamoidma` AS `medialsesamoidma`,`Hindlimb`.`medialsesamoidmna` AS `medialsesamoidmna`,`Hindlimb`.`medialsesamoidba` AS `medialsesamoidba`,`Hindlimb`.`medialsesamoidbna` AS `medialsesamoidbna`,`Hindlimb`.`medialsesamoidaxa` AS `medialsesamoidaxa`,`Hindlimb`.`medialsesamoidaxana` AS `medialsesamoidaxana`,`Hindlimb`.`medialsesamoid` AS `medialsesamoid`,`Hindlimb`.`name` AS `HindlimbDoc` from ((`Horse` join `Forelimb` on((`Horse`.`vdl` = `Forelimb`.`vdl`))) join `Hindlimb` on((`Horse`.`vdl` = `Hindlimb`.`vdl`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-13  6:17:55
