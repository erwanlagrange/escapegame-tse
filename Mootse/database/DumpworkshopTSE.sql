CREATE DATABASE  IF NOT EXISTS `workshop_tse_bibli` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `workshop_tse_bibli`;
-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: workshop_tse_bibli
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hour_start` varchar(45) NOT NULL,
  `hour_end` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,'9h30','11h30',1,'TD synthèse d\'image en Newsplex'),(2,'11h30','12h00',1,'Rendez-vous à l\'administration'),(3,'13h30','14h30',1,'Réunion avec les associations'),(4,'14h30','15h00',1,'Pause au foyer'),(5,'15h00','18h00',1,'TD théorie des organisations en Bat A'),(6,'9h30','11h30',2,'TD théorie des organisations en Bat A'),(7,'13h30','15h30',2,'TD synthèse d\'image en Newsplex'),(8,'15h30','16h00',2,'Rendez-vous à l\'administration'),(9,'16h30','17h30',2,'Réunion avec les associations'),(10,'17h30','18h00',2,'Pause au foyer'),(11,'9h00','9h30',3,'Pause au foyer'),(12,'9h30','11h30',3,'TD théorie des organisation en Bat A'),(13,'13h30','15h30',3,'TD synthèse d\'image en Newsplex'),(14,'15h30','16h00',3,'Rendez-vous à l\'administration'),(15,'16h30','17h30',3,'Réunion avec les associations'),(16,'10h30','11h30',4,'Réunion avec les associations'),(17,'11h30','12h30',4,'Pause au foyer'),(18,'12h30','15h30',4,'TD théorie des organisation en Bat A'),(19,'15h30','17h30',4,'TD synthèse d\'image en Newsplex'),(20,'17h30','18h00',4,'Rendez-vous à l\'administration'),(21,'10h00','10h30',5,'Rendez-vous à l\'administration'),(22,'10h30','11h30',5,'Réunion avec les associations'),(23,'11h30','13h00',5,'Pause au foyer'),(24,'13h00','16h00',5,'TD théorie des organisation en Bat A'),(25,'16h00','18h00',5,'TD synthèse d\'image en Newsplex');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'théo.tse1','ClidQc36g'),(2,'théo.tse2','wbfliWPy9'),(3,'théo.tse3','me4LA1Pgd'),(4,'théo.tse4','GmsCs2d1B'),(5,'théo.tse5','5EoR6elpqu');
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

-- Dump completed on 2019-03-22  8:07:05
