CREATE DATABASE  IF NOT EXISTS `paws4adoption` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `paws4adoption`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: paws4adoption
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `adminUserId` int unsigned NOT NULL,
  PRIMARY KEY (`adminUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoption_animals`
--

DROP TABLE IF EXISTS `adoption_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoption_animals` (
  `adoption_animal_id` int unsigned NOT NULL,
  `is_on_fat` bit(1) DEFAULT NULL,
  `organization_id` int unsigned NOT NULL,
  `associated_user_id` int unsigned NOT NULL,
  `adoptionDate` date DEFAULT NULL,
  `adopter_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`adoption_animal_id`),
  KEY `fk_organization_id_idx` (`organization_id`),
  KEY `fk_associated_user_id_idx` (`associated_user_id`),
  KEY `fk_adopter_id_idx` (`adopter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoption_animals`
--

LOCK TABLES `adoption_animals` WRITE;
/*!40000 ALTER TABLE `adoption_animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `adoption_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoptions`
--

DROP TABLE IF EXISTS `adoptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoptions` (
  `adoption_id` int unsigned NOT NULL AUTO_INCREMENT,
  `motivation` text NOT NULL,
  `adoption_date` date DEFAULT NULL,
  `adoption_animal_id` int unsigned NOT NULL,
  `adopter_id` int unsigned NOT NULL,
  PRIMARY KEY (`adoption_id`),
  KEY `fk_adopter_id_idx` (`adopter_id`),
  KEY `fk_adoption_animal_id_idx` (`adoption_animal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoptions`
--

LOCK TABLES `adoptions` WRITE;
/*!40000 ALTER TABLE `adoptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `adoptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animals`
--

DROP TABLE IF EXISTS `animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animals` (
  `animal_id` int unsigned NOT NULL AUTO_INCREMENT,
  `chipId` varchar(15) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(45) DEFAULT NULL,
  `animalscol` text,
  `specie_id` int unsigned NOT NULL,
  `breed_id` int unsigned NOT NULL,
  `fur_length` int unsigned NOT NULL,
  `fur_color` int unsigned NOT NULL,
  `eye_color` int unsigned NOT NULL,
  `size` int unsigned NOT NULL,
  PRIMARY KEY (`animal_id`),
  KEY `fk_specie_id_idx` (`specie_id`),
  KEY `fk_breed_id_idx` (`breed_id`),
  KEY `fk_fur_length_id_idx` (`fur_length`),
  KEY `fk_fur_color_id_idx` (`fur_color`),
  KEY `fk_eye_color_id_idx` (`eye_color`),
  KEY `fk_size_id_idx` (`size`),
  CONSTRAINT `fk_breed_id` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`breed_id`),
  CONSTRAINT `fk_eye_color_id` FOREIGN KEY (`eye_color`) REFERENCES `eye_color` (`eye_color_id`),
  CONSTRAINT `fk_fur_color_id` FOREIGN KEY (`fur_color`) REFERENCES `fur_color` (`fur_color_id`),
  CONSTRAINT `fk_fur_length_id` FOREIGN KEY (`fur_length`) REFERENCES `fur_length` (`fur_length_id`),
  CONSTRAINT `fk_size_id` FOREIGN KEY (`size`) REFERENCES `size` (`size_id`),
  CONSTRAINT `fk_specie_id` FOREIGN KEY (`specie_id`) REFERENCES `species` (`specie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animals`
--

LOCK TABLES `animals` WRITE;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `associated_users`
--

DROP TABLE IF EXISTS `associated_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `associated_users` (
  `associated_users_id` int unsigned NOT NULL,
  `isActive` bit(1) NOT NULL,
  `organization_id` int unsigned NOT NULL,
  PRIMARY KEY (`associated_users_id`),
  KEY `associated_fk_org_id_idx` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `associated_users`
--

LOCK TABLES `associated_users` WRITE;
/*!40000 ALTER TABLE `associated_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `associated_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breeds`
--

DROP TABLE IF EXISTS `breeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breeds` (
  `breed_id` int unsigned NOT NULL AUTO_INCREMENT,
  `breed_name` varchar(45) NOT NULL,
  PRIMARY KEY (`breed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeds`
--

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eye_color`
--

DROP TABLE IF EXISTS `eye_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eye_color` (
  `eye_color_id` int unsigned NOT NULL AUTO_INCREMENT,
  `eye_color` varchar(45) NOT NULL,
  PRIMARY KEY (`eye_color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eye_color`
--

LOCK TABLES `eye_color` WRITE;
/*!40000 ALTER TABLE `eye_color` DISABLE KEYS */;
/*!40000 ALTER TABLE `eye_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `found_animals`
--

DROP TABLE IF EXISTS `found_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `found_animals` (
  `found_animal_id` int unsigned NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `found_date` date DEFAULT NULL,
  `priority` enum('Alta','Media','Baixa','Por classificar') DEFAULT NULL,
  PRIMARY KEY (`found_animal_id`),
  KEY `fk_user_id_idx` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `found_animals`
--

LOCK TABLES `found_animals` WRITE;
/*!40000 ALTER TABLE `found_animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `found_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_color`
--

DROP TABLE IF EXISTS `fur_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_color` (
  `fur_color_id` int unsigned NOT NULL AUTO_INCREMENT,
  `fur_color` varchar(45) NOT NULL,
  PRIMARY KEY (`fur_color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_color`
--

LOCK TABLES `fur_color` WRITE;
/*!40000 ALTER TABLE `fur_color` DISABLE KEYS */;
/*!40000 ALTER TABLE `fur_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_length`
--

DROP TABLE IF EXISTS `fur_length`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_length` (
  `fur_length_id` int unsigned NOT NULL AUTO_INCREMENT,
  `fur_length` varchar(45) NOT NULL,
  PRIMARY KEY (`fur_length_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_length`
--

LOCK TABLES `fur_length` WRITE;
/*!40000 ALTER TABLE `fur_length` DISABLE KEYS */;
/*!40000 ALTER TABLE `fur_length` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missing_animal`
--

DROP TABLE IF EXISTS `missing_animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missing_animal` (
  `missing_animal_id` int unsigned NOT NULL,
  `missing_date` date DEFAULT NULL,
  `is_missing` bit(1) DEFAULT NULL,
  `owner_id` int unsigned NOT NULL,
  PRIMARY KEY (`missing_animal_id`),
  KEY `fk_owner_id_idx` (`owner_id`),
  CONSTRAINT `fk_missing_animal_id` FOREIGN KEY (`missing_animal_id`) REFERENCES `animals` (`animal_id`),
  CONSTRAINT `fk_owner_id` FOREIGN KEY (`owner_id`) REFERENCES `users` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missing_animal`
--

LOCK TABLES `missing_animal` WRITE;
/*!40000 ALTER TABLE `missing_animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `missing_animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `organizationId` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `street` varchar(64) NOT NULL,
  `doorNumber` int DEFAULT NULL,
  `floor` int DEFAULT NULL,
  `postalCode` int DEFAULT NULL,
  `streetCode` int DEFAULT NULL,
  `city` varchar(64) NOT NULL,
  `municipality` varchar(64) NOT NULL,
  `district` varchar(64) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`organizationId`),
  UNIQUE KEY `nif_UNIQUE` (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `photo_id` int unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(45) DEFAULT NULL,
  `img` longblob,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `size` (
  `size_id` int unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(45) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size`
--

LOCK TABLES `size` WRITE;
/*!40000 ALTER TABLE `size` DISABLE KEYS */;
/*!40000 ALTER TABLE `size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `species`
--

DROP TABLE IF EXISTS `species`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `species` (
  `specie_id` int unsigned NOT NULL AUTO_INCREMENT,
  `specie_name` varchar(45) NOT NULL,
  PRIMARY KEY (`specie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `species`
--

LOCK TABLES `species` WRITE;
/*!40000 ALTER TABLE `species` DISABLE KEYS */;
/*!40000 ALTER TABLE `species` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userId` int unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `street` varchar(64) DEFAULT NULL,
  `doorNumber` int unsigned DEFAULT NULL,
  `floor` int unsigned DEFAULT NULL,
  `postalCode` int unsigned DEFAULT NULL,
  `streetCode` int unsigned DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `nif_UNIQUE` (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2020-10-27 12:11:07
