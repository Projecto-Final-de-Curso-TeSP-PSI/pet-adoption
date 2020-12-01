-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: paws4adoption
-- ------------------------------------------------------
-- Server version	8.0.18

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `door_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `floor` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postal_code` int(10) unsigned DEFAULT NULL,
  `street_code` int(10) unsigned DEFAULT NULL,
  `city` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_district_id_idx` (`district_id`),
  CONSTRAINT `fk_district_id` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'Rua da Escola','7','2.º drt',2400,102,'Leiria',10),(2,'Av. da Liberdade','10A','4.º esq',1059,765,'Lisboa',11),(3,'Praceta D. João Pereira','56',NULL,3025,22,'Coimbra',6),(4,'Bairro 1.º de Maio','25',NULL,2140,57,'Chamusca',14),(5,'Estrada de Fátima','107',NULL,2395,1,'Minde',14),(6,'Estrada do Caldeirão','8','1.º frt',9980,33,'Corvo',29),(7,'Rua General Humberto Delgado','20','3-º esq',2555,100,'Entroncamento',14),(8,'Avenida Santa Joana Princesa','15A',NULL,2566,526,'Lisboa',11),(9,'Rua de Quintãs','294',NULL,2654,111,'Penafiel',13),(10,'Rua da Carreira','56','6º drt',1500,159,'Braga',3),(11,'Rua Castanheiros','26','2º drt',2565,154,'Mirandela',4),(12,'Rua Marques Pombal','53','3º esq',2410,121,'Leiria',10),(13,'Rua Alferes Veiga Pestana','10',NULL,9270,129,'Ribeira Funda',19),(14,'Rua Cruzes','48',NULL,4750,462,'Santo Amaro',3),(15,'R Doutor Alberto Sampaio','28','3º drt',4820,145,'Fafe',3),(16,'Rua Nossa Senhora de Fatima','33',NULL,3400,149,'Oliveira do Hospital',6),(17,'Rua do Casal','100',NULL,2410,68,'Leiria',10),(18,'Rua de Santa Isabel','7','4º esq',2450,125,'Fatima',10),(19,'Rua da Chamusca','5',NULL,5244,54,'Chamusca',14),(20,'Avenida Luis Bívar','85','',1050,243,'Lisboa',11),(21,'Rua de Pombal','21',NULL,2458,548,'Pombal',10),(22,'Rua de Coimbra','5','2º drt',3000,256,'Coimbra',6),(23,'Rua da Malaposta','7',NULL,2410,45,'Cruz da Areia',10),(24,'Travessa da Figueira','8',NULL,2400,325,'Leiria',10),(25,'Rua da Quintas','75',NULL,3025,284,'Condeixa',6),(26,'Rua Dr. Armando Gameiro','67','',2140,385,'Chamusca',14),(27,'Av. 24 de Julho','379','R\\c esq',1004,108,'Lisboa',11),(30,'Rua da Alvorada','60','',3801,551,'Eixo',1),(31,'Rua da Alvorada','60','',3801,551,'Eixo',1),(32,'Rua Trabalhadores do Comércio','17','3.º Frt',2070,57,'Cartaxo',14);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_admin_user_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1),(2);
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoption_animals`
--

