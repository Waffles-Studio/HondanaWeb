
USE `bd_hondanaweb`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_hondanaweb
-- ------------------------------------------------------
-- Server version	8.0.29

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `title_book` varchar(200) DEFAULT NULL,
  `genre_book` varchar(200) DEFAULT NULL,
  `editorial_book` varchar(200) DEFAULT NULL,
  `author_book` varchar(200) DEFAULT NULL
) 
;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES ('Don Quijote de la Mancha','Ficción','Juventud ','Miguel de Cervantes Saavedra');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;


CREATE TABLE `roles` (
  `RoleID` int NOT NULL AUTO_INCREMENT,
  `RoleDescription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`RoleID`)
) 
;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admini'),(2,'User');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;


CREATE TABLE `users` (
  `Id_User` int NOT NULL AUTO_INCREMENT,
  `Name_User` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL,
  `UserRole` int NOT NULL,
  PRIMARY KEY (`Id_User`),
  KEY `users_ibfk_1` (`UserRole`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UserRole`) REFERENCES `roles` (`RoleID`)
) 
;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'BrianBa3','admin@Hondana.net','admin',1);
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

-- Dump completed on 2022-06-12  1:52:30
