-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: ospms
-- ------------------------------------------------------
-- Server version	5.6.19-log

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
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assessment` (
  `assessmentID` varchar(16) NOT NULL,
  `teacherID` varchar(16) DEFAULT NULL,
  `student_lrn` varchar(16) DEFAULT NULL,
  `ratingID` varchar(16) DEFAULT NULL,
  `parentID` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`assessmentID`),
  KEY `FK_assessment1` (`teacherID`),
  KEY `FK_assessment2` (`student_lrn`),
  KEY `FK_assessment3` (`ratingID`),
  KEY `FK_assessment4` (`parentID`),
  CONSTRAINT `FK_assessment1` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`),
  CONSTRAINT `FK_assessment2` FOREIGN KEY (`student_lrn`) REFERENCES `student` (`student_lrn`),
  CONSTRAINT `FK_assessment3` FOREIGN KEY (`ratingID`) REFERENCES `rating` (`rateID`),
  CONSTRAINT `FK_assessment4` FOREIGN KEY (`parentID`) REFERENCES `parent` (`parentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_schedule`
--

DROP TABLE IF EXISTS `class_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_schedule` (
  `class_sched_ID` varchar(16) NOT NULL DEFAULT '',
  `sectionID` varchar(16) DEFAULT NULL,
  `student_lrn` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`class_sched_ID`),
  KEY `FK_class_schedule1` (`sectionID`),
  KEY `FK_class_schedule2` (`student_lrn`),
  CONSTRAINT `FK_class_schedule1` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`),
  CONSTRAINT `FK_class_schedule2` FOREIGN KEY (`student_lrn`) REFERENCES `student` (`student_lrn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_schedule`
--

LOCK TABLES `class_schedule` WRITE;
/*!40000 ALTER TABLE `class_schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `create_user`
--

DROP TABLE IF EXISTS `create_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `create_user` (
  `username_` varchar(16) NOT NULL,
  `password_` varchar(16) NOT NULL,
  `secret_question` varchar(30) NOT NULL,
  `secret_answer` varchar(30) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username_`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `create_user`
--

LOCK TABLES `create_user` WRITE;
/*!40000 ALTER TABLE `create_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `create_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade_level`
--

DROP TABLE IF EXISTS `grade_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade_level` (
  `levelID` varchar(1) NOT NULL,
  `level_description` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_level`
--

LOCK TABLES `grade_level` WRITE;
/*!40000 ALTER TABLE `grade_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `grade_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent` (
  `parentID` varchar(16) NOT NULL,
  `p_lname` varchar(20) NOT NULL,
  `p_fname` varchar(20) NOT NULL,
  `p_mname` varchar(20) DEFAULT NULL,
  `p_gender` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`parentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `rateID` varchar(3) NOT NULL,
  `range_value` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`rateID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `sectionID` varchar(16) NOT NULL,
  `section_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sectionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `student_lrn` varchar(16) NOT NULL,
  `s_lname` varchar(20) NOT NULL,
  `s_fname` varchar(20) NOT NULL,
  `s_mname` varchar(20) DEFAULT NULL,
  `s_gender` varchar(6) DEFAULT NULL,
  `s_birthday` date NOT NULL,
  `parentID` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`student_lrn`),
  KEY `FK_student` (`parentID`),
  CONSTRAINT `FK_student` FOREIGN KEY (`parentID`) REFERENCES `parent` (`parentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_`
--

DROP TABLE IF EXISTS `subject_`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_` (
  `subjectID` varchar(16) NOT NULL,
  `subject_title` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_`
--

LOCK TABLES `subject_` WRITE;
/*!40000 ALTER TABLE `subject_` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject_` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacherID` varchar(16) NOT NULL,
  `t_lname` varchar(20) NOT NULL,
  `t_fname` varchar(20) NOT NULL,
  `t_mname` varchar(20) DEFAULT NULL,
  `t_gender` varchar(6) DEFAULT NULL,
  `t_birthday` date NOT NULL,
  PRIMARY KEY (`teacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_load`
--

DROP TABLE IF EXISTS `teacher_load`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_load` (
  `t_loadID` int(11) NOT NULL AUTO_INCREMENT,
  `teacherID` varchar(16) DEFAULT NULL,
  `subjectID` varchar(16) DEFAULT NULL,
  `sectionID` varchar(16) DEFAULT NULL,
  `levelID` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`t_loadID`),
  KEY `FK_teacher_load1` (`teacherID`),
  KEY `FK_teacher_load2` (`subjectID`),
  KEY `FK_teacher_load3` (`sectionID`),
  KEY `FK_teacher_load4` (`levelID`),
  CONSTRAINT `FK_teacher_load1` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`),
  CONSTRAINT `FK_teacher_load2` FOREIGN KEY (`subjectID`) REFERENCES `subject_` (`subjectID`),
  CONSTRAINT `FK_teacher_load3` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`),
  CONSTRAINT `FK_teacher_load4` FOREIGN KEY (`levelID`) REFERENCES `grade_level` (`levelID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_load`
--

LOCK TABLES `teacher_load` WRITE;
/*!40000 ALTER TABLE `teacher_load` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_load` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-18 10:55:03
