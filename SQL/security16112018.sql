-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: security
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(50) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `forename` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `dateamended` datetime DEFAULT NULL,
  `lastloggedin` datetime DEFAULT NULL,
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('fred','derf','frederick','johnson',NULL,'2018-10-31 15:03:52','2018-10-31 15:03:52','2018-11-01 11:29:23'),('john','nhoj','jonathan','smith',NULL,'2018-10-31 15:03:52','2018-10-31 15:03:52',NULL),('kevin','jojo','kevin','johanson',NULL,'2018-10-31 15:03:52','2018-10-31 15:03:52','2018-10-31 14:57:58'),('simon','ss',NULL,NULL,'simon@yahoo.com',NULL,NULL,NULL),('mike','',NULL,NULL,'mike@j.com',NULL,NULL,NULL),('mikle','$2y$10$71rStiWocH97tCaKsceADuUqVbAixv/WzD6XXN1hXlmcvYoCEt1B6',NULL,NULL,'mikle@j.com',NULL,NULL,NULL),('john1','$2y$10$H.2sZmujqj9U8ajnNFZmnOc8YlovgLJJQOGG3bOLv5swnB5kTfASC',NULL,NULL,'john1@yahoo.com',NULL,NULL,'2018-11-02 17:53:39'),('jason','$2y$10$i5JhUkwY8HSArmj7Ck4HZOwKaUdr/m9TCLlAthrVFjw2VLVdNShAa',NULL,NULL,'jason@yahoo.com',NULL,NULL,NULL),('jason1','$2y$10$Y.4wCpWyMMHSIjO6QUoj1e2Fb9c7wdtV05o1X1AW5OU25JYumTq5i',NULL,NULL,'jason1@yahoo.com',NULL,NULL,NULL),('steve','$2y$10$g/nMx5qtYCljd6GLicWhU.FhMQq8kEFJJQsgsUHoiWRlQPmLV82rG',NULL,NULL,'steve@hotmail.com',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-16 16:13:40
