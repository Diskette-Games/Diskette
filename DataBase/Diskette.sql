CREATE DATABASE  IF NOT EXISTS `diskette` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `diskette`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: diskette
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `chave_de_jogos`
--

DROP TABLE IF EXISTS `chave_de_jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chave_de_jogos` (
  `id_key` int(11) NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(100) NOT NULL,
  `chave_jogo` varchar(100) NOT NULL,
  `descrincao_jogo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chave_de_jogos`
--

LOCK TABLES `chave_de_jogos` WRITE;
/*!40000 ALTER TABLE `chave_de_jogos` DISABLE KEYS */;
/*!40000 ALTER TABLE `chave_de_jogos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criar_usuario`
--

DROP TABLE IF EXISTS `criar_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criar_usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usu` varchar(100) NOT NULL,
  `sobrenome_usu` varchar(100) NOT NULL,
  `name_tag` varchar(20) DEFAULT NULL,
  `sexo_usu` varchar(1) NOT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `pais_usu` varchar(5) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email_usu` varchar(100) NOT NULL,
  `senha_usu` varchar(100) NOT NULL,
  `biografia_usu` varchar(300) DEFAULT NULL,
  `controle_de_restricao` int(11) NOT NULL,
  `celular` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criar_usuario`
--

LOCK TABLES `criar_usuario` WRITE;
/*!40000 ALTER TABLE `criar_usuario` DISABLE KEYS */;
INSERT INTO `criar_usuario` VALUES (6,'Administrador','Supremo','ADM','M','12/12/1998','BRA','111.111.111-11','admin@diskette.com','21232f297a57a5a743894a0e4a801fc3','gera ou não?',1,'(11) 1 1111-1111'),(7,'Usuario','Normal','USU','M','12/12/1998','BRA','111.111.111-11','usuario@diskette.com','21232f297a57a5a743894a0e4a801fc3','Usuario Normal Acesso',2,'(11) 1 1111-1111'),(8,'mirelly','araujo','Miry','F','30/06/1998','BRA','111.111.111-11','mirelly.araujo@diskette.com','21232f297a57a5a743894a0e4a801fc3','Cachorra',2,'(11) 1 1111-1111');
/*!40000 ALTER TABLE `criar_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagens`
--

DROP TABLE IF EXISTS `imagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagens` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(1000) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'diskette'
--

--
-- Dumping routines for database 'diskette'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-23 11:19:13
