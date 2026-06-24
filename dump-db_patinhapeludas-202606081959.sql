-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_patinhapeludas
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_adotantes`
--

DROP TABLE IF EXISTS `tb_adotantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_adotantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_adotante` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `animal_adotado` varchar(150) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `numero_residencia` int(11) NOT NULL,
  `complemento` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_adotantes`
--

LOCK TABLES `tb_adotantes` WRITE;
/*!40000 ALTER TABLE `tb_adotantes` DISABLE KEYS */;
INSERT INTO `tb_adotantes` VALUES (1,'Nan','123456789','12345678','24234234','434234342',344234,'3423423');
/*!40000 ALTER TABLE `tb_adotantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_informacoes_gatos`
--

DROP TABLE IF EXISTS `tb_informacoes_gatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_informacoes_gatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `vermifugado` tinyint(1) NOT NULL,
  `possui_doenca` varchar(50) DEFAULT NULL,
  `castrado` tinyint(1) NOT NULL,
  `idade` int(2) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_informacoes_gatos`
--

LOCK TABLES `tb_informacoes_gatos` WRITE;
/*!40000 ALTER TABLE `tb_informacoes_gatos` DISABLE KEYS */;
INSERT INTO `tb_informacoes_gatos` VALUES (1,'Rycharlison',1,'',1,2,'./img/NeneRycharlison.jpg'),(2,'Amora',0,'',1,10,'./img/amora.jpg'),(4,'Perubinha',1,'',1,2,'./img/Perubinha.jpg'),(5,'Torresmo',1,'',1,2,'./img/Torresmo.jpg'),(6,'Jorge',1,'Problema pulmonar',1,7,'./img/jorja.jpg'),(7,'Alecrim',1,'',1,1,'./img/alecrim.jpg'),(8,'Calango',1,'',1,1,'./img/calango.jpg'),(9,'Jurubeba',1,'',1,2,'./img/jurubeba.jpg'),(10,'Mexirica',1,'',1,6,'./img/Mexirica.jpg'),(11,'Sheila',1,'',1,1,'./img/My_sheila.jpg'),(12,'Mini Rycharlison',1,'',1,1,'./img/Rycharlison.jpg'),(13,'Sardinha',1,'',1,1,'./img/sardinha.jpg'),(14,'Romeu',1,'',1,2,'./img/Romeuu.jpg');
/*!40000 ALTER TABLE `tb_informacoes_gatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_patinhapeludas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-08 19:59:21