DROP TABLE IF EXISTS `adoption_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoption_animals` (
  `id` int(10) unsigned NOT NULL,
  `is_on_fat` bit(1) DEFAULT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  `associated_user_id` int(10) unsigned NOT NULL,
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
INSERT INTO `adoption_animals` VALUES (1,_binary '\0',1,3),(3,_binary '\0',2,4),(4,_binary '\0',2,4),(5,_binary '\0',2,4),(8,_binary '\0',1,3),(9,_binary '\0',2,4),(10,_binary '\0',3,5),(11,_binary '\0',4,7),(12,_binary '',5,8),(14,_binary '\0',3,5),(15,_binary '\0',5,8),(17,_binary '\0',4,7),(18,_binary '\0',4,7);
/*!40000 ALTER TABLE `adoption_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adoptions`
--

DROP TABLE IF EXISTS `adoptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adoptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `motivation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adoption_date` date DEFAULT NULL,
  `adopted_animal_id` int(10) unsigned NOT NULL,
  `adopter_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adopter_id_idx` (`adopter_id`),
  KEY `fk_adoption_animal_id` (`adopted_animal_id`),
  CONSTRAINT `fk_adopter_id` FOREIGN KEY (`adopter_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_adoption_animal_id` FOREIGN KEY (`adopted_animal_id`) REFERENCES `adoption_animals` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoptions`
--

LOCK TABLES `adoptions` WRITE;
/*!40000 ALTER TABLE `adoptions` DISABLE KEYS */;
INSERT INTO `adoptions` VALUES (1,'Gostaria de adotar este cão, tenho muito espaço no quintal.',NULL,9,17),(2,'O meu tareco faleceu há um tempo, e gostaria de ter outro gato em casa, o Limão parece-me oser o gato ideal.',NULL,4,18),(3,'Gostei muito do Esdrubal, como posso fazer para o adotar?.','2020-09-15',14,16),(4,'Gostaria de acolher temporariamente a Mason, como faço?','2020-09-03',12,15);
/*!40000 ALTER TABLE `adoptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animals`
--

DROP TABLE IF EXISTS `animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chipId` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `nature_id` int(10) unsigned NOT NULL,
  `fur_length_id` int(10) unsigned NOT NULL,
  `fur_color_id` int(10) unsigned NOT NULL,
  `size_id` int(10) unsigned NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animals`
--

LOCK TABLES `animals` WRITE;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;
INSERT INTO `animals` VALUES (1,'647837364763743','2020-05-02 00:00:00','Cao muito manso mas tem medo de outros caes',68,3,7,1,'M','Lulu'),(2,'647837334763743','2020-05-07 00:00:00','Gato cheio de vida, muito irrequieto, ideal para quem tenha muito espaço em casa.',47,2,6,1,'M','Becas'),(3,'647837364865743','2020-05-12 00:00:00','O Jolly é um gato afável, sempre pronto a dormir uma sonena á janela',47,3,2,1,'M','Jolly'),(4,'647837374333453','2020-05-24 00:00:00','Gato de muito alimento, está cada vez mais fofo de gordo.',3,2,7,1,'M','Limao'),(5,'375963489569865','2020-06-04 00:00:00','O Jiancarlo é um gato assustado, necessita de ter o seu espaço',13,1,6,1,'M','Jiancarlo'),(6,'659637264928462','2020-06-06 00:00:00','O Pucci apesar de nao ter cauda, anda sempre em correrias',20,2,3,1,'M','Pucci'),(7,'623946928358962','2020-06-09 00:00:00','A Gispy só quer dormir todo o dia e toda a noite.',46,1,4,1,'M','Fausto'),(8,'670476094730704','2020-06-24 00:00:00','Cao muito manso mas tem medo de outros caes',55,3,5,1,'M','Miguel'),(9,'986795367634578','2020-07-02 00:00:00','O Afonso é muito enérgico, não para quieto',68,2,1,1,'M','Afonso'),(10,'979793874589795','2020-07-08 00:00:00','O Henriques apesar do seu tamanho imponente apenas quer dormir ao sol',60,3,5,1,'M','Henriques'),(11,'985787309457308','2020-07-09 00:00:00','O Freddy foi resgatado de uma casa em ruinas, abandonado, mas agora está pronto para outra familia que cuide bem dele',75,3,5,1,'M','Freddy'),(12,'985987687349867','2020-07-14 00:00:00','A Mason já foi uam cadela feliz, quer volta a fazê-la sorrir?!?!',83,3,2,1,'M','Manson'),(13,'784768479745654','2020-07-23 00:00:00','O Argulias é o cão mais atarefado do canil, está sempre a arrumar alguma coisa debaixo da terra, um osso ou um brinquedo.',68,3,1,1,'M','Argulias'),(14,'694786994857694','2020-07-27 00:00:00','O Esdrubal está connosco há 2 anos, venha dar um passeio com ele e verá que é o cão que procura.',72,3,2,1,'M','Esdrubal'),(15,'498689476897458','2020-08-02 00:00:00','Desde que o Buscapé chegou o canil nunca mais foi o mesmo, é o terror dos cães com sono.',107,3,5,1,'M','Buscapé'),(16,'498689476897458','2020-08-08 00:00:00','Apesar de ter pouca força nas pernas, o Alicate mexe-se muito, quem conseguir que o apanhe.',64,3,5,1,'M','Alicate'),(17,'498689476897458','2020-08-13 00:00:00','O Brutus é um são bernardo de tamanho imponente, mas não faz mal a ninguém, venha conhecê-lo.',101,2,5,1,'M','Brutus'),(18,'498689476897458','2020-08-19 00:00:00','A Geraldina chegou com uma ninhada de 4 patudos, já foram todos, quem a leva agora a ela??!',79,1,5,1,'M','Geraldina'),(19,'498689476897458','2020-08-26 00:00:00','Já não existem cães como o Ambrosio, vai buscar o jornal e dá a pata.',109,2,7,1,'M','Ambrosio'),(20,'498689476897458','2020-09-08 00:00:00','A fofa é uma caniche cheia de atividade, sempre pronta para passeios',68,3,1,1,'M','Fofa');
/*!40000 ALTER TABLE `animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `associated_users`
--

DROP TABLE IF EXISTS `associated_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `associated_users` (
  `id` int(10) unsigned NOT NULL,
  `isActive` bit(1) NOT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `associated_fk_org_id_idx` (`organization_id`),
  CONSTRAINT `fk_assoc_user_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `associated_users`
--

LOCK TABLES `associated_users` WRITE;
/*!40000 ALTER TABLE `associated_users` DISABLE KEYS */;
INSERT INTO `associated_users` VALUES (3,_binary '',1),(4,_binary '',2),(5,_binary '',3),(6,_binary '',3),(7,_binary '',4),(8,_binary '',5);
/*!40000 ALTER TABLE `associated_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_assignment`
--

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item`
--

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_child`
--

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_rule`
--

LOCK TABLES `auth_rule` WRITE;
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `id` int(10) unsigned NOT NULL,
  `location` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `found_date` date DEFAULT NULL,
  `priority` enum('Alta','Media','Baixa','Por classificar') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
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
INSERT INTO `found_animals` VALUES (6,'1',_binary '','2020-06-04','Baixa',9),(13,'1',_binary '','2020-06-04','Baixa',10),(19,'1',_binary '','2020-06-04','Baixa',11);
/*!40000 ALTER TABLE `found_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_colors`
--

DROP TABLE IF EXISTS `fur_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fur_color` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_colors`
--

LOCK TABLES `fur_colors` WRITE;
/*!40000 ALTER TABLE `fur_colors` DISABLE KEYS */;
INSERT INTO `fur_colors` VALUES (1,'Branco'),(2,'Preto'),(3,'Cinzento'),(4,'Laranja'),(5,'Castanho'),(6,'Amarelo/dourado'),(7,'Outra');
/*!40000 ALTER TABLE `fur_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fur_lengths`
--

DROP TABLE IF EXISTS `fur_lengths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fur_lengths` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fur_length` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fur_lengths`
--

LOCK TABLES `fur_lengths` WRITE;
/*!40000 ALTER TABLE `fur_lengths` DISABLE KEYS */;
INSERT INTO `fur_lengths` VALUES (1,'Longo'),(2,'Medio'),(3,'Curto');
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
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m130524_201442_init',1606247094),('m140506_102106_rbac_init',1606685699),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1606685699),('m180523_151638_rbac_updates_indexes_without_prefix',1606685699),('m190124_110200_add_verification_token_column_to_user_table',1606247094),('m200409_110543_rbac_update_mssql_trigger',1606685699),('m201122_204540_AddColumn_Animal_id_in_PhotosTable',1606247094);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missing_animals`
--

DROP TABLE IF EXISTS `missing_animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missing_animals` (
  `id` int(10) unsigned NOT NULL,
  `missing_date` date DEFAULT NULL,
  `is_missing` bit(1) DEFAULT NULL,
  `owner_id` int(10) unsigned NOT NULL,
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
INSERT INTO `missing_animals` VALUES (2,'2020-06-04',_binary '',12),(7,'2020-06-04',_binary '',14),(20,'2020-06-04',_binary '',16);
/*!40000 ALTER TABLE `missing_animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature`
--

DROP TABLE IF EXISTS `nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nature` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_nature_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature`
--

LOCK TABLES `nature` WRITE;
/*!40000 ALTER TABLE `nature` DISABLE KEYS */;
INSERT INTO `nature` VALUES (1,NULL,'Gato'),(2,NULL,'Cão'),(3,1,'Abissínio'),(4,1,'American Wirehair'),(5,1,'Asian'),(6,1,'Australian Mist'),(7,1,'Bobtail Americano'),(8,1,'Bombay'),(9,1,'Burmês'),(10,1,'Burmilla'),(11,1,'Cornish Rex'),(12,1,'Curl Americano'),(13,1,'Devon Rex'),(14,1,'Sphynx'),(15,1,'Egyptian Mau'),(16,1,'German Rex'),(17,1,'Havana'),(18,1,'Khao Manee'),(19,1,'Kurlian Bobtail'),(20,1,'Manx'),(21,1,'Munchkin'),(22,1,'Ocicat'),(23,1,'Oriental'),(24,1,'Peterbald'),(25,1,'Pixiebob'),(26,1,'Russian'),(27,1,'Seychellois'),(28,1,'Siamês'),(29,1,'Singapura'),(30,1,'Snowshoe'),(31,1,'Sokoke'),(32,1,'Angorá Turco'),(33,1,'Bobtail Japonês'),(34,1,'Chartreux'),(35,1,'Gato Bosques da Noruega'),(36,1,'LaPerm'),(37,1,'Maine Coon'),(38,1,'RagaMuffin'),(39,1,'Ragdoll'),(40,1,'Sagrado da Birmânia'),(41,1,'Scottish Straigth'),(42,1,'Selkirk Rex'),(43,1,'Somali'),(44,1,'Van Turco'),(45,1,'Balinês'),(46,1,'Siberiano'),(47,1,'Outra (Gato)'),(48,2,'Lulu da Pomerânia / Spitz Alemão'),(49,2,'Airedale Terrier'),(50,2,'American Pit Bull Terrier'),(51,2,'Akita'),(52,2,'American Staffordshire Terrier'),(53,2,'Barbado da Terceira'),(54,2,'Basset Hound'),(55,2,'Beagle'),(56,2,'Bichon Maltês'),(57,2,'Boerboel'),(58,2,'Border Collie'),(59,2,'Boston Terrier'),(60,2,'Boxer'),(61,2,'Braco Alemão '),(62,2,'Bull Terrier'),(63,2,'Bulldog Americano'),(64,2,'Bulldog Francês'),(65,2,'Bulldog Inglês '),(66,2,'BullMastiff'),(67,2,'Cane Corso'),(68,2,'Caniche'),(69,2,'Cão de Castro Laboreiro'),(70,2,'Cão da Serra da Estrela'),(71,2,'Cão da Serra de Aires'),(72,2,'Cão de Água'),(73,2,'Cão de Fila de São Miguel'),(74,2,'Cão de Gado Transmontano '),(75,2,'Chihuahua'),(76,2,'Cão de montanha de Berna'),(77,2,'Cão do Barrocal Algarvio'),(78,2,'Cavalier King Charles Spaniel'),(79,2,'Chow Chow'),(80,2,'CockerSpaniel Inglês'),(81,2,'Dougue Argentino'),(82,2,'Dachshund'),(83,2,'Dalmata'),(84,2,'Dobermann'),(85,2,'Dougue de Bordéus '),(86,2,'English Springer Spaniel'),(87,2,'Galgo'),(88,2,'Golden Retriever'),(89,2,'Grand Danois'),(90,2,'Labrador'),(91,2,'Greyhound'),(92,2,'Husky'),(93,2,'Lhasa Apso'),(94,2,'Pastor Alemão '),(95,2,'Malamute do Alasca'),(96,2,'Pequinês'),(97,2,'Pinscher'),(98,2,'Rottweiler'),(99,2,'Pug'),(100,2,'Rough Collie'),(101,2,'São Bernardo'),(102,2,'Shar Pei'),(103,2,'Schnauzer'),(104,2,'Scottish Terrier'),(105,2,'Shih Tzu'),(106,2,'Weimaraner'),(107,2,'Terra Nova'),(108,2,'Whippet'),(109,2,'Outra (Cão)'),(110,2,'Yorkshire Terrier');
/*!40000 ALTER TABLE `nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nif` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_id` int(10) unsigned DEFAULT NULL,
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imgPath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_animal` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_animals_id_fk` (`id_animal`),
  CONSTRAINT `photos_animals_id_fk` FOREIGN KEY (`id_animal`) REFERENCES `animals` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (2,'Caniche - Lulu','images/animal/lulu_001.jpg',1),(3,'Gato - Joly','images/animal/jolly_001.jpg',3),(4,NULL,'images/animal/afonso_001.jpg',9),(5,NULL,'images/animal/Ambrosio_001.jpg',19),(6,NULL,'images/animal/Arguilias_001.jpg',13),(7,NULL,'images/animal/becas_001.jpg',2),(8,NULL,'images/animal/brutus_001.jpg',17),(9,NULL,'images/animal/Buscape_001.jpg',15),(10,NULL,'images/animal/Esdrubal_001.jpg',14),(11,NULL,'images/animal/fausto_001.jpg',7),(12,NULL,'images/animal/fofa_001.jpg',20),(13,NULL,'images/animal/freddy_001.jpg',11),(14,NULL,'images/animal/Geraldina_001.jpg',18),(15,NULL,'images/animal/henriques_001.jpg',10),(16,NULL,'images/animal/Jiancarlo_001.jpg',5),(17,NULL,'images/animal/limao_001.jpg',4),(18,NULL,'images/animal/manson_001.jpg',12),(19,NULL,'images/animal/miguel_001.jpg',8),(20,NULL,'images/animal/pucci_001.jpg',6);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` VALUES (1,'Pequeno'),(2,'Medio'),(3,'Grande');
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nif` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `nif_UNIQUE` (`nif`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `fk_address_id_idx` (`address_id`),
  KEY `fk_user_address_id_idx` (`address_id`),
  CONSTRAINT `fk_user_address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Simão','Pedro','simao.s.pedro@gmail.com','242218040','912345678','simaopedro','ozFqrgfw1RzFo-RJJUXCx9CI87lv5vDN','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605220994,1605220994,'t5AYTA0WgGx92sREwUOoJBqE4la2P2yt_1605220994',1),(2,'Cátia','Bessa','katyb@gm.pt','242319123','918765432','katy','EgIapFuHmRab0fz93bDuEm6kaCC2FkAM','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605224315,1605224315,'LvelSObJ7seAS_lCQEgtODzhg0dBJJRr_1605224315',2),(3,'Ricardo','Lopes','ricardolopes@gm.pt','242517987','963524871','ricardolopes','yI1GZZmscmpCNaxLLaKe6G7jM3CEL5gx','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605291218,1605291218,'3SYTOgQE_8A91wqGl7KGRS9MQ0HOh8ZP_1605291218',3),(4,'Cláudia','Valente','claudiavalente@gm.pt','252456839','933564712','claudiavalente','GWVzgG4hfNVyIeAn9M5n5iDMwjfG9dit','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605291387,1605291387,'TymcG-CiB4CS_811nBYJqrGdoDRiOEZv_1605291387',4),(5,'Martim','Gaspar','martimgaspar@gm.pt','252678934','928736451','martimgaspar','mJMoGHev31YDP8M3J3yXfJRjFDdhhQyN','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605295368,1605295368,'7YIOqMoSC_ArzHFlQy97Xyl90zdxj2Gp_1605295368',5),(6,'José','Miguel','zemigas@gm.pt','196783526','915463728','zemigas','w71yoafkeRfTeWZgDZGhY1mgxH3fdQEU','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605295493,1605295493,'ipBbZ01J0lr8wtoQdxJnYukQr8ckkg8q_1605295493',6),(8,'Rita','Alves','rita@gmail.com','123555658','917544885','rita','7rdixwM38038Z5xE-nyTCPPzaIWk7wtB','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306410,1605306410,'E5FjYLglm4oK4iF9mXGtbR_zkOg-e5ns_1605306410',8),(9,'Joao','Mendes','joao@gmail.com','111555452','915583126','joao','6GsrKnJwEnEwHcsVhEuEbLvB6UZyVmfK','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306887,1605306887,'_-If8lte1_aNFClUyb2znlb0FD_0SKv1_1605306887',9),(10,'Rafael','Gomes','rafael@ipl.com','186522447','915425664','rafael','FPa-bBvu9O6fi8VYoIA01-w5czTGwSR5','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306920,1605306920,'xvdNNqDGyihDcLyblmFzhITh5jOszx8a_1605306920',10),(11,'Ana','Santos','ana@ipl.com','147525248','965546232','ana','qj4AkBZpVcAFj5donJQ-VgIcOolO5IKU','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306941,1605306941,'FreHllJDkC66eup4plz9BcypvOA2Krr7_1605306941',11),(12,'Patricia','Alverca','patricia@ipl.com','146822454','965214653','patricia','hUMmy_-cb4hGriI5bUTQQVBIjS_Ug7Hq','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306969,1605306969,'dFp9tmmyKF94DpGqlwF6GxrKglp9Wd6v_1605306969',12),(13,'Tania','Monteiro','tania@ipl.com','254127655','915852045','tania','ai9UHtObJk_PD6PSQPX_gD7SPFHVvj2b','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306985,1605306985,'UPnxKzJST2JkgSAPX8bAuBPcOfl1zxbO_1605306985',13),(14,'Telmo','Jesus','telmo@ipl.com','268421455','934623455','telmo','jGWbLPFsklsEVgbFUukkUC7jYVjq4_hO','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605306999,1605306999,'zHGeA4TsN6VRBRROluzgX15xnou5m-XT_1605306999',14),(15,'Tiago','Ribeiro','tiago@ipl.com','215592312','965422355','tiago','71Mz993_1MuqkfggzzdgKMYpmnnteJEQ','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307023,1605307023,'pGRVYwvOd_ie-WJFhu_1-_WspgUUiCeL_1605307023',15),(16,'Jessica','Silva','jessica@ipl.com','196246633','934524875','jessica','2q19kl4FBD88OeVOaeM1SN8lN-x3UTpW','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307047,1605307047,'R7bt092u0pKC7JEqSh1o1r-Is0YuJCeY_1605307047',16),(17,'Antonio','Simões','antonio@ipl.com','175300645','916578521','antonio','M5cGOzNYdtyRpkLdZNEJ9D5C-8ZCXaFV','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307061,1605307061,'YXySG72mwz8Up3PrOx46xNmHCnBeiBt4_1605307061',17),(18,'Fernando','Fernandes','fernando@ipl.com','298422361','962174114','fernando','5BZe7exNxtFjgzd5l3wq7etjcmnONi7t','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307078,1605307078,'7hzrd3UpONBHDDSErhCMH20gIuZumP7P_1605307078',18),(19,'Sonia','Mendes','sonia@ipl.com','146539523','937852455','sonia','U4hqVHpPpWjK6pUsk600DCrbXbUN_m-b','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307094,1605307094,'DfeE2TC98oMhEiLhzTXJyIMN5jHIeIJz_1605307094',19),(20,'Pedro','Ribeiro','pedro@ipl.com','136522663','932785248','pedro','Cwy5gwOdYe6DtbgagqH5bXNmQcZMWICm','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605307111,1605307111,'YZjpe94o75TvIsJCpNEfZb88NyMcv53a_1605307111',20),(21,'Diogo','Lopes','diogo@ipl.com','125532487','915239415','diogo','fi7JHXIJIWd9aepoI5y6ndaPkxcuyL4z','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605308218,1605308218,'j3FF2EF-zu2fWA7MjmkCYTjD2kA_J8br_1605308218',21),(22,'Diana','Antunes','diana@ipl.com','268758567','965224654','diana','dOTC79z4dSH_8DQuUCV5KoEV02gOFyR6','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605308239,1605308239,'pV0U5zDbF32B7MeR7NRzmpkq0QU0aLQe_1605308239',22),(23,'Manuel','Carlos','manecas@ipl.pt','231564897','987654321','manecas','z6ny9PqXrRX6DFVxqQKWl9wV3kNYQtTS','$2y$13$dGwOrHksMBVq4R2KOP13funEPVNsSSSEtwqo/apSnX8LwTlN4qW2S',NULL,10,1605378335,1605461899,'2JkjKV2RobCqqWX45VUPHzgv4inafjFz_1605378335',31),(24,'Asdrubal','Gertrudes','asdrubal@ipl.pt','123456789','967845321','asdrubal','ACXeGdiP6Vp4mkjERdUh_y3CYhcK0Lil','$2y$13$M1eTcXY2R262OZXOS.yWOecfGKgwbamnPCjYH5QjnjTunvUsJVnqO',NULL,10,1605963196,1605964863,'2xzQ0WBGpQSo-EeNpOrhjNzyYtfwyvLp_1605963196',32);
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

-- Dump completed on 2020-11-29 22:58:33
