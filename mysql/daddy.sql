-- MySQL dump 10.13  Distrib 5.1.42, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: daddy
-- ------------------------------------------------------
-- Server version	5.1.42

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
-- Current Database: `daddy`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `daddy` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `daddy`;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL DEFAULT '',
  `category_description` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (13,'ÐŸÐ¾Ñ‚Ð¾Ñ‡Ð½Ð¸ Ð»Ð¸Ð½Ð¸Ð¸','ÐŸÐ¾Ñ‚Ð¾Ñ‡Ð½Ð¸ Ð»Ð¸Ð½Ð¸Ð¸ Ð¾Ñ‚ Ð²ÑÑÐºÐ°ÐºÑŠÐ² Ñ‚Ð¸Ð¿ Ð¸ ÑÑŠÑ Ð²ÑÑÐºÐ°ÐºÐ²Ð¾ Ð¿Ñ€ÐµÐ´Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ. Ð’ Ñ‚Ð°Ð·Ð¸ ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ñ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð´Ð° Ð½Ð°Ð¼ÐµÑ€Ð¸Ñ‚Ðµ Ð¿Ð¾Ñ‚Ð¾Ñ‡Ð½Ð¸ Ð»Ð¸Ð½Ð¸Ð¸ Ð·Ð° Ñ‚ÐµÐºÑÑ‚Ð¸Ð»Ð½Ð°Ñ‚Ð° , Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÐµÐ»Ð½Ð¾-Ð²ÐºÑƒÑÐ¾Ð²Ð°Ñ‚Ð° Ð¿Ñ€Ð¾Ð¼Ð¸ÑˆÐ»ÐµÐ½Ð¾ÑÑ‚, Ð¸ Ñ€Ð°Ð·Ð½Ð¸ Ð´Ñ€ÑƒÐ³Ð¸'),(1,'ÐžÐ±Ñ‰Ð° ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ñ','ÐšÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ñ Ð² ÐºÐ¾ÑÑ‚Ð¾ Ð²Ð»Ð¸Ð·Ð°Ñ‚ Ð²ÑÐ¸Ñ‡ÐºÐ¸ Ð½ÐµÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ð·Ð¸Ñ€Ð°Ð½Ð¸ Ð¾Ñ‚ Ð½Ð°Ñ Ð´Ð¾ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ð° Ð¸Ð·Ð´ÐµÐ»Ð¸Ñ Ð¸ ÑƒÑÐ»ÑƒÐ³Ð¸. ÐžÐ±Ð¸ÐºÐ½Ð¾Ð²ÐµÐ½Ð½Ð¾ Ñ‚ÑƒÐº ÑÐ° ÑÑŠÐ²ÑÐµÐ¼ Ð¿Ñ€ÐµÑÐ½Ð¸Ñ‚Ðµ Ð½Ð¸ Ð¿Ð¾Ð¿ÑŠÐ»Ð½ÐµÐ½Ð¸Ñ'),(6,'ÐœÐµÑ‚Ð°Ð»Ð¾Ñ€ÐµÐ¶ÐµÑ‰Ð¸ Ð¼Ð°ÑˆÐ¸Ð½Ð¸','Ñ€ÐµÐ¶Ðµ Ð¼Ð°Ñ‚Ð°Ð»'),(8,'Ð”ÐµÑ‚Ð°Ð¹Ð»Ð¸','ÐšÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸ÑÑ‚Ð° ÑÐµ Ð¾Ñ‚Ð½Ð°ÑÑ Ð·Ð° Ð¼Ð°ÑˆÐ¸Ð½Ð½Ð¸ Ð´ÐµÑ‚Ð°Ð¹Ð»Ð¸'),(10,'ÐžÐ±Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ¸ Ð¸ Ñ€ÐµÐ¼Ð¾Ð½Ñ‚Ð¸','ÐšÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸ÑÑ‚Ð° ÑÐµ Ð¾Ñ‚Ð½Ð°ÑÑ Ð´Ð¾ Ñ€ÐµÐ¼Ð¾Ð½Ñ‚Ð¸ Ð½Ð° Ð¼Ð°ÑˆÐ¸Ð½Ð¸ ÐºÐ°ÐºÑ‚Ð¾ Ð¸ Ð´Ð¾ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ¸ Ð½Ð° Ð¿Ð¾Ð²Ñ€ÐµÐ´ÐµÐ½Ð¸ Ð´ÐµÑ‚Ð°Ð¹Ð»Ð¸'),(12,'Ð”Ñ€ÑƒÐ³Ð¸','Ð Ð°Ð·Ð½Ð¾Ð¾Ð±Ñ€Ð°Ð·Ð½Ð¸ Ð´Ñ€ÑƒÐ³Ð¸ Ð¼Ð°ÑˆÐ¸Ð½Ð¸ Ð¸ ÐµÐ»ÐµÐ¼ÐµÐ½Ñ‚Ð¸ ÐºÐ¾Ð¸Ñ‚Ð¾ Ð½Ðµ Ð¿Ñ€Ð¸Ð½Ð°Ð´Ð»ÐµÐ¶Ð°Ñ‚ ÐºÑŠÐ¼ Ð½Ð¸ÐºÐ¾Ñ Ð¾Ñ‚ Ð¾Ð±Ñ‰Ð¸Ñ‚Ðµ ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ð¸ Ð¿Ð¾Ñ€Ð°Ð´Ð¸ Ñ€ÐµÐ´ÐºÐ¸Ñ‚Ðµ ÑÐ¸ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ , Ð¸Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð²Ð°Ð½Ð¸ Ð¾Ñ‚ Ñ„Ð¸Ñ€Ð¼Ð°Ñ‚Ð°');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `contact_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(200) NOT NULL DEFAULT '',
  `phone` int(20) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'ÐÐ¸ÐºÐ¾Ð»Ð°Ð¹ Ð Ð¾Ð´Ð¾Ð·Ð¾Ð²',897267179,'eurorem@abv.bg'),(3,'ÐœÐ¸Ñ€Ñ‡Ð¾ Ð Ð¾Ð´Ð¾Ð·Ð¾Ð²',878795577,'frozenbrain11@abv.bg');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `message_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `back_contact` varchar(100) NOT NULL DEFAULT '',
  `message` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'ÐœÐ¸Ñ€Ñ‡Ð¾ Ð¤Ð°ÐºÐ¸Ñ€Ñ‡Ð¾','frozenbrain11@abv.bg','0878695577','Ð¸ÑÐºÐ°Ð¼ Ð´Ð° Ð²Ð¸ ÐºÐ°Ð¶Ð° Ñ‡Ðµ ÑÑ‚Ðµ Ñ‚Ñ€Ð°Ð»Ð°Ð»Ð° ÑÐµÐ»ÑÑ†Ð¸ :-)');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `order_name` varchar(500) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(500) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (11,'Ð¼Ð°ÑˆÐ¸Ð½ÐºÐ° Ð·Ð° ÑÑ‚Ð¾Ñ‚Ð¸Ð½ÐºÐ¸','email@mamati.com','08080808','Ð¼Ð°ÑˆÐ¸Ð½ÐºÐ° Ð·Ð° Ð½ÐµÑ‰Ð¾ ÑÐ¸ Ñ‚Ð°Ð¼','0000-00-00'),(27,'Ñ‚Ñ€Ð°Ð»ÑÐ»Ñ','Ð°ÑÐ´Ð°ÑÐ´','Ð°ÑÐ´Ð°ÑÐ´Ð°ÑÐ´','Ð¾Ñ„ Ñ‚Ð¸ ÑÐ¸ Ð¿ÑŠÐ»ÐµÐ½ ÐºÐµÐ»ÐµÑˆ','0000-00-00'),(20,'ÐŸÑƒÑ‚ÐºÐ¾ ÐœÐ°Ñ„Ð°Ð½Ð¸','lqlqlqlql','8937495898','lqlqlqlqlqlq','0000-00-00'),(15,'Ð½ÑÐºÐ²Ð¾ ÑÐ¸ Ñ‚Ð°Ð¼','email','telefon','Ð¼Ð°ÑˆÐ¸Ð½ÐºÐ° Ð·Ð° Ð½ÐµÑ‰Ð¾ ÑÐ¸ Ñ‚Ð°Ð¼','0000-00-00'),(18,'Ð»ÑÐ»ÑÐ»Ñ','frozenbrain11@abv.bg','72346587435','Ñ‚Ñ€Ð°Ð»Ð°Ð»Ð°Ð°Ð»','0000-00-00'),(25,'Ð»ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»','ÑÐ»ÑÐ»Ð»ÑÐ»ÑÐ»ÑÐ»Ñ','ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»','Ð»ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»ÑÐ»','0000-00-00'),(28,'Ð°ÑÐ´','Ð°ÑÐ´','Ð°ÑÐ´','Ð°ÑÐ´','0000-00-00'),(29,'Ð”ÐµÑ‚Ð°Ð¹Ð»Ð¸ Ð·Ð° Ð·ÑŠÐ±Ð¾Ð»ÐµÐºÐ°Ñ€ÑÐºÐ¸ ÑÑ‚Ð¾Ð»','eurorem@abv.bg','9809809808908','ÑÑ‡ÑƒÐ¿Ð¸Ð»Ð¾ Ð¼Ð¸ ÑÐµ Ðµ Ð½ÐµÑ‰Ð¾ Ð¿Ð¾ ÑÑ‚Ð¾Ð»Ð° ','0000-00-00');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pictures` (
  `id` smallint(10) NOT NULL AUTO_INCREMENT,
  `product_id` smallint(10) NOT NULL,
  `picture_name` varchar(200) NOT NULL DEFAULT '',
  `product_type` smallint(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (1,1,'12.jpeg',1),(2,2,'15.jpeg',1),(8,1,'nqkvasi.png',1),(4,1,'13.jpeg',1),(9,2,'6.jpeg',1),(18,2,'8.jpeg',1),(21,4,'10.jpeg',1),(22,4,'9.jpeg',1),(76,9,'7.jpeg',1),(50,11,'images1.jpeg',2),(27,5,'7.jpeg',1),(28,5,'11.jpeg',1),(29,5,'images2.jpeg',1),(71,8,'images1.jpeg',1),(49,11,'7.jpeg',2),(52,11,'10.jpeg',2),(70,8,'images.jpeg',1),(66,15,'10.jpeg',2),(75,9,'6.jpeg',1),(68,8,'9.jpeg',1),(77,18,'images1.jpeg',2),(78,18,'15.jpeg',2),(102,10,'front7.jpg',1),(80,20,'images.jpeg',2),(103,11,'images.jpeg',1),(101,27,'front3.jpg',2),(100,27,'front7.jpg',2),(99,27,'images2.jpeg',2),(90,25,'nqkvasi2.png',2),(104,12,'14.jpeg',1),(105,13,'images2.jpeg',1),(106,14,'14.jpeg',1),(107,15,'images2.jpeg',1),(108,16,'Ð˜Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ1244.jpg',1),(109,17,'desktop1.png',1),(110,18,'desktop.png',1),(111,1,'desktop.png',1),(112,1,'images.jpeg',1),(113,28,'frontpicture2.jpg',2),(114,28,'front7.jpg',2),(115,29,'nqkvasi.png',2),(117,29,'images.jpeg',2);
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(500) NOT NULL DEFAULT '',
  `product_description` varchar(500) NOT NULL DEFAULT '',
  `category_id` smallint(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Ð¼Ð°ÑˆÐ¸Ð½Ð° 1','Ð¿Ñ€Ð°Ð²Ð¸ ÐºÐ²Ð¾Ñ‚Ð¾ ÐºÐ°Ð¶ÐµÑˆ',13),(2,'Ð¼Ð°ÑˆÐ¸Ð½Ð° 2','Ð¿Ñ€Ð°Ð²Ð¸ Ñ‚Ñ€Ð°Ð»Ð°Ð»Ð°',8),(4,'Ð¼Ð°ÑˆÐ¸Ð½ÐºÐ° 3','Ð¿Ñ€Ð°Ð²Ð¸ Ð½ÐµÑ‰Ð¾ Ð¸ Ñ‚Ñ Ñ‚Ð°Ð¼ ',10),(5,'Ð¼Ð°ÑˆÐ¸Ð½Ð° 4','Ð½ÑÐºÐ²Ð¾ Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ',1),(8,'Ð¼Ð°ÑˆÐ¸Ð½ÐºÐ° Ð·Ð° ÑƒÑˆÐ¸','Ð¿Ñ€Ð¾Ð±Ð¸Ð²Ð° ÐºÑ€Ð°ÐºÐ°',1),(10,'Ð½ÑÐºÐ²Ð° ÑÐ¸ Ñ‚Ð°Ð¼','Ð±Ð»Ð°Ð±Ð»Ð°Ð±Ð»Ð°Ð±Ð»Ð°Ð±Ð»Ð°',8),(11,'Ð»ÑÐ»ÑÐ»ÑÐ»ÑÐ»Ñ','Ñ‚Ñ€Ð°Ð»Ð°Ð»Ð°Ð»Ð°Ð»Ð°',8),(12,'Ð½ÑÐºÑŠÐ² Ð´ÐµÑ‚Ð°Ð¹Ð»','Ð½ÐµÑ‰Ð¾ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ½Ð¾',8),(13,'Ð°ÑÐ´','Ð°ÑÐ´',8),(14,'Ð°ÑÐ´','Ð°ÑÐ´',8),(15,'ÑÐ»ÑÐ»ÑÐ»','Ð»ÑÐ»ÑÐ»ÑÐ»Ñ',8),(9,'Ñ‚Ñ€Ð°Ð»Ð°Ð»Ð°','Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸ÐµÑ‚Ð¾ Ðµ Ð¿ÑŠÐ»Ð½Ð° Ð±Ð¾Ð·Ð° Ð¸ Ð½Ðµ Ð·Ð½Ð°Ð¼ Ð·Ð° ÐºÐ²Ð¾ Ñ‚Ð°ÐºÐ°',1),(16,'ÐœÐ°ÑˆÐ¸Ð½Ð° Ð¾Ð±Ñ‰Ð° ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ñ','Ð½ÐµÑ‰Ð¾ ÑÐ¸ Ñ‚Ð°Ð¼',1),(17,'Ð¼Ð°ÑˆÐ¸Ð½Ð° Ð·Ð° ÑÐµÐ¼ÐºÐ¸','Ð½ÑÐºÐ²Ð¾ Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ',1),(18,'Ð¼Ð¾ÑÑ‚ Ð´ÐµÑÐºÑ‚Ð¾Ð¿ - Ð¾Ñ‚Ð½Ð¾Ð²Ð¾','Ð¼Ð¾ÑÑ‚ Ð´ÐµÑÐºÑ‚Ð¾Ð¿',6);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `service_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(200) NOT NULL DEFAULT '',
  `service_description` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'Ñ€ÐµÐ´Ñ Ð¿Ð°Ñ€ÐºÐµÑ‚','Ñ€ÐµÐ´Ð¸ Ñ†Ð¸ÐºÐ»Ð¸ Ð¿Ð¾Ð»Ð¸Ñ€Ð°'),(4,'Ð½ÐµÑ‰Ð¾ ÑÐ¸','Ð½ÐµÑ‰Ð¾ ÑÐ¸ Ñ‚Ð°Ð¼'),(5,'Ð»ÐµÐ¿Ð¸ Ð¿Ð»Ð¾Ñ‡ÐºÐ¸,Ð¿Ð¾Ñ‡Ð¸ÑÑ‚Ð²Ð°','Ð¿Ð¾Ð»Ð¸Ñ€Ð° Ð¼Ð¸Ðµ Ð¿ÐµÑ€Ðµ Ð³Ð¾Ñ‚Ð²Ð¸');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-02-10 17:46:47
