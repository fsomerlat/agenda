-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: agenda
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.17.04.1

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
-- Table structure for table `teCliente`
--

DROP TABLE IF EXISTS `teCliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teCliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpNomeCliente` varchar(255) NOT NULL,
  `cpTelefone` varchar(20) NOT NULL,
  `cpEmail` varchar(255) DEFAULT NULL,
  `cpCep` varchar(20) NOT NULL,
  `cpRua` varchar(255) NOT NULL,
  `cpBairro` varchar(255) NOT NULL,
  `cpCidade` varchar(255) NOT NULL,
  `cpEstado` char(2) NOT NULL,
  `cpObservacao` text,
  `cpRgCliente` varchar(15) NOT NULL,
  `cpOrgaoExpedidorRgCliente` varchar(10) NOT NULL,
  `cpSobreNomeCliente` varchar(100) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teCliente`
--

LOCK TABLES `teCliente` WRITE;
/*!40000 ALTER TABLE `teCliente` DISABLE KEYS */;
INSERT INTO `teCliente` VALUES (4,'Fabio',' (31)99180-3131','fsomerlat@gmail.com','32241150','Rua Pégaso','Jardim Riacho das Pedras','Contagem','MG','','','',''),(5,'Amanda','(31) 8668-0664','amanda@gmail.com','32241-150','Rua Pégaso','Jardim Riacho das Pedras','Contagem','MG','','','','');
/*!40000 ALTER TABLE `teCliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teProfissional`
--

DROP TABLE IF EXISTS `teProfissional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teProfissional` (
  `idProfissional` int(11) NOT NULL AUTO_INCREMENT,
  `cpNomeProfissional` varchar(255) NOT NULL,
  `cpCepProfissional` varchar(15) NOT NULL,
  `cpRuaProfissional` varchar(2555) NOT NULL,
  `cpBairroProfissional` varchar(255) NOT NULL,
  `cpCidadeProfissional` varchar(255) NOT NULL,
  `cpEstadoProfissional` char(2) NOT NULL,
  `cpTelefoneProfissional` varchar(20) NOT NULL,
  `cpEmailProfissional` varchar(255) NOT NULL,
  `cpObservacaoProfissional` text NOT NULL,
  `cpDataEntrada` varchar(20) NOT NULL,
  `cpDataSaida` int(11) DEFAULT NULL,
  `cpEspecilidadeProfissional` varchar(100) NOT NULL,
  `cpSobreNomeProfissional` varchar(100) NOT NULL,
  `cpRgProfissional` varchar(10) NOT NULL,
  `cpOrgaoExpedidorRgProfissional` varchar(10) NOT NULL,
  PRIMARY KEY (`idProfissional`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teProfissional`
--

LOCK TABLES `teProfissional` WRITE;
/*!40000 ALTER TABLE `teProfissional` DISABLE KEYS */;
INSERT INTO `teProfissional` VALUES (5,'Fabio','32241-150','Rua Pégaso','Jardim Riacho das Pedras','Contagem','MG','(31) 9180-3131','fsomerlat@gmail.com','Desenvolvedor de sistemas','14/05/2017 22:32:51',NULL,'','','',''),(6,'Amanda','32241-150','Rua Pégaso','Jardim Riacho das Pedras','Contagem','MG','(31) 8668-0664','amanda@gmail.com','Nutricionista','14/05/2017 22:33:27',NULL,'','','',''),(7,'Jonatas','32241-360','Rua Libra','Jardim Riacho das Pedras','Contagem','MG','(31) 3665-6565','jonatas@gmail.com','Dentista','14/05/2017 22:34:16',NULL,'','','','');
/*!40000 ALTER TABLE `teProfissional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teServico`
--

DROP TABLE IF EXISTS `teServico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teServico` (
  `idServico` int(11) NOT NULL AUTO_INCREMENT,
  `cpNomeServico` varchar(255) NOT NULL,
  `cpValorServico` float NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teServico`
--

LOCK TABLES `teServico` WRITE;
/*!40000 ALTER TABLE `teServico` DISABLE KEYS */;
INSERT INTO `teServico` VALUES (1,'Corte masculio',15),(19,'Progressiva ',100),(21,'Hidratação',50);
/*!40000 ALTER TABLE `teServico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsUsuario`
--

DROP TABLE IF EXISTS `tsUsuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsUsuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `cpNome` varchar(255) NOT NULL,
  `cpSenha` varchar(60) NOT NULL,
  `cpStatus` char(1) NOT NULL DEFAULT 'A',
  `cpNivelAcesso` char(1) NOT NULL DEFAULT 'C',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsUsuario`
--

LOCK TABLES `tsUsuario` WRITE;
/*!40000 ALTER TABLE `tsUsuario` DISABLE KEYS */;
INSERT INTO `tsUsuario` VALUES (190,'Amanda','40bd001563085fc35165329ea1ff5c5ecbdbbeef','B','S'),(194,'Fabio','40bd001563085fc35165329ea1ff5c5ecbdbbeef','A','A'),(195,'Juliana','40bd001563085fc35165329ea1ff5c5ecbdbbeef','A','S'),(196,'Leo','40bd001563085fc35165329ea1ff5c5ecbdbbeef','A','C'),(197,'Carla','40bd001563085fc35165329ea1ff5c5ecbdbbeef','A','S');
/*!40000 ALTER TABLE `tsUsuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuAgenda`
--

DROP TABLE IF EXISTS `tuAgenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuAgenda` (
  `idAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `teCliente_idCliente` int(11) NOT NULL,
  `cpClienteNaoCadastrado` varchar(255) DEFAULT NULL,
  `teServico_idServico` int(11) NOT NULL,
  `cpDataAgendamento` varchar(15) NOT NULL,
  `cpHoraAgendamento` varchar(5) NOT NULL,
  `cpObservacao` text,
  `cpDataCancelamento` varchar(20) DEFAULT NULL,
  `cpObservacaoAgenda` varchar(45) DEFAULT NULL,
  `teProfissional_idProfissional` int(11) NOT NULL,
  PRIMARY KEY (`idAgenda`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuAgenda`
--

LOCK TABLES `tuAgenda` WRITE;
/*!40000 ALTER TABLE `tuAgenda` DISABLE KEYS */;
INSERT INTO `tuAgenda` VALUES (1,5,'NULL',1,'31/05/2017','23:23',NULL,NULL,'',6),(2,0,'Fabio',1,'31/05/2017','23:23',NULL,NULL,'Com shampo',3);
/*!40000 ALTER TABLE `tuAgenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-27 21:07:44
