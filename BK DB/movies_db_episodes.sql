-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: movies_db
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `episodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(10) unsigned DEFAULT NULL,
  `release_date` datetime NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `season_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `episodes_season_id_foreign` (`season_id`),
  CONSTRAINT `episodes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodes`
--

LOCK TABLES `episodes` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `episodes` VALUES (1,NULL,NULL,'Winter Is Coming',1,'2011-01-01 00:00:00',7.3,1),(2,NULL,NULL,'The North Remembers',1,'2012-01-01 00:00:00',8.3,2),(3,NULL,NULL,'Valar Dohaeris',1,'2013-01-01 00:00:00',6.3,3),(4,NULL,NULL,'Two Swords',1,'2014-01-01 00:00:00',7.5,4),(5,NULL,NULL,'The Wars to Come',1,'2015-01-01 00:00:00',9.3,5),(6,NULL,NULL,'The Red Woman',1,'2016-01-01 00:00:00',7.7,6),(7,NULL,NULL,'Pilot',1,'2005-01-01 00:00:00',7.3,8),(8,NULL,NULL,'In My Time of Dying',1,'2006-01-01 00:00:00',8.3,9),(9,NULL,NULL,'The Magnificent Seven',1,'2007-01-01 00:00:00',6.3,10),(10,NULL,NULL,'Lazarus Rising',1,'2008-01-01 00:00:00',7.5,11),(11,NULL,NULL,'Sympathy for the Devil',1,'2009-01-01 00:00:00',9.3,12),(12,NULL,NULL,'Exile on Main St.',1,'2010-01-01 00:00:00',7.7,13),(13,NULL,NULL,'Meet the New Boss',1,'2011-01-01 00:00:00',7.3,14),(14,NULL,NULL,'We Need to Talk About Kevin',1,'2012-01-01 00:00:00',8.3,15),(15,NULL,NULL,'I Think Im Gonna Like It Here',1,'2013-01-01 00:00:00',6.3,16),(16,NULL,NULL,'A Very Special Supernatural Special',1,'2014-01-01 00:00:00',7.5,17),(17,NULL,NULL,'Out of the Darkness, Into the Fire',1,'2015-01-01 00:00:00',9.3,18),(18,NULL,NULL,'Days Gone Bye',1,'2010-01-01 00:00:00',7.3,20),(19,NULL,NULL,'What Lies Ahead',1,'2011-01-01 00:00:00',8.3,21),(20,NULL,NULL,'Seed',1,'2012-01-01 00:00:00',6.3,22),(21,NULL,NULL,'30 Days Without an Accident',1,'2013-01-01 00:00:00',7.5,23),(22,NULL,NULL,'No Sanctuary',1,'2014-01-01 00:00:00',9.3,24),(23,NULL,NULL,'First Time Again',1,'2015-01-01 00:00:00',7.7,25),(24,NULL,NULL,'Pilot',1,'2011-01-01 00:00:00',7.3,27),(25,NULL,NULL,'The Contingency',1,'2012-01-01 00:00:00',8.3,28),(26,NULL,NULL,'Liberty',1,'2013-01-01 00:00:00',6.3,29),(27,NULL,NULL,'Panopticon',1,'2015-01-01 00:00:00',7.5,30),(28,NULL,NULL,'B.S.O.D.',1,'2016-01-01 00:00:00',9.3,31),(29,NULL,NULL,'Pilot',1,'2005-01-01 00:00:00',7.3,32),(30,NULL,NULL,'The Bad Fish Paradigm',1,'2006-01-01 00:00:00',8.3,33),(31,NULL,NULL,'The Electric Can Opener Fluctuation',1,'2007-01-01 00:00:00',6.3,34),(32,NULL,NULL,'The Robotic Manipulation',1,'2008-01-01 00:00:00',7.5,35),(33,NULL,NULL,'The Skank Reflex Analysis',1,'2009-01-01 00:00:00',9.3,36),(34,NULL,NULL,'The Date Night Variable',1,'2010-01-01 00:00:00',7.7,37),(35,NULL,NULL,'The Hofstadter Insufficiency',1,'2011-01-01 00:00:00',7.3,38),(36,NULL,NULL,'The Locomotion Interruption',1,'2012-01-01 00:00:00',8.3,39),(37,NULL,NULL,'The Matrimonial Momentum',1,'2013-01-01 00:00:00',6.3,40),(38,NULL,NULL,'Pilot',1,'2009-01-01 00:00:00',7.3,42),(39,NULL,NULL,'Seven Thirty-Seven',1,'2010-01-01 00:00:00',8.3,43),(40,NULL,NULL,'No Más',1,'2011-01-01 00:00:00',6.3,44),(41,NULL,NULL,'Box Cutter',1,'2012-01-01 00:00:00',7.5,45),(42,NULL,NULL,'Live Free or Die',1,'2013-01-01 00:00:00',9.3,46),(43,NULL,NULL,'Madrigal',2,'2013-02-01 00:00:00',9.3,46),(44,NULL,NULL,'Hazard Pay',3,'2013-03-01 00:00:00',9.3,46),(45,NULL,NULL,'Fifty-One',4,'2013-04-01 00:00:00',9.3,46),(46,NULL,NULL,'Dead Freight',5,'2013-05-01 00:00:00',9.3,46),(47,NULL,NULL,'Buyout',6,'2013-06-01 00:00:00',9.3,46),(48,NULL,NULL,'Say My Name',7,'2013-06-01 00:00:00',9.3,46),(49,NULL,NULL,'Gliding Over All',8,'2013-07-01 00:00:00',9.3,46),(50,NULL,NULL,'Blood Money',9,'2013-07-01 00:00:00',9.3,46),(51,NULL,NULL,'Buried',10,'2013-07-01 00:00:00',9.3,46),(52,NULL,NULL,'Confessions',11,'2013-08-01 00:00:00',9.3,46),(53,NULL,NULL,'Rabid Dog',12,'2013-09-01 00:00:00',9.3,46),(54,NULL,NULL,'To hajiilee',13,'2013-10-01 00:00:00',9.3,46),(55,NULL,NULL,'Ozymandias',14,'2013-11-01 00:00:00',9.3,46),(56,NULL,NULL,'Granite State',15,'2013-12-01 00:00:00',9.3,46),(57,NULL,NULL,'Felina',16,'2013-12-01 00:00:00',9.3,46);
/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-06 14:50:52
