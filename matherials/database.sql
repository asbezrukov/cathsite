CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

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
-- Table structure for table `Classifieds`
--

DROP TABLE IF EXISTS `Classifieds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classifieds` (
  `id_сlassifieds` int(11) NOT NULL AUTO_INCREMENT,
  `date_publication` date NOT NULL,
  `header` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `important` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_сlassifieds`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classifieds`
--

LOCK TABLES `Classifieds` WRITE;
/*!40000 ALTER TABLE `Classifieds` DISABLE KEYS */;
/*!40000 ALTER TABLE `Classifieds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CourseApplication`
--

DROP TABLE IF EXISTS `CourseApplication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CourseApplication` (
  `id_cappl` int(11) NOT NULL AUTO_INCREMENT,
  `ca_name` varchar(200) NOT NULL,
  `decription` text,
  `id_lecturer` int(11) NOT NULL,
  `literature` varchar(300) DEFAULT NULL,
  `id_file` int(11) NOT NULL,
  PRIMARY KEY (`id_cappl`),
  UNIQUE KEY `id_cappl_UNIQUE` (`id_cappl`),
  KEY `fk_id_lecturer_idx` (`id_lecturer`),
  KEY `fk_id_file_idx` (`id_file`),
  CONSTRAINT `fk_id_file` FOREIGN KEY (`id_file`) REFERENCES `Files` (`id_file`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_lecturer` FOREIGN KEY (`id_lecturer`) REFERENCES `Employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CourseApplication`
--

LOCK TABLES `CourseApplication` WRITE;
/*!40000 ALTER TABLE `CourseApplication` DISABLE KEYS */;
/*!40000 ALTER TABLE `CourseApplication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CoursePapers`
--

DROP TABLE IF EXISTS `CoursePapers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CoursePapers` (
  `id_cp` int(11) NOT NULL AUTO_INCREMENT,
  `designrules` varchar(300) DEFAULT NULL,
  `id_cappl` int(11) NOT NULL,
  `id_theme` int(11) NOT NULL,
  `approved` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_cp`),
  KEY `fk_id_capple_idx` (`id_cappl`),
  KEY `fk_id_theme_idx` (`id_theme`),
  CONSTRAINT `fk_id_capple` FOREIGN KEY (`id_cappl`) REFERENCES `CourseApplication` (`id_cappl`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_theme` FOREIGN KEY (`id_theme`) REFERENCES `CourseThemes` (`id_theme`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CoursePapers`
--

LOCK TABLES `CoursePapers` WRITE;
/*!40000 ALTER TABLE `CoursePapers` DISABLE KEYS */;
/*!40000 ALTER TABLE `CoursePapers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CourseThemes`
--

DROP TABLE IF EXISTS `CourseThemes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CourseThemes` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `spec_number` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `ct_name` varchar(45) NOT NULL,
  `description` text,
  `id_lecturer` int(11) NOT NULL,
  `literature` varchar(150) NOT NULL,
  `id_file` int(11) NOT NULL,
  PRIMARY KEY (`id_theme`),
  UNIQUE KEY `idcrp_UNIQUE` (`id_theme`),
  KEY `fk_id_lecturer_idx` (`id_lecturer`),
  KEY `fk_id_file_idx` (`id_file`),
  KEY `fk_spec_number_idx` (`spec_number`),
  CONSTRAINT `fk_id_file_ct` FOREIGN KEY (`id_file`) REFERENCES `Files` (`id_file`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_lecturer_ct` FOREIGN KEY (`id_lecturer`) REFERENCES `Employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_spec_number_ct` FOREIGN KEY (`spec_number`) REFERENCES `Specialization` (`number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CourseThemes`
--

LOCK TABLES `CourseThemes` WRITE;
/*!40000 ALTER TABLE `CourseThemes` DISABLE KEYS */;
/*!40000 ALTER TABLE `CourseThemes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disciplines`
--

DROP TABLE IF EXISTS `Disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Disciplines` (
  `id_disciplines` int(11) NOT NULL AUTO_INCREMENT,
  `disciplines_name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_disciplines`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disciplines`
--

LOCK TABLES `Disciplines` WRITE;
/*!40000 ALTER TABLE `Disciplines` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disciplines-Employee`
--

DROP TABLE IF EXISTS `Disciplines-Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Disciplines-Employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disciplines` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_idx` (`id_employee`),
  KEY `fk_discipline_idx` (`id_disciplines`),
  CONSTRAINT `fk_discipline` FOREIGN KEY (`id_disciplines`) REFERENCES `Disciplines` (`id_disciplines`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_employee` FOREIGN KEY (`id_employee`) REFERENCES `Employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disciplines-Employee`
--

LOCK TABLES `Disciplines-Employee` WRITE;
/*!40000 ALTER TABLE `Disciplines-Employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disciplines-Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disciplines-Files`
--

DROP TABLE IF EXISTS `Disciplines-Files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Disciplines-Files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disciplines` int(11) NOT NULL,
  `id_files` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_discipline_idx` (`id_disciplines`),
  KEY `fk_file_idx` (`id_files`),
  CONSTRAINT `fk_discipline_df` FOREIGN KEY (`id_disciplines`) REFERENCES `Disciplines` (`id_disciplines`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_file_df` FOREIGN KEY (`id_files`) REFERENCES `Files` (`id_file`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disciplines-Files`
--

LOCK TABLES `Disciplines-Files` WRITE;
/*!40000 ALTER TABLE `Disciplines-Files` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disciplines-Files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disciplines-Specialization`
--

DROP TABLE IF EXISTS `Disciplines-Specialization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Disciplines-Specialization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disciplines` int(11) NOT NULL,
  `num_specialization` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_discipline_idx` (`id_disciplines`),
  KEY `fk_specialization_idx` (`num_specialization`),
  CONSTRAINT `fk_discipline_ds` FOREIGN KEY (`id_disciplines`) REFERENCES `Disciplines` (`id_disciplines`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_specialization_ds` FOREIGN KEY (`num_specialization`) REFERENCES `Specialization` (`number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disciplines-Specialization`
--

LOCK TABLES `Disciplines-Specialization` WRITE;
/*!40000 ALTER TABLE `Disciplines-Specialization` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disciplines-Specialization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employee`
--

DROP TABLE IF EXISTS `Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `prof_interest` text,
  `projects` varchar(300) DEFAULT NULL,
  `languages` varchar(200) DEFAULT NULL,
  `begin_date` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `degree` varchar(100) NOT NULL,
  `lecturer` tinyint(1) NOT NULL,
  `position` varchar(100) NOT NULL,
  `training` varchar(200) DEFAULT NULL,
  `consult_time` varchar(200) DEFAULT NULL,
  `rank` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Event`
--

DROP TABLE IF EXISTS `Event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `name_event` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `date_publication` datetime NOT NULL,
  `hold_date` datetime NOT NULL,
  `text_description` varchar(1000) DEFAULT NULL,
  `url_pictures` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `fk_event_category_idx` (`id_category`),
  CONSTRAINT `fk_event_category` FOREIGN KEY (`id_category`) REFERENCES `EventCategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Event`
--

LOCK TABLES `Event` WRITE;
/*!40000 ALTER TABLE `Event` DISABLE KEYS */;
INSERT INTO `Event` VALUES (1,'TestEvent',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description here','/images'),(2,'TestEvent2',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images'),(3,'TestEvent3',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images'),(4,'TestEvent4',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images'),(5,'TestEvent5',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images'),(6,'TestEvent6',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images'),(7,'TestEvent7',1,'2014-03-31 00:00:00','2014-03-31 00:00:00','Description Here','/images');
/*!40000 ALTER TABLE `Event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EventCategory`
--

DROP TABLE IF EXISTS `EventCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EventCategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ec_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EventCategory`
--

LOCK TABLES `EventCategory` WRITE;
/*!40000 ALTER TABLE `EventCategory` DISABLE KEYS */;
INSERT INTO `EventCategory` VALUES (1,'TestEventCategory');
/*!40000 ALTER TABLE `EventCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Files`
--

DROP TABLE IF EXISTS `Files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Files` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `loaddate` date NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Files`
--

LOCK TABLES `Files` WRITE;
/*!40000 ALTER TABLE `Files` DISABLE KEYS */;
/*!40000 ALTER TABLE `Files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FootRef`
--

DROP TABLE IF EXISTS `FootRef`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FootRef` (
  `id_FootRef` int(11) NOT NULL AUTO_INCREMENT,
  `idFootRefCat` int(11) NOT NULL,
  `fr_name` varchar(150) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `authOnly` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_FootRef`),
  KEY `fk_ref_ctegory_idx` (`idFootRefCat`),
  CONSTRAINT `fk_ref_ctegory` FOREIGN KEY (`idFootRefCat`) REFERENCES `FootRefCat` (`idFootRefCat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FootRef`
--

LOCK TABLES `FootRef` WRITE;
/*!40000 ALTER TABLE `FootRef` DISABLE KEYS */;
/*!40000 ALTER TABLE `FootRef` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FootRefCat`
--

DROP TABLE IF EXISTS `FootRefCat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FootRefCat` (
  `idFootRefCat` int(11) NOT NULL AUTO_INCREMENT,
  `frc_name` varchar(50) NOT NULL,
  PRIMARY KEY (`idFootRefCat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FootRefCat`
--

LOCK TABLES `FootRefCat` WRITE;
/*!40000 ALTER TABLE `FootRefCat` DISABLE KEYS */;
/*!40000 ALTER TABLE `FootRefCat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Group`
--

DROP TABLE IF EXISTS `Group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Group` (
  `number` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `course` int(11) NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `number_UNIQUE` (`number`),
  KEY `fk_spec_number_idx` (`specialization`),
  CONSTRAINT `fk_spec_number` FOREIGN KEY (`specialization`) REFERENCES `Specialization` (`number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Group`
--

LOCK TABLES `Group` WRITE;
/*!40000 ALTER TABLE `Group` DISABLE KEYS */;
/*!40000 ALTER TABLE `Group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Laboratory`
--

DROP TABLE IF EXISTS `Laboratory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Laboratory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Laboratory`
--

LOCK TABLES `Laboratory` WRITE;
/*!40000 ALTER TABLE `Laboratory` DISABLE KEYS */;
/*!40000 ALTER TABLE `Laboratory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Laboratory-Employee`
--

DROP TABLE IF EXISTS `Laboratory-Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Laboratory-Employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employee` int(11) NOT NULL,
  `id_laboratory` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_id_employee_idx` (`id_employee`),
  KEY `kf_id_laboratory_idx` (`id_laboratory`),
  CONSTRAINT `fk_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `Employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_laboratory` FOREIGN KEY (`id_laboratory`) REFERENCES `Laboratory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Laboratory-Employee`
--

LOCK TABLES `Laboratory-Employee` WRITE;
/*!40000 ALTER TABLE `Laboratory-Employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `Laboratory-Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `News`
--

DROP TABLE IF EXISTS `News`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `News` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `date_publication` date NOT NULL,
  `news_pictures` varchar(200) DEFAULT NULL,
  `publication_main` tinyint(1) NOT NULL,
  `header` varchar(100) NOT NULL,
  `preview` text NOT NULL,
  `text_description` text NOT NULL,
  PRIMARY KEY (`id_news`),
  KEY `fk_category` (`category`),
  CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `NewsCategory` (`id_newsCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `News`
--

LOCK TABLES `News` WRITE;
/*!40000 ALTER TABLE `News` DISABLE KEYS */;
/*!40000 ALTER TABLE `News` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NewsCategory`
--

DROP TABLE IF EXISTS `NewsCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NewsCategory` (
  `id_newsCategory` int(11) NOT NULL AUTO_INCREMENT,
  `nc_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id_newsCategory`),
  UNIQUE KEY `id_newsCategory_UNIQUE` (`id_newsCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NewsCategory`
--

LOCK TABLES `NewsCategory` WRITE;
/*!40000 ALTER TABLE `NewsCategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `NewsCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PracticeReports`
--

DROP TABLE IF EXISTS `PracticeReports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PracticeReports` (
  `id_preport` int(11) NOT NULL AUTO_INCREMENT,
  `designrules` varchar(500) NOT NULL,
  `applform` varchar(100) NOT NULL,
  `practplaces` varchar(200) NOT NULL,
  PRIMARY KEY (`id_preport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PracticeReports`
--

LOCK TABLES `PracticeReports` WRITE;
/*!40000 ALTER TABLE `PracticeReports` DISABLE KEYS */;
/*!40000 ALTER TABLE `PracticeReports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Specialization`
--

DROP TABLE IF EXISTS `Specialization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Specialization` (
  `number` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `id_UNIQUE` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Specialization`
--

LOCK TABLES `Specialization` WRITE;
/*!40000 ALTER TABLE `Specialization` DISABLE KEYS */;
/*!40000 ALTER TABLE `Specialization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
  `id_stud` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  PRIMARY KEY (`id_stud`),
  UNIQUE KEY `id_UNIQUE` (`id_stud`),
  KEY `fk_group_number_idx` (`group`),
  CONSTRAINT `fk_group_number` FOREIGN KEY (`group`) REFERENCES `Group` (`number`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Student`
--

LOCK TABLES `Student` WRITE;
/*!40000 ALTER TABLE `Student` DISABLE KEYS */;
/*!40000 ALTER TABLE `Student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Subscribers`
--

DROP TABLE IF EXISTS `Subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Subscribers` (
  `id_subscribers` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_subscribers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Subscribers`
--

LOCK TABLES `Subscribers` WRITE;
/*!40000 ALTER TABLE `Subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `Subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `employee` tinyint(1) DEFAULT NULL,
  `student` tinyint(1) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `date_last_auth` datetime DEFAULT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `idUsers_UNIQUE` (`idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-01  8:49:28
