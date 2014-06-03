CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 192.168.214.129    Database: mydb
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` VALUES (1,'Иванов','Иван','Иванович',NULL,NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',0,'',NULL,NULL,NULL),(2,'Петров','Петр','Петрович','image/',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'degree1',0,'position1',NULL,'All day, all night','rank1'),(3,'Сидоров','Иван','Петрович','image/',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'degree1',0,'position2',NULL,'All day, all night','rank3'),(4,'Сотрудников','Сотрудник','Сотрудникович','image/',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'degree2',0,'position3',NULL,'All day, all night','rank5');
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
  `text_description` text,
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
INSERT INTO `Event` VALUES (3,'ТЮМГУ УСПЕШНО ПРОШЕЛ ГОСУДАРСТВЕННУЮ АККРЕДИТАЦИЮ',1,'0000-00-00 00:00:00','2014-05-05 00:00:00','Тюменский государственный университет прошел государственную аккредитацию и подтвердил право осуществления образовательной деятельности на последующие 6 лет.\r\n\r\nК аккредитации были представлены все 90 программ высшего профессионального образования по уровням: бакалавриат, специалитет и магистратура.\r\n\r\nАккредитационная комиссия работала в ТюмГУ с 14 по 18 апреля 2014 года. Эксперты дали положительную оценку содержанию и качеству подготовки обучающихся в вузе на соответствие требованиям федеральных государственных образовательных стандартов. \r\n\r\n \r\n\r\n \r\n\r\nИсточник:\r\n\r\nУправление информационной политики','13193.png'),(4,'НОВЫЕ ТРЕБОВАНИЯ В ПРАВИЛАХ ПРИЕМА ДЛЯ АБИТУРИЕНТОВ-2014',1,'0000-00-00 00:00:00','2014-04-25 00:00:00','31 марта в соответствии с приказом Минобрануки России от 9 января 2012 г. № 3 на сайте go.utmn.ru опубликованы Правила приема в Тюменский государственный университет на 2014/2015 учебный год на обучение по образовательным программам высшего образования – программам бакалавриата, программам специалитета и программам магистратуры. \r\n\r\nТакже на сайте размещены:\r\n\r\nинформация о перечне направлений подготовки (специальностей) и вступительных испытаний;\r\nинформация о возможности подачи документов для поступления на обучение в электронной форме; \r\nинформация о приоритетности вступительных испытаний при ранжировании поступающих по результатам вступительных испытаний; \r\nинформация о формах проведения и программы вступительных испытаний, проводимых организацией самостоятельно; \r\nинформация об особенностях проведения вступительных испытаний для лиц с  ограниченными возможностями здоровья, инвалидов;  \r\nинформация о дополнительных сроках проведения ЕГЭ для сдачи ЕГЭ лицами, не имеющими результатов ЕГЭ (при приеме на обучение по программам бакалавриата);\r\nинформация о необходимости (отсутствии необходимости) прохождения  поступающими обязательного предварительного медицинского осмотра (обследования);\r\nминимальное количество баллов для каждого вступительного испытания по каждому конкурсу;  \r\nинформация о проведении вступительных испытаний с использованием дистанционных технологий (в случае проведения таких вступительных испытаний).\r\nВпервые опубликован порядок учета индивидуальных достижений поступающих, - отметил ответственный секретарь Приемной комиссии ТюмГУ Иван Романчук. - Преимущество при прочих равных условиях будут иметь победители и призеры регионального этапа Всероссийской олимпиады школьников, победители и призеры заключительного этапа Межрегиональной многопрофильной олимпиады школьников «Менделеев».\r\n\r\nКак и в прошлом году, подать документы в Приемную комиссию можно лично, прислать по почте или заполнить в электронной форме. В этом случае поступающий заполняет заявление на сайте Приемной комиссии go.utmn.ru и прикрепляет к заявлению сканированные копии документов.\r\n\r\nАбитуриент участвует в конкурсе не более чем на три направления подготовки при подаче заявлений в каждый вуз. При этом число вузов, в которые можно подавать документы, не изменилось: их по-прежнему пять.\r\n\r\nИзменились правила приема для олимпиадников. Победителям и призерам олимпиад придется, кроме свидетельства о своих успехах на состязаниях, представить результаты ЕГЭ по профильному предмету с суммой не ниже 65 баллов.\r\n\r\nПо словам Ивана Сергеевича, в 2014 году не менее 10 % бюджетных мест будет отдано льготникам, в том числе детям-инвалидам, инвалидам-военнослужащим, инвалидам с детства, сиротам или лицам, приравненным к ним.\r\n\r\nВ соответствии с Постановлением Правительства РФ от 14 августа 2013 г. №697, поступающим на ряд специальностей направлений подготовки педагогической направленности, придется пройти обязательное медицинское освидетельствование и принести справку в университет, – добавил Иван Романчук.\r\n\r\n \r\n\r\nИсточник:\r\n\r\nУправление информационной политики','12958.jpg'),(5,'МОНИТОРИНГ ЭФФЕКТИВНОСТИ ВУЗОВ-2014: У ТЮМГУ ОДНИ ИЗ ЛУЧШИХ ПОКАЗАТЕЛЕЙ СРЕДИ ВУЗОВ УРФО',1,'2014-05-20 00:00:00','2014-05-20 00:00:00','В Уральском федеральном округе в мониторинге приняли участие 62 вуза и 148 филиалов. По Тюменской области мониторингу подверглись: 9 вузов, 10 филиалов.','13325.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `News`
--

LOCK TABLES `News` WRITE;
/*!40000 ALTER TABLE `News` DISABLE KEYS */;
INSERT INTO `News` VALUES (11,1,'2014-05-30','13428.jpg',1,'СТУДЕНТ ИГИП – ДИПЛОМАНТ КОНКУРСА «МОЯ ЗАКОНОТВОРЧЕСКАЯ ИНИЦИАТИВА»','В Москве состоялся очный этап IX Всероссийского Конкурса «Моя законотворческая инициатива».','В мае 2014 года под патронажем Государственной Думы Федерального Собрания Российской Федерации и Национальной системы развития научной, творческой и инновационной деятельности молодежи России «Интеграция» состоялся очный этап IX Всероссийского Конкурса молодежи образовательных и научных организаций на лучшую работу «Моя законотворческая инициатива».\r\n\r\nДля участия в очном этапе Конкурса были приглашены лауреаты заочного тура – студенты Института государства и права ТюмГУ Анфиса Зименкова, Елизавета Попова, Андраник Сакеян, Надежда Захарова и их научные руководители А.П. Сунцов, А.А. Мишунина, Т.Д.Садовская.\r\n\r\nВ очном этапе Всероссийского форума «Моя законотворческая инициатива» Андраник Сакеян был удостоен звания дипломанта II степени за представленный проект «Проблемы обжалования решений и действий (бездействий) избирательных комиссий, связанных с установлением итогов голосования». Его научный руководитель А.П. Сунцов был награжден дипломом за подготовку призера Девятого Всероссийского Конкурса. Тюменский госуниверситет в лице ректора В.Н. Фалькова награжден дипломом за успехи, достигнутые представителями университета в конкурсе.'),(12,1,'2014-05-30','13433.jpg',1,'СТУДЕНТЫ-ЖУРНАЛИСТЫ ВЫБИРАЮТ МЕСТО ПРАКТИКИ','Руководители и журналисты тюменских СМИ и PR-структур встретились со студентами отделения журналистики ТюмГУ. Начинающие журналисты получили возможность выбрать место летней практики и наладить контакты с будущими работодателями.','Руководители и журналисты тюменских СМИ и PR-структур встретились со студентами отделения журналистики ТюмГУ. Начинающие журналисты получили возможность выбрать место летней практики и наладить контакты с будущими работодателями.\r\n\r\nПредставители СМИ рассказали о требованиях к практикантам, познакомили с характером предстоящей работы. В рейтинге требований к студентам на первом месте стоят владение словом и грамотность, на втором – желание учиться, на третьем – мобильность.\r\n\r\nРафаэль Гольдберг, главный редактор газеты «Тюменский курьер», позавидовал будущим коллегам: «Практика – замечательный период. До сих пор помню все, что было. Завтра исполнится 55 лет, как я опубликовал в газете свою первую заметку. С тех пор мне не надоело это делать. Писать одно и то же и разное, новое и одно то же. Нужно понять, не надоест ли вам делать это спустя 50 лет. Если вы станете журналистом, то журналистика у вас все заберет и все отдаст».\r\n\r\nЖурналисты желали практикантам не бояться незнакомых тем и быть готовыми получать новые знания и умения, студенты задавали вопросы, уточняя интересующие их моменты.\r\n\r\n«Студентам, особенно первокурсникам, сложно найти «площадку» для прохождения практики, поэтому проведение подобного мероприятия – отличная идея, - прокомментировала прошедшее мероприятие студентка 1 курса Виктория Каткова. - Благодаря Дню практики, я познакомилась с новыми изданиями, лично встретилась с представителями СМИ и сделала свой выбор. Вот только некоторые работодатели хотят видеть на практике студентов 2 курса и старше, особенно представители телевидения – специализации, которую я выбрала. Поэтому для меня, первокурсницы, это может стать преградой. И, конечно же, наверняка каждый студент хотел бы получать за практику хоть небольшой, но гонорар. Ведь это отличный стимул для работы»,  –  отметила Виктория.\r\n\r\n«Сегодня мы провели первый День практики на нашем отделении! Встреча потенциальных работодателей, преподавателей и студентов прошла в доброжелательной и плодотворной обстановке, - рассказала Ольга Петрова, заведующая кафедрой истории и теории журналистики. -  На данный момент у нас есть несколько прекрасных площадок для прохождения студенческой производственной практики. Мы благодарим тех, кто к нам пришел, и надеемся на долгие партнерские отношения. Очень рады были видеть наших выпускников, успешно работающих в ведущих СМИ области», – подвела итоги Ольга Александровна.\r\n\r\n '),(13,1,'2014-05-30','13421.jpg',1,'ТЮМГУ БУДЕТ ГОТОВИТЬ КАДРЫ ДЛЯ НЕФТЯНОЙ КОМПАНИИ','Подписано долгосрочное соглашение о сотрудничестве между Правительством Тюменской области и компанией ОАО «НК «Роснефть». Отдельное внимание в документе отведено участию в сотрудничестве Тюменского государственного университета.','Долгосрочное соглашение о сотрудничестве между Правительством Тюменской области и компанией ОАО «НК «Роснефть» подписали временно исполняющий обязанности Губернатора Тюменской области Владимир Якушев и президент компании, председатель правления Игорь Сечин.\r\n\r\nСоглашение заключено в целях реализации целого ряда промышленных, финансовых, инвестиционных и социальных программ, создания благоприятных экономических, правовых и организационных условий для развития региона, а также поддержки научно-технического потенциала и инфраструктуры Тюменской области.\r\n\r\nОтдельное внимание в документе отведено участию в сотрудничестве Тюменского государственного университета. В частности, «Роснефть» планирует принимать активное участие в области подготовки кадров, формировании совместной научно-исследовательской деятельности, развитии материально-технической базы вуза, а также в поддержании молодых ученых и преподавателей корпоративными стипендиями и грантами. \r\n\r\nКроме того, в рамках соглашения компания намерена создать в нескольких школах области специализированные классы для одаренных ребят, которые затем будут получать квоты на обучение в лучших учебных заведениях страны.\r\n\r\nВладимир Якушев выразил уверенность, что соглашение станет основой для укрепления взаимовыгодного партнерства между Тюменской областью и компанией «Роснефть», послужит выстраиванию долговременного сотрудничества в самых разных сферах.');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NewsCategory`
--

