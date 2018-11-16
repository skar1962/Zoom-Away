-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: caravansites
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
-- Table structure for table `siteaddress`
--

DROP TABLE IF EXISTS `siteaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteaddress` (
  `siteid` int(10) NOT NULL,
  `add1` varchar(30) DEFAULT NULL,
  `add2` varchar(30) DEFAULT NULL,
  `add3` varchar(30) DEFAULT NULL,
  `town` varchar(30) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `bingurl` varchar(200) DEFAULT NULL,
  `bingmapimage` varchar(45) DEFAULT NULL,
  `googleurl` varchar(300) DEFAULT NULL,
  `directions` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`siteid`),
  UNIQUE KEY `siteid_UNIQUE` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteaddress`
--

LOCK TABLES `siteaddress` WRITE;
/*!40000 ALTER TABLE `siteaddress` DISABLE KEYS */;
INSERT INTO `siteaddress` VALUES (1,'Lenacre Road',NULL,'Whitfield','Dover','CT16 3HL','https://www.bing.com/maps?osid=024f95c7-a528-428e-b333-8ac5f493d408&cp=51.16438~1.283879&lvl=16&v=2&sV=2&form=S00027','./images/1_location.jpg','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.991449283298!2d1.285339415909432!3d51.16394704357726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47deba99bacc5815%3A0x8ffd7fc63d24d4c1!2sLenacre+Ln%2C+Whitfield%2C+Dover+CT16+3HL!5e0!3m2!1sen!2suk!4v1542319155317','Turn left off the A2 (Canterbury - Dover) at Whitfield roundabout onto Sandwich Road (signposted Whitfield Sandwich Road); in 0.75 mile turn sharp left into Forge Lane; in 320 metres turn right to farmhouse. Follow signs to site.'),(2,'Landview Cottage','Main Road','Shatterling','Canterbury','CT11 1DY','https://www.bing.com/maps?osid=d4f4e8da-f780-4e8b-814b-b446620679fe&cp=51.20622~1.32751&lvl=11&v=2&sV=2&form=S00027','./images/2_location.jpg','https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4722.282922861166!2d1.23841648105733!3d51.27857315485741!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1492099045485','Turn left off the A257 (Canterbury to Sandwich) 1 mile past the signpost to Preston junction. <br> Site entrance is immediately before Frog and Orange Public House. '),(3,'Aldborough Road North',' Ilford',NULL,'Essex','IG2 7TD ','https://www.bing.com/maps?osid=6e173a92-7b52-4d4f-aeb1-f990272296b8&cp=51.585739~0.099036&lvl=16&style=s&v=2&sV=2&form=S00027','./images/3_location.jpg','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.0256753546823!2d0.10113721592113638!3d51.58609281276717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a41aff9314a1%3A0x6b7a6b5e6e80a15b!2sAldborough+Hall+Farm%2C+Ilford+IG2+7TD!5e0!3m2!1sen!2suk!4v1542366267380','A12 towards Newbury Park, Romford; 0.5m past Newbury Park Underground Station at traffic lights turn left into Aldborough Road North; in 0.5 mile turn right past Miller and Carter Restaurant into the farm entrance. Site is on the left through arch; call at farm house.');
/*!40000 ALTER TABLE `siteaddress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sitefacilities`
--

DROP TABLE IF EXISTS `sitefacilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sitefacilities` (
  `EHU` varchar(30) DEFAULT NULL,
  `units_accepted` varchar(30) DEFAULT NULL,
  `drinking_water` varchar(30) DEFAULT NULL,
  `waste_water` varchar(30) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL,
  `pitch_type` varchar(30) DEFAULT NULL,
  `siteid` int(10) NOT NULL,
  PRIMARY KEY (`siteid`),
  UNIQUE KEY `siteid_UNIQUE` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sitefacilities`
--

