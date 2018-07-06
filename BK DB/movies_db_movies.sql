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
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rating` decimal(3,1) unsigned NOT NULL,
  `awards` int(10) unsigned NOT NULL DEFAULT '0',
  `release_date` datetime NOT NULL,
  `length` int(10) unsigned DEFAULT NULL,
  `genre_id` int(10) unsigned DEFAULT NULL,
  `poster` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movies_genre_id_foreign` (`genre_id`),
  CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,NULL,NULL,'Avatar',7.9,3,'2010-10-04 00:00:00',120,5,NULL),(2,NULL,NULL,'Titanic',7.7,11,'1997-09-04 00:00:00',320,3,NULL),(3,NULL,NULL,'La Guerra de las galaxias: Episodio VI',9.1,7,'2004-07-04 00:00:00',NULL,5,NULL),(4,NULL,NULL,'La Guerra de las galaxias: Episodio VII',9.0,6,'2003-11-04 00:00:00',180,5,NULL),(5,NULL,NULL,'Parque Jurasico',8.3,5,'1999-01-04 00:00:00',270,5,NULL),(6,NULL,NULL,'Harry Potter y las Reliquias de la Muerte - Parte 2',9.0,2,'2008-07-04 00:00:00',190,6,NULL),(7,NULL,NULL,'Transformers: el lado oscuro de la luna',0.9,1,'2005-07-04 00:00:00',NULL,5,NULL),(8,NULL,NULL,'Harry Potter y la piedra filosofal',10.0,1,'2008-04-04 00:00:00',120,8,NULL),(9,NULL,NULL,'Harry Potter y la cámara de los secretos',3.5,2,'2009-08-04 00:00:00',200,8,NULL),(10,NULL,NULL,'El rey león',9.1,3,'2000-02-04 00:00:00',NULL,10,NULL),(11,NULL,NULL,'Alicia en el país de las maravillas',5.7,2,'2008-07-04 00:00:00',120,NULL,NULL),(12,NULL,NULL,'Buscando a Nemo',8.3,2,'2000-07-04 00:00:00',110,7,NULL),(13,NULL,NULL,'Toy Story',6.1,0,'2008-03-04 00:00:00',150,7,NULL),(14,NULL,NULL,'Toy Story 2',3.2,2,'2003-04-04 00:00:00',120,7,NULL),(15,NULL,NULL,'La vida es bella',8.3,5,'1994-10-04 00:00:00',NULL,3,NULL),(16,NULL,NULL,'Mi pobre angelito',3.2,1,'1989-01-04 00:00:00',120,1,NULL),(17,NULL,NULL,'Intensamente',9.0,2,'2008-07-04 00:00:00',120,7,NULL),(18,NULL,NULL,'Carrozas de fuego',9.9,7,'1980-07-04 00:00:00',180,NULL,NULL),(19,NULL,NULL,'Big',7.3,2,'1988-02-04 00:00:00',130,8,NULL),(20,NULL,NULL,'I am Sam',9.0,4,'1999-03-04 00:00:00',130,3,NULL),(21,NULL,NULL,'Hotel Transylvania',7.1,1,'2012-05-04 00:00:00',90,10,NULL),(22,NULL,NULL,'La nueva peli',6.0,125,'2018-05-24 15:15:47',NULL,4,NULL),(23,NULL,NULL,'Peli sin id',7.4,4,'2018-05-24 15:24:27',122,6,NULL),(24,NULL,NULL,'Nueva Pelicula',22.0,2,'2000-09-13 00:00:00',120,1,NULL),(25,'2018-06-29 23:09:31','2018-06-29 23:09:31','Película Nueva',22.0,13,'2018-06-04 00:00:00',122,NULL,NULL),(26,'2018-06-29 23:11:53','2018-06-29 23:11:53','Película Nueva 2',22.0,13,'2017-03-04 00:00:00',122,NULL,NULL),(27,'2018-06-29 23:12:11','2018-06-29 23:12:11','Película Nueva 3',22.0,13,'2016-02-02 00:00:00',122,NULL,NULL),(28,'2018-06-29 23:14:14','2018-06-29 23:14:14','Película Nueva 6',22.0,13,'2017-03-03 00:00:00',122,NULL,NULL),(29,'2018-07-03 22:48:54','2018-07-03 22:48:54','Película Nueva 666',34.0,22,'2016-02-03 00:00:00',300,1,NULL),(30,'2018-07-05 23:05:40','2018-07-05 23:05:40','La Mejor Peli',33.0,13,'2018-02-02 00:00:00',122,1,NULL),(31,'2018-07-05 23:06:25','2018-07-05 23:06:25','La Mejor Peli 2',33.0,13,'2016-03-01 00:00:00',122,NULL,'/storage/poster/aixSRXEKV56vEhmn40eMrYO8qCoUQ6XqScuWvcHT.jpeg'),(32,'2018-07-05 23:22:38','2018-07-05 23:22:38','La Mejor Peli 3',21.0,34,'2016-03-01 00:00:00',122,1,'/storage/poster/bjfnhZILJ3IXAnDu682Wrkc0XlnitItBHGmnvad4.jpeg');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
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
