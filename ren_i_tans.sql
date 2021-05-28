-- MySQL dump 10.13  Distrib 8.0.17, for osx10.14 (x86_64)
--
-- Host: localhost    Database: tainanRen_i
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `tan_list`
--

DROP TABLE IF EXISTS `tan_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tan_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tan_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tan_list`
--

LOCK TABLES `tan_list` WRITE;
/*!40000 ALTER TABLE `tan_list` DISABLE KEYS */;
INSERT INTO `tan_list` VALUES (1,'00其他\r'),(2,'A01育誠\r'),(3,'A02育皖\r'),(4,'A03育勝\r'),(5,'A04育泉\r'),(6,'A05育華\r'),(7,'A06育發\r'),(8,'A07育俊\r'),(9,'A08興義\r'),(10,'A09慈霖\r'),(11,'A10育敬\r'),(12,'A11育昶\r'),(13,'A12育中\r'),(14,'A13育霖\r'),(15,'A14育尊\r'),(16,'A15育忠\r'),(17,'A16育順\r'),(18,'A17育泰\r'),(19,'A18育曜\r'),(20,'A19育仁\r'),(21,'A20育愛\r'),(22,'A21育鴻\r'),(23,'B22育妙\r'),(24,'B23育慧\r'),(25,'B24育尚\r'),(26,'B25育德\r'),(27,'B26育群\r'),(28,'B27育昂\r'),(29,'B28育恆\r'),(30,'B29育勤\r'),(31,'B30育騰\r'),(32,'B31育達\r'),(33,'B32育全\r'),(34,'B33育本\r'),(35,'B34育謙\r'),(36,'B35育毅\r'),(37,'C36育亨\r'),(38,'C37育恭\r'),(39,'C38育成\r'),(40,'C39育賢\r'),(41,'C40育普\r'),(42,'C41育展\r'),(43,'C42育英\r'),(44,'C43育昌\r'),(45,'C44育宣\r'),(46,'C45育隆');
/*!40000 ALTER TABLE `tan_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-28 22:12:41
