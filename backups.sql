-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: book_engage
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `adminregister`
--

DROP TABLE IF EXISTS `adminregister`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminregister` (
  `A_ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`A_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminregister`
--

LOCK TABLES `adminregister` WRITE;
/*!40000 ALTER TABLE `adminregister` DISABLE KEYS */;
INSERT INTO `adminregister` VALUES (1,'Ajay Kumar','ajay.kumar@gmail.com','12345','2002-11-06'),(2,'Bharti Kumari','bharti@gmail.com','123456','2000-05-13'),(3,'Shyam','shyam@gmail.com','8shyam','2001-02-17'),(4,'Naitik','naitik01@gmail.com','9naitik','1992-05-01'),(5,'Juhi','juhi14@gmail.com','juhi9','1995-08-06');
/*!40000 ALTER TABLE `adminregister` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` longblob,
  `quantity` int DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `name` varchar(50) DEFAULT NULL,
  `number` varchar(13) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `method` varchar(20) DEFAULT NULL,
  `flat` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pin_code` int DEFAULT NULL,
  `total_product` varchar(10) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `Rent_Days` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` longblob,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (31,'C',85,_binary 'computer_sc1.jpg','Balaguruswamy'),(33,'Physics',67,_binary 'Physics.jpg','NCERT'),(36,'MySQL',87,_binary 'computer_sc4.jpg','McGrawHill'),(37,'JAVA(7th edition)',89,_binary 'computer_sc2.jpg','McGrawHill'),(38,'Data structure',78,_binary 'computer_sc3.jpg','Reema thareja'),(39,'Wings of Fire',56,_binary 'Biography1.jpg','Dr. APJ Kalam'),(40,'Why Not Me?',67,_binary 'Biography2.jpg','Anubhav Agrawal'),(41,'Mathematics',45,_binary 'Maths.jpg','NCERT'),(42,'Quantitative Aptitude',103,_binary 'Bank exam.jpeg','S.Chand');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'shre','shreya@gmail.com','12shre','2000-12-10'),(2,'Iksha','iksha98@gmail.com','iksha','2002-11-21'),(3,'shahina','shahina11@gmail.com','123sha','2022-11-24'),(4,'Mansi','mansi@gmail.com','mansi17','2022-11-14'),(5,'simran','simran16@gmail.com','sim121','2001-10-09'),(6,'Vaibhav','vaibhav@gmail.com','vaib123','2021-01-15'),(7,'sonal','sonal12@gmail.com','sona121','2001-09-05'),(8,'Bunty','bunty@gmail.com','bunty12','2000-11-25'),(12,'Aman','aman02@gmail.com','98aman','2022-12-08'),(13,'Hrithik raj','hrithik06@gmail.com','raj06','2000-08-06'),(14,'Shreya Agrawal','shreya22@gmail.com','shre22','2000-08-04');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `number` char(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `flat` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` int DEFAULT NULL,
  `total_products` varchar(200) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `Rent_days` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent`
--

LOCK TABLES `rent` WRITE;
/*!40000 ALTER TABLE `rent` DISABLE KEYS */;
INSERT INTO `rent` VALUES (1,' Hrithik raj','8764336679','hrithik06@gmail.com','cash on delivery','98','Gandhi Maidan','Patna','Bihar',990668,'C (1 ), Wings of Fire (1 )',141,'5 Days'),(3,' Shreya Agrawal','9876546360','shreya22@gmail.com','cash on delivery','06','Sector 03','South West Delhi','Delhi',110000,'Why Not Me? (1 )',67,'15 Days'),(4,' Iksha','8976656707','iksha98@gmail.com','cash on delivery','3088','Sikandarpur','Muzaffarpur','Bihar',986768,'MySQL (1 )',87,'4 Days'),(5,' Mansi','9886546','mansi@gmail.com','cash on delivery','098','Near Ambedkar Park','Badshahnagar','Lucknow',986869,'Wings of Fire (1 )',56,'10 Days'),(6,' sonal','9875454007','sonal12@gmail.com','cash on delivery','23','Bailey road','Hajipur','Bihar',809789,'JAVA(7th edition) (1 )',89,'4 Days'),(7,' simran','655644379','simran16@gmail.com','cash on delivery','45','Sector 12','Darbhanga','Bihar',550075,'C (1 )',85,'10 Days'),(8,' shahina','7777735650','shahina11@gmail.com','cash on delivery','16','Katras','Dhanbad','Jharkhand',898778,'MySQL (1 ), Quantitative Aptitude (1 )',190,'1 week'),(9,' Vaibhav','8976545550','vaibhav@gmail.com','cash on delivery','15','Saraiyaganj','Muzaffarpur','Bihar',876765,'JAVA(7th edition) (1 )',89,'1 month');
/*!40000 ALTER TABLE `rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(15) DEFAULT NULL,
  `flat` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-10 23:47:39