LOCK TABLES `NewsCategory` WRITE;
/*!40000 ALTER TABLE `NewsCategory` DISABLE KEYS */;
INSERT INTO `NewsCategory` VALUES (1,'Карьера'),(3,'Успехи');
/*!40000 ALTER TABLE `NewsCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pages`
--

DROP TABLE IF EXISTS `Pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pages` (
  `idPage` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`idPage`),
  UNIQUE KEY `idPage_UNIQUE` (`idPage`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pages`
--

LOCK TABLES `Pages` WRITE;
/*!40000 ALTER TABLE `Pages` DISABLE KEYS */;
INSERT INTO `Pages` VALUES (8,'Специальности','<h2><strong>Специальность:</strong>&nbsp;<strong>10.05.01 &laquo;Компьютерная безопасность</strong>&raquo;&nbsp;<strong>(специалитет)</strong></h2>\r\n<p><strong>Специализация:</strong></p>\r\n<ul>\r\n<li>Безопасность распределенных компьютерных систем.</li>\r\n</ul>\r\n<p><strong>Срок обучения<em>&nbsp;&ndash;&nbsp;</em></strong>5 лет 5 месяцев</p>\r\n<p><strong>Вступительные испытания:</strong></p>\r\n<ol>\r\n<li>Математика;</li>\r\n<li>Информатика и информационно-коммуникационные технологии (ИКТ);</li>\r\n<li>Русский язык.</li>\r\n</ol>\r\n<p><strong>Приоритетность вступительных испытаний определяется порядковым номером</strong></p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Направление:</strong>&nbsp;<strong>10.03.01 &laquo;Информационная безопасность&raquo; (академический бакалавриат)</strong></h2>\r\n<p><strong>Профили:</strong></p>\r\n<ul>\r\n<li>Безопасность распределенных систем.</li>\r\n</ul>\r\n<p><strong>Срок обучения<em>&nbsp;&ndash;&nbsp;</em></strong>4 года</p>\r\n<p><strong>Вступительные испытания:</strong></p>\r\n<ol>\r\n<li>Математика;</li>\r\n<li>Информатика и информационно-коммуникационные технологии (ИКТ);</li>\r\n<li>Русский язык.</li>\r\n</ol>\r\n<p><strong>Приоритетность вступительных испытаний определяется порядковым номером</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Области профессиональной деятельности выпускников:</strong></p>\r\n<p>разработка и эксплуатация программного обеспечения, средств и систем защиты информации компьютерных систем от вредоносных программно-технических и информационных воздействий для административных структур, коммерческих и бюджетных организаций.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Специальность:</strong>&nbsp;<strong>10.05.03 &laquo;Информационная безопасность автоматизированных систем&raquo; (специалитет)</strong></h2>\r\n<p><strong>Специализация:</strong></p>\r\n<ul>\r\n<li>Безопасность открытых информационных систем.</li>\r\n</ul>\r\n<p><strong>Срок обучения<em>&nbsp;&ndash;&nbsp;</em></strong>5 лет</p>\r\n<p><strong>Вступительные испытания:</strong></p>\r\n<ol>\r\n<li>Математика;</li>\r\n<li>Информатика и информационно-коммуникационные технологии (ИКТ);</li>\r\n<li>Русский язык.</li>\r\n</ol>\r\n<p><strong>Приоритетность вступительных испытаний определяется порядковым номером</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Области профессиональной деятельности выпускников:</strong><br />Тюменская область в контексте широкой реализации программ<br />информатизации испытывает постоянную нехватку квалифицированных<br />специалистов по защите информации с хорошей подготовкой по таким<br />направлениям как администрирование сетей, баз данных, а также<br />способных непосредственно участвовать в разработке IT проектов<br />в качестве разработчиков модулей связанных с информационной<br />безопасностью. Именно такие специалисты готовятся в рамках<br />специальности &laquo;Информационная безопасность автоматизированных<br />систем&raquo;.<br />Выпускники по специальности востребованы на таких предприятиях города<br />и региона, как:<br />- специальные службы органов внутренних дел, федеральной службы<br />безопасности и других силовых ведомств;<br />- научно-исследовательские и производственные предприятия нефтегазовой,<br />машиностроительной отрасли;<br />- телекоммуникационные компании и предприятия, работающие в сфере<br />информационных технологий;<br />- органы государственного управления и муниципалитеты;<br />- иные предприятия, работающие в сфере создания и эксплуатации<br />информационных ресурсов, баз данных, информационных систем.</p>','specialities','cath'),(9,'История кафедры','<p>история пока творится<img src=\"../protected/extensions/tinymce_4.0.25/tinymce/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></p>','history','cath'),(10,'Правила оформления курсовых работ','<p>Курсовая работа выполняется на одной стороне листа белой бумаги формата А4 (210 х 297 мм). Иллюстрированный материал (таблицы, схемы, диаграммы и т.п.) при необходимости можно выполнять на листах большего форма.</p>\r\n<p>Текст печатается полуторным интервалом нормальным шрифтом черного цвета. Размер шрифта &ndash; 14 (TimesNewRoman). Межстрочный интервал &ndash; 1,5.</p>\r\n<p>Предусматриваются следующие размеры полей (с отклонениями в пределах + 2 мм):</p>\r\n<p>левое &ndash; 30 мм;</p>\r\n<p>правое &ndash; 10 мм;</p>\r\n<p>верхнее &ndash; 20 мм;</p>\r\n<p>нижнее - 20 мм.</p>\r\n<p>Рекомендуется производить выравнивание текста по ширине.</p>\r\n<p>Абзацы в тексте начинаются отступом от левого поля. Отступ равен 1 см.</p>\r\n<p>Объем курсовой работы:</p>\r\n<p>2 курс &ndash; 25-30 страниц;</p>\r\n<p>3 курс, 4 курс &ndash; 30-35 страниц.</p>\r\n<p>&nbsp;</p>\r\n<p>НУМЕРАЦИЯ СТРАНИЦ</p>\r\n<p>Нумерация начинается с титульного листа. На титульном листе и оглавление номер страницы не ставится. Первая цифра ставится на введении. Это обычно 3 или 4. Номер страницы проставляется в правом верхнем углу без точки в конце. Страницы текста курсовой работы нумеруются арабскими цифрами, соблюдая сквозную нумерацию по всему тексту. Иллюстрации, схемы, таблицы, рисунки, расположенные на отдельных листах, нумеруются в общем порядке.</p>','rule','stud'),(11,'Контакты','<p><strong>АППАРАТ ПРИЕМНОЙ КОМИССИИ</strong></p>\r\n<p>г. Тюмень, ул. Ленина, д. 25, каб. 214</p>\r\n<p>тел: (3452) 46-83-43, 54-20-08 (доб. 149, 153, 154, 155)</p>\r\n<p>Часы работы: с 9:00 до 17:00, обед с 13:00 до 14:00</p>\r\n<p><strong>Экспертный центр оценки иностранного образования</strong></p>\r\n<p>тел: (3452) 54-20-08 (доб. 112, 157)</p>\r\n<p>Часы работы: с 9:00 до 17:00, обед с 13:00 до 14:00</p>\r\n<p>e-mail: velifanova@utmn.ru, ogalle@utmn.ru</p>\r\n<p><strong>Подготовительное отделение</strong></p>\r\n<p>тел: (3452) 64-01-34, 64-01-03</p>\r\n<p>Часы работы: с 9:00 до 17:00, обед с 13:00 до 14:00</p>\r\n<p>web:&nbsp;<a href=\"http://schola.ru/\" target=\"_blank\">http://schola.ru</a></p>\r\n<p><strong>УПРАВЛЕНИЕ ДОГОВОРНЫХ ОТНОШЕНИЙ</strong></p>\r\n<p>г. Тюмень, ул. Республики, д. 9, корп. 1</p>\r\n<p>тел. (3452) 46-46-50, 53-48-88</p>\r\n<p><strong>ИНСТИТУТ МАТЕМАТИКИ И КОМПЬЮТЕРНЫХ НАУК<br /></strong></p>\r\n<p>г. Тюмень, ул. Перекопская, д. 15 а</p>\r\n<p>тел. (3452)&nbsp; 45-07-06</p>','contacts','contact');
/*!40000 ALTER TABLE `Pages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,0,0,'guest','1','guest',NULL,'0000-00-00 00:00:00'),(2,0,0,'staff','1','staff',NULL,'0000-00-00 00:00:00'),(3,0,0,'chiefstaff','1','chiefstaff',NULL,'0000-00-00 00:00:00'),(4,0,0,'student','1','student',NULL,'0000-00-00 00:00:00'),(5,0,0,'chiefstudent','1','chiefstudent',NULL,'0000-00-00 00:00:00'),(6,0,0,'admin','1','admin',NULL,'0000-00-00 00:00:00');
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

-- Dump completed on 2014-06-03  7:55:44
