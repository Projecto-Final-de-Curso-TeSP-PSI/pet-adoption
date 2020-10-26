-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Out-2020 às 10:38
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paws4adoption`
--
CREATE DATABASE IF NOT EXISTS `paws4adoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `paws4adoption`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `adminUserId` int UNSIGNED NOT NULL,
  PRIMARY KEY (`adminUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adoption_animals`
--

DROP TABLE IF EXISTS `adoption_animals`;
CREATE TABLE IF NOT EXISTS `adoption_animals` (
  `adoption_animal_id` int UNSIGNED NOT NULL,
  `is_on_fat` bit(1) DEFAULT NULL,
  `organization_id` int UNSIGNED NOT NULL,
  `associated_user_id` int UNSIGNED NOT NULL,
  `adoptionDate` date DEFAULT NULL,
  `adopter_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`adoption_animal_id`),
  KEY `fk_organization_id_idx` (`organization_id`),
  KEY `fk_associated_user_id_idx` (`associated_user_id`),
  KEY `fk_adopter_id_idx` (`adopter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `animal_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `chipId` varchar(15) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(45) DEFAULT NULL,
  `animalscol` text,
  `specie_id` int UNSIGNED NOT NULL,
  `breed_id` int UNSIGNED NOT NULL,
  `fur_length` int UNSIGNED NOT NULL,
  `fur_color` int UNSIGNED NOT NULL,
  `eye_color` int UNSIGNED NOT NULL,
  `size` int UNSIGNED NOT NULL,
  PRIMARY KEY (`animal_id`),
  KEY `fk_specie_id_idx` (`specie_id`),
  KEY `fk_breed_id_idx` (`breed_id`),
  KEY `fk_fur_length_id_idx` (`fur_length`),
  KEY `fk_fur_color_id_idx` (`fur_color`),
  KEY `fk_eye_color_id_idx` (`eye_color`),
  KEY `fk_size_id_idx` (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `associated_users`
--

DROP TABLE IF EXISTS `associated_users`;
CREATE TABLE IF NOT EXISTS `associated_users` (
  `associated_users_id` int UNSIGNED NOT NULL,
  `isActive` bit(1) NOT NULL,
  `organization_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`associated_users_id`),
  KEY `associated_fk_org_id_idx` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `breeds`
--

DROP TABLE IF EXISTS `breeds`;
CREATE TABLE IF NOT EXISTS `breeds` (
  `breed_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `breed_name` varchar(45) NOT NULL,
  PRIMARY KEY (`breed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eye_color`
--

DROP TABLE IF EXISTS `eye_color`;
CREATE TABLE IF NOT EXISTS `eye_color` (
  `eye_color_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `eye_color` varchar(45) NOT NULL,
  PRIMARY KEY (`eye_color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `found_animals`
--

DROP TABLE IF EXISTS `found_animals`;
CREATE TABLE IF NOT EXISTS `found_animals` (
  `found_animal_id` int UNSIGNED NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `found_date` date DEFAULT NULL,
  `priority` enum('Alta','Media','Baixa','Por classificar') DEFAULT NULL,
  PRIMARY KEY (`found_animal_id`),
  KEY `fk_user_id_idx` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fur_color`
--

DROP TABLE IF EXISTS `fur_color`;
CREATE TABLE IF NOT EXISTS `fur_color` (
  `fur_color_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fur_color` varchar(45) NOT NULL,
  PRIMARY KEY (`fur_color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fur_length`
--

DROP TABLE IF EXISTS `fur_length`;
CREATE TABLE IF NOT EXISTS `fur_length` (
  `fur_length_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fur_length` varchar(45) NOT NULL,
  PRIMARY KEY (`fur_length_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `missing_animal`
--

DROP TABLE IF EXISTS `missing_animal`;
CREATE TABLE IF NOT EXISTS `missing_animal` (
  `missing_animal_id` int UNSIGNED NOT NULL,
  `missing_date` date DEFAULT NULL,
  `is_missing` bit(1) DEFAULT NULL,
  `owner_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`missing_animal_id`),
  KEY `fk_owner_id_idx` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `organizationId` int UNSIGNED NOT NULL AUTO_INCREMENT,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `caption` varchar(45) DEFAULT NULL,
  `img` longblob,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `size_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `size` varchar(45) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `species`
--

DROP TABLE IF EXISTS `species`;
CREATE TABLE IF NOT EXISTS `species` (
  `specie_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `specie_name` varchar(45) NOT NULL,
  PRIMARY KEY (`specie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `street` varchar(64) DEFAULT NULL,
  `doorNumber` int UNSIGNED DEFAULT NULL,
  `floor` int UNSIGNED DEFAULT NULL,
  `postalCode` int UNSIGNED DEFAULT NULL,
  `streetCode` int UNSIGNED DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `nif_UNIQUE` (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `fk_breed_id` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`breed_id`),
  ADD CONSTRAINT `fk_eye_color_id` FOREIGN KEY (`eye_color`) REFERENCES `eye_color` (`eye_color_id`),
  ADD CONSTRAINT `fk_fur_color_id` FOREIGN KEY (`fur_color`) REFERENCES `fur_color` (`fur_color_id`),
  ADD CONSTRAINT `fk_fur_length_id` FOREIGN KEY (`fur_length`) REFERENCES `fur_length` (`fur_length_id`),
  ADD CONSTRAINT `fk_size_id` FOREIGN KEY (`size`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `fk_specie_id` FOREIGN KEY (`specie_id`) REFERENCES `species` (`specie_id`);

--
-- Limitadores para a tabela `missing_animal`
--
ALTER TABLE `missing_animal`
  ADD CONSTRAINT `fk_missing_animal_id` FOREIGN KEY (`missing_animal_id`) REFERENCES `animals` (`animal_id`),
  ADD CONSTRAINT `fk_owner_id` FOREIGN KEY (`owner_id`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