LOCK TABLES `sitefacilities` WRITE;
/*!40000 ALTER TABLE `sitefacilities` DISABLE KEYS */;
INSERT INTO `sitefacilities` VALUES ('5 pitches have 16 amp supply','Caravans Only','One tap','Dispose in hedgerows','Easy Access from Main road','Grass',2),('7 pitches with 10 amp','Caravans and Motorhomes','Each pitch has a tap','Drain at pitch','Narrow enterence','Grass and Hard standing',1),('No EHU','Caravans and Tents','One tap in field','Dispose in hedgerows','Tight turning','Grass',3);
/*!40000 ALTER TABLE `sitefacilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siteimages`
--

DROP TABLE IF EXISTS `siteimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteimages` (
  `siteid` int(10) NOT NULL,
  `main` enum('T','F') DEFAULT 'F',
  `folder` varchar(45) DEFAULT NULL,
  `picture_name` varchar(45) DEFAULT NULL,
  `picture_desc` varchar(45) DEFAULT NULL,
  `picture_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`picture_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteimages`
--

LOCK TABLES `siteimages` WRITE;
/*!40000 ALTER TABLE `siteimages` DISABLE KEYS */;
INSERT INTO `siteimages` VALUES (1,'F','./images/','1_lenacre2.jpg','Pitch',10),(1,'T','./images/','1_lenacre1.jpg','Main',9),(2,'F','./images/','2_caravansitepic2.jpg','Pitch',8),(3,'F','./images/','3_aldborough5.jpg','House',7),(3,'F','./images/','3_aldborough4.jpg','Field',6),(3,'F','./images/','3_aldborough3.jpg','Barn',5),(2,'F','./images/','2_caravansitepic4.jpg','View 2',3),(2,'T','./images/','2_caravansitepic1.jpg','Main',2),(2,'F','./images/','2_caravansitepic3.jpg','View 1',1),(3,'T','./images/','3_aldborough.jpg','Main',4),(1,'F','./images/','1_lenacre3.jpg','Field',11);
/*!40000 ALTER TABLE `siteimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siteindex`
--

DROP TABLE IF EXISTS `siteindex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteindex` (
  `shortname` varchar(10) NOT NULL,
  `longname` varchar(40) NOT NULL,
  `siteid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteindex`
--

LOCK TABLES `siteindex` WRITE;
/*!40000 ALTER TABLE `siteindex` DISABLE KEYS */;
INSERT INTO `siteindex` VALUES ('Lenacre','Lenacre Court Farm',1),('shatter','Shatterlings CL',2),('Aldborough','Aldborough Hall Farm',3);
/*!40000 ALTER TABLE `siteindex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siteinfo`
--

DROP TABLE IF EXISTS `siteinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteinfo` (
  `main_info` varchar(1000) NOT NULL,
  `hilight_text` varchar(100) NOT NULL,
  `aside_text` varchar(500) NOT NULL,
  `siteid` int(10) NOT NULL,
  UNIQUE KEY `siteid` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteinfo`
--

LOCK TABLES `siteinfo` WRITE;
/*!40000 ALTER TABLE `siteinfo` DISABLE KEYS */;
INSERT INTO `siteinfo` VALUES ('The Caravan Club CL is a quiet site set on a family run smallholding (seasonal vegetables available to buy) in the midst of hop gardens and orchards. The site itself is a 0.25 acre flat lawned field with electric hook ups and space for awnings. \n\nThe drive is wide and easily accessible. Adults, children and pets are all welcome. \n\nThere is a country pub next door (sorry no food) and garden centre within half a mile, and Wingham Wildlife Park only a mile away. Canterbury offers supermarkets, shopping, restaurants, three park and rides and river trips as well as a magnificent cathedral and lots of historic places. Day trips to France by boat are only 30 minutes or by tunnel 45 minutes away. \n','Don\'t forget your passports! ','The site is an excellent base for exploring the surrounding area with coarse fishing 3 miles away, pay and play golf 6 miles and top class golf courses within easy reach. There are 4 castles within 30 mins. Public transport with bus stop nearby is available direct to Canterbury, Deal and Sandwich, change at Sandwich for Dover and the Isle of Thanet, ie Margate, Ramsgate etc. all with sandy beaches. The new Turner centre is now open in Margate. ',2),('Second Site - Lenacre','Useful for ferries','Open all year!',1),('Our site is on a farm with plenty of room, geese, peacocks and lots of greenery. We are the nearest site to London but still set within fields. However we are within the LEZ - please look on TFL website for details.','Easy access to London and Essex whilst surrounded by countryside','We are within walking distance (20 minutes) to Newbury Park station on the Central Line of the London underground so have easy access to London whilst also only a short drive from the Essex countryside. There are supermarkets within a mile of the site, and a pub/restaurant right next door.',3);
/*!40000 ALTER TABLE `siteinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-16 15:56:51
