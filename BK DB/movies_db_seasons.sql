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
-- Table structure for table `seasons`
--

DROP TABLE IF EXISTS `seasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seasons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(10) unsigned DEFAULT NULL,
  `release_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `serie_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seasons_serie_id_foreign` (`serie_id`),
  CONSTRAINT `seasons_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seasons`
--

LOCK TABLES `seasons` WRITE;
/*!40000 ALTER TABLE `seasons` DISABLE KEYS */;
INSERT INTO `seasons` VALUES (1,NULL,NULL,'Primer Temporada',1,'2011-01-01 00:00:00','2011-01-01 00:00:00',1),(2,NULL,NULL,'Segunda Temporada',2,'2012-01-01 00:00:00','2012-01-01 00:00:00',1),(3,NULL,NULL,'Tercer Temporada',3,'2013-01-01 00:00:00','2013-01-01 00:00:00',1),(4,NULL,NULL,'Cuarta Temporada',4,'2014-01-01 00:00:00','2014-01-01 00:00:00',1),(5,NULL,NULL,'Quinta Temporada',5,'2015-01-01 00:00:00','2015-01-01 00:00:00',1),(6,NULL,NULL,'Sexta Temporada',6,'2016-01-01 00:00:00','2016-01-01 00:00:00',1),(7,NULL,NULL,'Septima Temporada',7,'2017-01-01 00:00:00','2017-01-01 00:00:00',1),(8,NULL,NULL,'Primer Temporada',1,'2005-01-01 00:00:00','2006-01-01 00:00:00',2),(9,NULL,NULL,'Segunda Temporada',2,'2006-01-01 00:00:00','2007-01-01 00:00:00',2),(10,NULL,NULL,'Tercer Temporada',3,'2007-01-01 00:00:00','2008-01-01 00:00:00',2),(11,NULL,NULL,'Cuarta Temporada',4,'2008-01-01 00:00:00','2009-01-01 00:00:00',2),(12,NULL,NULL,'Quinta Temporada',5,'2009-01-01 00:00:00','2010-01-01 00:00:00',2),(13,NULL,NULL,'Sexta Temporada',6,'2010-01-01 00:00:00','2011-01-01 00:00:00',2),(14,NULL,NULL,'Septima Temporada',7,'2011-01-01 00:00:00','2012-01-01 00:00:00',2),(15,NULL,NULL,'Octava Temporada',8,'2012-01-01 00:00:00','2013-01-01 00:00:00',2),(16,NULL,NULL,'Novena Temporada',9,'2013-01-01 00:00:00','2014-01-01 00:00:00',2),(17,NULL,NULL,'Decima Temporada',10,'2014-01-01 00:00:00','2015-01-01 00:00:00',2),(18,NULL,NULL,'Undecima Temporada',11,'2015-01-01 00:00:00','2016-01-01 00:00:00',2),(19,NULL,NULL,'Duodecima Temporada',12,'2016-01-01 00:00:00','2017-01-01 00:00:00',2),(20,NULL,NULL,'Primer Temporada',1,'2010-01-01 00:00:00','2010-01-01 00:00:00',3),(21,NULL,NULL,'Segunda Temporada',2,'2011-01-01 00:00:00','2012-01-01 00:00:00',3),(22,NULL,NULL,'Tercer Temporada',3,'2012-01-01 00:00:00','2013-01-01 00:00:00',3),(23,NULL,NULL,'Cuarta Temporada',4,'2013-01-01 00:00:00','2014-01-01 00:00:00',3),(24,NULL,NULL,'Quinta Temporada',5,'2014-01-01 00:00:00','2015-01-01 00:00:00',3),(25,NULL,NULL,'Sexta Temporada',6,'2015-01-01 00:00:00','2016-01-01 00:00:00',3),(26,NULL,NULL,'Septima Temporada',7,'2016-01-01 00:00:00','2017-01-01 00:00:00',3),(27,NULL,NULL,'Primer Temporada',1,'2011-01-01 00:00:00','2012-01-01 00:00:00',4),(28,NULL,NULL,'Segunda Temporada',2,'2012-01-01 00:00:00','2013-01-01 00:00:00',4),(29,NULL,NULL,'Tercer Temporada',3,'2013-01-01 00:00:00','2014-01-01 00:00:00',4),(30,NULL,NULL,'Cuarta Temporada',4,'2014-01-01 00:00:00','2015-01-01 00:00:00',4),(31,NULL,NULL,'Quinta Temporada',5,'2015-01-01 00:00:00','2016-01-01 00:00:00',4),(32,NULL,NULL,'Primer Temporada',1,'2006-01-01 00:00:00','2008-01-01 00:00:00',5),(33,NULL,NULL,'Segunda Temporada',2,'2008-01-01 00:00:00','2009-01-01 00:00:00',5),(34,NULL,NULL,'Tercer Temporada',3,'2009-01-01 00:00:00','2010-01-01 00:00:00',5),(35,NULL,NULL,'Cuarta Temporada',4,'2010-01-01 00:00:00','2011-01-01 00:00:00',5),(36,NULL,NULL,'Quinta Temporada',5,'2011-01-01 00:00:00','2012-01-01 00:00:00',5),(37,NULL,NULL,'Sexta Temporada',6,'2012-01-01 00:00:00','2013-01-01 00:00:00',5),(38,NULL,NULL,'Septima Temporada',7,'2013-01-01 00:00:00','2014-01-01 00:00:00',5),(39,NULL,NULL,'Octava Temporada',8,'2014-01-01 00:00:00','2015-01-01 00:00:00',5),(40,NULL,NULL,'Novena Temporada',9,'2015-01-01 00:00:00','2016-01-01 00:00:00',5),(41,NULL,NULL,'Decima Temporada',10,'2016-01-01 00:00:00','2017-01-01 00:00:00',5),(42,NULL,NULL,'Primer Temporada',1,'2008-01-01 00:00:00','2008-01-01 00:00:00',6),(43,NULL,NULL,'Segunda Temporada',2,'2009-01-01 00:00:00','2009-01-01 00:00:00',6),(44,NULL,NULL,'Tercer Temporada',3,'2010-01-01 00:00:00','2010-01-01 00:00:00',6),(45,NULL,NULL,'Cuarta Temporada',4,'2011-01-01 00:00:00','2011-01-01 00:00:00',6),(46,NULL,NULL,'Quinta Temporada',5,'2012-01-01 00:00:00','2012-01-01 00:00:00',6);
/*!40000 ALTER TABLE `seasons` ENABLE KEYS */;
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
