CREATE DATABASE  IF NOT EXISTS `paws4adoption` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `address` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `door_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `floor` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postal_code` int unsigned DEFAULT NULL,
  `street_code` int unsigned DEFAULT NULL,
  `city` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_district_id_idx` (`district_id`),
  CONSTRAINT `fk_district_id` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'Rua da Escola','7','2.º drt',2400,102,'Leiria',10),(2,'Av. da Liberdade','10A','4.º esq',1059,765,'Lisboa',11),(3,'Praceta D. João Pereira','56',NULL,3025,22,'Coimbra',6),(4,'Bairro 1.º de Maio','25',NULL,2140,57,'Chamusca',14),(5,'Estrada de Fátima','107',NULL,2395,1,'Minde',14),(6,'Estrada do Caldeirão','8','1.º frt',9980,33,'Corvo',29),(7,'Rua General Humberto Delgado','20','3-º esq',2555,100,'Entroncamento',14),(8,'Avenida Santa Joana Princesa','15A',NULL,2566,526,'Lisboa',11),(9,'Rua de Quintãs','294',NULL,2654,111,'Penafiel',13),(10,'Rua da Carreira','56','6º drt',1500,159,'Braga',3),(11,'Rua Castanheiros','26','2º drt',2565,154,'Mirandela',4),(12,'Rua Marques Pombal','53','3º esq',2410,121,'Leiria',10),(13,'Rua Alferes Veiga Pestana','10',NULL,9270,129,'Ribeira Funda',19),(14,'Rua Cruzes','48',NULL,4750,462,'Santo Amaro',3),(15,'R Doutor Alberto Sampaio','28','3º drt',4820,145,'Fafe',3),(16,'Rua Nossa Senhora de Fatima','33',NULL,3400,149,'Oliveira do Hospital',6),(17,'Rua do Casal','100',NULL,2410,68,'Leiria',10),(18,'Rua de Santa Isabel','7','4º esq',2450,125,'Fatima',10),(19,'Rua da Chamusca','5',NULL,5244,54,'Chamusca',14),(20,'Avenida Luis Bívar','85','',1050,243,'Lisboa',11),(21,'Rua de Pombal','21',NULL,2458,548,'Pombal',10),(22,'Rua de Coimbra','5','2º drt',3000,256,'Coimbra',6),(23,'Rua da Malaposta','7',NULL,2410,45,'Cruz da Areia',10),(24,'Travessa da Figueira','8',NULL,2400,325,'Leiria',10),(25,'Rua da Quintas','75',NULL,3025,284,'Condeixa',6),(26,'Rua Dr. Armando Gameiro','67','',2140,385,'Chamusca',14),(27,'Av. 24 de Julho','379','R\\c esq',1004,108,'Lisboa',11);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `id` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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
  `id` int unsigned NOT NULL,
  `is_on_fat` bit(1) DEFAULT NULL,
  `organization_id` int unsigned NOT NULL,
  `associated_user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_organization_id_idx` (`organization_id`),
  KEY `fk_associated_user_id_idx` (`associated_user_id`),
  CONSTRAINT `fk_adopt_animal_id` FOREIGN KEY (`id`) REFERENCES `animals` (`id`),
  CONSTRAINT `fk_associated_user_id` FOREIGN KEY (`associated_user_id`) REFERENCES `associated_users` (`id`),
  CONSTRAINT `fk_organization_id` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `motivation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adoption_date` date DEFAULT NULL,
  `adopted_animal_id` int unsigned NOT NULL,
  `adopter_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adopter_id_idx` (`adopter_id`),
  CONSTRAINT `fk_adopter_id` FOREIGN KEY (`adopter_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_adoption_animal_id` FOREIGN KEY (`id`) REFERENCES `adoption_animals` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `chipId` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `nature_id` int unsigned NOT NULL,
  `fur_length_id` int unsigned NOT NULL,
  `fur_color_id` int unsigned NOT NULL,
  `size_id` int unsigned NOT NULL,
  `sex` enum('M','F') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_specie_id_idx` (`nature_id`),
  KEY `fk_fur_length_id_idx` (`fur_length_id`),
  KEY `fk_fur_color_id_idx` (`fur_color_id`),
  KEY `fk_size_id_idx` (`size_id`),
  CONSTRAINT `fk_fur_color_id` FOREIGN KEY (`fur_color_id`) REFERENCES `fur_colors` (`id`),
  CONSTRAINT `fk_fur_length_id` FOREIGN KEY (`fur_length_id`) REFERENCES `fur_lengths` (`id`),
  CONSTRAINT `fk_nature_id` FOREIGN KEY (`nature_id`) REFERENCES `nature` (`id`),
  CONSTRAINT `fk_size_id` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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
  `id` int unsigned NOT NULL,
  `isActive` bit(1) NOT NULL,
  `organization_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `associated_fk_org_id_idx` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `associated_users`
--

LOCK TABLES `associated_users` WRITE;
/*!40000 ALTER TABLE `associated_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `associated_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `districts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,'Aveiro'),(2,'Beja'),(3,'Braga'),(4,'Bragança'),(5,'Castelo Branco'),(6,'Coimbra'),(7,'Évora'),(8,'Faro'),(9,'Guarda'),(10,'Leiria'),(11,'Lisboa'),(12,'Portalegre'),(13,'Porto'),(14,'Santarém'),(15,'Setúbal'),(16,'Viana do Castelo'),(17,'Vila Real'),(18,'Viseu'),(19,'Ilha da Madeira'),(20,'Ilha de Porto Santo'),(21,'Ilha de Santa Maria'),(22,'Ilha de São Miguel'),(23,'Ilha Terceira'),(24,'Ilha da Graciosa'),(25,'Ilha de São Jorge'),(26,'Ilha do Pico'),(27,'Ilha do Faial'),(28,'Ilha das Flores'),(29,'Ilha do Corvo');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `found_animals`
--

