-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `entity_assignment`
--

DROP TABLE IF EXISTS `entity_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_assignment` (
  `assignment_id` int(10) NOT NULL AUTO_INCREMENT,
  `assign_type` tinyint(3) DEFAULT NULL,
  `description` tinytext,
  `points` tinyint(3) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_assignment`
--

LOCK TABLES `entity_assignment` WRITE;
/*!40000 ALTER TABLE `entity_assignment` DISABLE KEYS */;
INSERT INTO `entity_assignment` VALUES (1,1,'midterm',100,'2015-11-15','2015-01-01',NULL),(2,2,'hmwk 1',50,'2015-10-15','2015-01-01',NULL);
/*!40000 ALTER TABLE `entity_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_course`
--

DROP TABLE IF EXISTS `entity_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_course` (
  `course_id` int(10) NOT NULL,
  `discipline_id` tinyint(3) unsigned DEFAULT NULL,
  `number` varchar(4) DEFAULT NULL,
  `description` tinytext,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_course`
--

LOCK TABLES `entity_course` WRITE;
/*!40000 ALTER TABLE `entity_course` DISABLE KEYS */;
INSERT INTO `entity_course` VALUES (48939,1,'12','PHP');
/*!40000 ALTER TABLE `entity_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_instructor`
--

DROP TABLE IF EXISTS `entity_instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_instructor` (
  `instructor_id` int(10) NOT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `first_name` varchar(10) DEFAULT NULL,
  `title_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_instructor`
--

LOCK TABLES `entity_instructor` WRITE;
/*!40000 ALTER TABLE `entity_instructor` DISABLE KEYS */;
INSERT INTO `entity_instructor` VALUES (1150258,'Lehr','E','Mark',1);
/*!40000 ALTER TABLE `entity_instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_assign_type`
--

DROP TABLE IF EXISTS `enum_assign_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_assign_type` (
  `enum_type_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `assignment_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`enum_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_assign_type`
--

LOCK TABLES `enum_assign_type` WRITE;
/*!40000 ALTER TABLE `enum_assign_type` DISABLE KEYS */;
INSERT INTO `enum_assign_type` VALUES (1,'tests'),(2,'hmwk'),(3,'proj'),(4,'lab');
/*!40000 ALTER TABLE `enum_assign_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_discipline`
--

DROP TABLE IF EXISTS `enum_discipline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_discipline` (
  `discipline_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `discipline_acronym` char(3) DEFAULT NULL,
  `discipline` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`discipline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_discipline`
--

LOCK TABLES `enum_discipline` WRITE;
/*!40000 ALTER TABLE `enum_discipline` DISABLE KEYS */;
INSERT INTO `enum_discipline` VALUES (1,'CIS','Computer Information Systems'),(2,'CSC','Computer Science');
/*!40000 ALTER TABLE `enum_discipline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_title`
--

DROP TABLE IF EXISTS `enum_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_title` (
  `title_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_title`
--

LOCK TABLES `enum_title` WRITE;
/*!40000 ALTER TABLE `enum_title` DISABLE KEYS */;
INSERT INTO `enum_title` VALUES (1,'Dr.'),(2,'Prof.'),(3,'Ms.'),(4,'Mr.'),(5,'Mrs.');
/*!40000 ALTER TABLE `enum_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_assignment_course`
--

DROP TABLE IF EXISTS `xref_assignment_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_assignment_course` (
  `xref_ass_course_id` int(10) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_ass_course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_assignment_course`
--

LOCK TABLES `xref_assignment_course` WRITE;
/*!40000 ALTER TABLE `xref_assignment_course` DISABLE KEYS */;
INSERT INTO `xref_assignment_course` VALUES (1,1,48939),(2,2,48939);
/*!40000 ALTER TABLE `xref_assignment_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_instructor_course`
--

DROP TABLE IF EXISTS `xref_instructor_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_instructor_course` (
  `xref_id` int(10) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_instructor_course`
--

LOCK TABLES `xref_instructor_course` WRITE;
/*!40000 ALTER TABLE `xref_instructor_course` DISABLE KEYS */;
INSERT INTO `xref_instructor_course` VALUES (1,1150258,48939);
/*!40000 ALTER TABLE `xref_instructor_course` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-14  9:32:54