DROP TABLE IF EXISTS `found_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `found_animals` (
  `id` int unsigned NOT NULL,
  `location` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `found_date` date DEFAULT NULL,
  `priority` enum('Alta','Media','Baixa','Por classificar') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id_idx` (`user_id`),
  CONSTRAINT `fk_animal_id` FOREIGN KEY (`id`) REFERENCES `animals` (`id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `found_animals`
--

LOCK TABLES `found_animals` WRITE;
/*!40000 ALTER TABLE `found_animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `found_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_colors`
--

DROP TABLE IF EXISTS `fur_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_colors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fur_color` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_colors`
--

LOCK TABLES `fur_colors` WRITE;
/*!40000 ALTER TABLE `fur_colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `fur_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_lengths`
--

DROP TABLE IF EXISTS `fur_lengths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_lengths` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fur_length` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_lengths`
--

LOCK TABLES `fur_lengths` WRITE;
/*!40000 ALTER TABLE `fur_lengths` DISABLE KEYS */;
/*!40000 ALTER TABLE `fur_lengths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migration` (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missing_animals`
--

DROP TABLE IF EXISTS `missing_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missing_animals` (
  `id` int unsigned NOT NULL,
  `missing_date` date DEFAULT NULL,
  `is_missing` bit(1) DEFAULT NULL,
  `owner_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_owner_id_idx` (`owner_id`),
  CONSTRAINT `fk_missing_animal_id` FOREIGN KEY (`id`) REFERENCES `animals` (`id`),
  CONSTRAINT `fk_owner_id` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missing_animals`
--

LOCK TABLES `missing_animals` WRITE;
/*!40000 ALTER TABLE `missing_animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `missing_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature`
--

DROP TABLE IF EXISTS `nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nature` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_nature_id` int unsigned DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature`
--

LOCK TABLES `nature` WRITE;
/*!40000 ALTER TABLE `nature` DISABLE KEYS */;
/*!40000 ALTER TABLE `nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nif` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif_UNIQUE` (`nif`),
  KEY `fk_address_id_idx` (`address_id`),
  CONSTRAINT `fk_address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (1,'Ajuda Animal','546235957','ajudaanimal@gmail.com','919305590',7),(2,'Gatos Urbanos','510709575','gatos.urbanos@gmail.com','915632562',23),(3,'Associação Zoófila de Leiria','532145265','azleiria.geral@gmail.com','913555456',24),(4,'Apaaf Associação','534426426','apaaf1@gmail.com','915420452',25),(5,'Associação Amigos dos Animais Chamusca','597234636','animaischamusca@hotmail.com','915344265',26),(6,'Associação Zoófila Portuguesa','537185687','info@azp.pt','217970810',27);
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sizes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nif` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `nif_UNIQUE` (`nif`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `fk_address_id_idx` (`address_id`),
  KEY `fk_user_address_id_idx` (`address_id`),
  CONSTRAINT `fk_user_address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Simão','Pedro','simao.s.pedro@gmail.com','242218040','912345678','simaopedro','ozFqrgfw1RzFo-RJJUXCx9CI87lv5vDN','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605220994,1605220994,'t5AYTA0WgGx92sREwUOoJBqE4la2P2yt_1605220994',1),(2,'Cátia','Bessa','katyb@gm.pt','242319123','918765432','katy','EgIapFuHmRab0fz93bDuEm6kaCC2FkAM','$2y$13$04H/3AFUiEnJXrYfjkH0puVqPZxW5.Sk55l61yWMYr5ODR2KmMImK',NULL,10,1605224315,1605224315,'LvelSObJ7seAS_lCQEgtODzhg0dBJJRr_1605224315',2),(3,'Ricardo','Lopes','ricardolopes@gm.pt','242517987','963524871','ricardolopes','yI1GZZmscmpCNaxLLaKe6G7jM3CEL5gx','$2y$13$zDobv.B33HURSOYnxtNc/uo7ULABTEpbXOacwL2P9V0Y203.OK7YO',NULL,10,1605291218,1605291218,'3SYTOgQE_8A91wqGl7KGRS9MQ0HOh8ZP_1605291218',3),(4,'Cláudia','Valente','claudiavalente@gm.pt','252456839','933564712','claudiavalente','GWVzgG4hfNVyIeAn9M5n5iDMwjfG9dit','$2y$13$RDKr6nIYt0Gcl.7AH2Ze/exxEy06nPiZrYWbfGNAFjQZ1V3TIdh3e',NULL,10,1605291387,1605291387,'TymcG-CiB4CS_811nBYJqrGdoDRiOEZv_1605291387',4),(5,'Martim','Gaspar','martimgaspar@gm.pt','252678934','928736451','martimgaspar','mJMoGHev31YDP8M3J3yXfJRjFDdhhQyN','$2y$13$KwkmKckbOM9XaTP7WM8CDeWCL1oOe0rLhvtFTsQxPa72YzYymVu6y',NULL,10,1605295368,1605295368,'7YIOqMoSC_ArzHFlQy97Xyl90zdxj2Gp_1605295368',5),(6,'José','Miguel','zemigas@gm.pt','196783526','915463728','zemigas','w71yoafkeRfTeWZgDZGhY1mgxH3fdQEU','$2y$13$xbiUJM5ILcrXePCzJ2zvXO/zgWF2MdmBtBPOvHBXeINFLfdHqbK9C',NULL,10,1605295493,1605295493,'ipBbZ01J0lr8wtoQdxJnYukQr8ckkg8q_1605295493',6),(8,'Rita','Alves','rita@gmail.com','123555658','917544885','rita','7rdixwM38038Z5xE-nyTCPPzaIWk7wtB','$2y$13$bEMkdK2ApJ/fzTJp7/JQ4OZ2fsH5GAS7/NiUMo.vvWFEhaV4BbZwe',NULL,10,1605306410,1605306410,'E5FjYLglm4oK4iF9mXGtbR_zkOg-e5ns_1605306410',8),(9,'Joao','Mendes','joao@gmail.com','111555452','915583126','joao','6GsrKnJwEnEwHcsVhEuEbLvB6UZyVmfK','$2y$13$/W5lu2nmM7ohDWrc8yvHnOQkZNR75MBZV1qBF.QY.AMaKwS1ne96q',NULL,10,1605306887,1605306887,'_-If8lte1_aNFClUyb2znlb0FD_0SKv1_1605306887',9),(10,'Rafael','Gomes','rafael@ipl.com','186522447','915425664','rafael','FPa-bBvu9O6fi8VYoIA01-w5czTGwSR5','$2y$13$hRV6SEOQm7uVA.ETv.Z0KuSeBf7fT6DsWol/qh/QpN2gbCAlMLaAS',NULL,10,1605306920,1605306920,'xvdNNqDGyihDcLyblmFzhITh5jOszx8a_1605306920',10),(11,'Ana','Santos','ana@ipl.com','147525248','965546232','ana','qj4AkBZpVcAFj5donJQ-VgIcOolO5IKU','$2y$13$7EAJE28hUX7gb4r15HP3VOug14rkhk.rOXC6URH1ZLRF8YR9Yeq5G',NULL,10,1605306941,1605306941,'FreHllJDkC66eup4plz9BcypvOA2Krr7_1605306941',11),(12,'Patricia','Alverca','patricia@ipl.com','146822454','965214653','patricia','hUMmy_-cb4hGriI5bUTQQVBIjS_Ug7Hq','$2y$13$YTxUFyfyDnQJ0.AeHsVtAeZriprEHyc7x.lfaOu6kLS1yjhEoE4pK',NULL,10,1605306969,1605306969,'dFp9tmmyKF94DpGqlwF6GxrKglp9Wd6v_1605306969',12),(13,'Tania','Monteiro','tania@ipl.com','254127655','915852045','tania','ai9UHtObJk_PD6PSQPX_gD7SPFHVvj2b','$2y$13$EYWpobRsuMwSxVcENKdTjO9F6PyTozskxxpTkfMIhtpYVxgCvSc0y',NULL,10,1605306985,1605306985,'UPnxKzJST2JkgSAPX8bAuBPcOfl1zxbO_1605306985',13),(14,'Telmo','Jesus','telmo@ipl.com','268421455','934623455','telmo','jGWbLPFsklsEVgbFUukkUC7jYVjq4_hO','$2y$13$9YBcRASoY4paJcUR2MewxuAk3c4P.gX2G0reKQMdNeQxPZQlMdUGi',NULL,10,1605306999,1605306999,'zHGeA4TsN6VRBRROluzgX15xnou5m-XT_1605306999',14),(15,'Tiago','Ribeiro','tiago@ipl.com','215592312','965422355','tiago','71Mz993_1MuqkfggzzdgKMYpmnnteJEQ','$2y$13$Ie4X6NY3ZWXhFq7ND7.yxeq1/OaKarXLWsXXMRBGIrD8yvQ4Nz.wK',NULL,10,1605307023,1605307023,'pGRVYwvOd_ie-WJFhu_1-_WspgUUiCeL_1605307023',15),(16,'Jessica','Silva','jessica@ipl.com','196246633','934524875','jessica','2q19kl4FBD88OeVOaeM1SN8lN-x3UTpW','$2y$13$z5n6xdoQm./6nSlZ9g1VbeSK3IJVM2oGXm1Q1dXyylE9.7HFWdTBK',NULL,10,1605307047,1605307047,'R7bt092u0pKC7JEqSh1o1r-Is0YuJCeY_1605307047',16),(17,'Antonio','Simões','antonio@ipl.com','175300645','916578521','antonio','M5cGOzNYdtyRpkLdZNEJ9D5C-8ZCXaFV','$2y$13$WJJJL6.PRRZyZrO23.2mmOyNnKSZC3sBcBdVUv3/aDBcsqvRHlRwC',NULL,10,1605307061,1605307061,'YXySG72mwz8Up3PrOx46xNmHCnBeiBt4_1605307061',17),(18,'Fernando','Fernandes','fernando@ipl.com','298422361','962174114','fernando','5BZe7exNxtFjgzd5l3wq7etjcmnONi7t','$2y$13$LsQvB5Ub.Vbvc5dxPZFFgeQHYRrBt.GXqelrJQG/VZLoNvixnljIK',NULL,10,1605307078,1605307078,'7hzrd3UpONBHDDSErhCMH20gIuZumP7P_1605307078',18),(19,'Sonia','Mendes','sonia@ipl.com','146539523','937852455','sonia','U4hqVHpPpWjK6pUsk600DCrbXbUN_m-b','$2y$13$GIYjrQqDl.uZfWeAT6j60ezhjFB0z3xWEEOxH776w0znrWNqq9.zi',NULL,10,1605307094,1605307094,'DfeE2TC98oMhEiLhzTXJyIMN5jHIeIJz_1605307094',19),(20,'Pedro','Ribeiro','pedro@ipl.com','136522663','932785248','pedro','Cwy5gwOdYe6DtbgagqH5bXNmQcZMWICm','$2y$13$UmDfFCU.Di/2vKmsrLQ4xObO9nhwI1eGDgW37q9b/Kov/GiuI6ywK',NULL,10,1605307111,1605307111,'YZjpe94o75TvIsJCpNEfZb88NyMcv53a_1605307111',20),(21,'Diogo','Lopes','diogo@ipl.com','125532487','915239415','diogo','fi7JHXIJIWd9aepoI5y6ndaPkxcuyL4z','$2y$13$qfxqo.dvcg7AcAKKSY0RpuOCW3KpB2ibyowa3KZIa/e/HWa4/yggK',NULL,10,1605308218,1605308218,'j3FF2EF-zu2fWA7MjmkCYTjD2kA_J8br_1605308218',21),(22,'Diana','Antunes','diana@ipl.com','268758567','965224654','diana','dOTC79z4dSH_8DQuUCV5KoEV02gOFyR6','$2y$13$y4.etEAsdFEuIPhp9Ejb0.TRPAzNaGCl68TdOf8wkNoT794qwALh.',NULL,10,1605308239,1605308239,'pV0U5zDbF32B7MeR7NRzmpkq0QU0aLQe_1605308239',22);
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

-- Dump completed on 2020-11-14 12:50:23
