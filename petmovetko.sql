-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: petmovetko
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `auth_group`
--

DROP TABLE IF EXISTS `auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group`
--

LOCK TABLES `auth_group` WRITE;
/*!40000 ALTER TABLE `auth_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_group_permissions`
--

DROP TABLE IF EXISTS `auth_group_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  KEY `auth_group_permissions_group_id_b120cbf9` (`group_id`),
  KEY `auth_group_permissions_permission_id_84c5c92e` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group_permissions`
--

LOCK TABLES `auth_group_permissions` WRITE;
/*!40000 ALTER TABLE `auth_group_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_permission`
--

DROP TABLE IF EXISTS `auth_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`),
  KEY `auth_permission_content_type_id_2f476e4b` (`content_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_permission`
--

LOCK TABLES `auth_permission` WRITE;
/*!40000 ALTER TABLE `auth_permission` DISABLE KEYS */;
INSERT INTO `auth_permission` VALUES (1,'Can add log entry',1,'add_logentry'),(2,'Can change log entry',1,'change_logentry'),(3,'Can delete log entry',1,'delete_logentry'),(4,'Can add user',2,'add_user'),(5,'Can change user',2,'change_user'),(6,'Can delete user',2,'delete_user'),(7,'Can add permission',3,'add_permission'),(8,'Can change permission',3,'change_permission'),(9,'Can delete permission',3,'delete_permission'),(10,'Can add group',4,'add_group'),(11,'Can change group',4,'change_group'),(12,'Can delete group',4,'delete_group'),(13,'Can add content type',5,'add_contenttype'),(14,'Can change content type',5,'change_contenttype'),(15,'Can delete content type',5,'delete_contenttype'),(16,'Can add session',6,'add_session'),(17,'Can change session',6,'change_session'),(18,'Can delete session',6,'delete_session'),(19,'Can add auth user user permissions',7,'add_authuseruserpermissions'),(20,'Can change auth user user permissions',7,'change_authuseruserpermissions'),(21,'Can delete auth user user permissions',7,'delete_authuseruserpermissions'),(22,'Can add auth permission',8,'add_authpermission'),(23,'Can change auth permission',8,'change_authpermission'),(24,'Can delete auth permission',8,'delete_authpermission'),(25,'Can add petowner',9,'add_petowner'),(26,'Can change petowner',9,'change_petowner'),(27,'Can delete petowner',9,'delete_petowner'),(28,'Can add services',10,'add_services'),(29,'Can change services',10,'change_services'),(30,'Can delete services',10,'delete_services'),(31,'Can add transaction',11,'add_transaction'),(32,'Can change transaction',11,'change_transaction'),(33,'Can delete transaction',11,'delete_transaction'),(34,'Can add request',12,'add_request'),(35,'Can change request',12,'change_request'),(36,'Can delete request',12,'delete_request'),(37,'Can add django content type',13,'add_djangocontenttype'),(38,'Can change django content type',13,'change_djangocontenttype'),(39,'Can delete django content type',13,'delete_djangocontenttype'),(40,'Can add service provider',14,'add_serviceprovider'),(41,'Can change service provider',14,'change_serviceprovider'),(42,'Can delete service provider',14,'delete_serviceprovider'),(43,'Can add django admin log',15,'add_djangoadminlog'),(44,'Can change django admin log',15,'change_djangoadminlog'),(45,'Can delete django admin log',15,'delete_djangoadminlog'),(46,'Can add auth user',16,'add_authuser'),(47,'Can change auth user',16,'change_authuser'),(48,'Can delete auth user',16,'delete_authuser'),(49,'Can add auth group',17,'add_authgroup'),(50,'Can change auth group',17,'change_authgroup'),(51,'Can delete auth group',17,'delete_authgroup'),(52,'Can add django migrations',18,'add_djangomigrations'),(53,'Can change django migrations',18,'change_djangomigrations'),(54,'Can delete django migrations',18,'delete_djangomigrations'),(55,'Can add ssp',19,'add_ssp'),(56,'Can change ssp',19,'change_ssp'),(57,'Can delete ssp',19,'delete_ssp'),(58,'Can add auth group permissions',20,'add_authgrouppermissions'),(59,'Can change auth group permissions',20,'change_authgrouppermissions'),(60,'Can delete auth group permissions',20,'delete_authgrouppermissions'),(61,'Can add customer',21,'add_customer'),(62,'Can change customer',21,'change_customer'),(63,'Can delete customer',21,'delete_customer'),(64,'Can add auth user groups',22,'add_authusergroups'),(65,'Can change auth user groups',22,'change_authusergroups'),(66,'Can delete auth user groups',22,'delete_authusergroups'),(67,'Can add django session',23,'add_djangosession'),(68,'Can change django session',23,'change_djangosession'),(69,'Can delete django session',23,'delete_djangosession'),(70,'Can add petlist',24,'add_petlist'),(71,'Can change petlist',24,'change_petlist'),(72,'Can delete petlist',24,'delete_petlist'),(73,'Can add reviewrating',25,'add_reviewrating'),(74,'Can change reviewrating',25,'change_reviewrating'),(75,'Can delete reviewrating',25,'delete_reviewrating'),(76,'Can add complaints',26,'add_complaints'),(77,'Can change complaints',26,'change_complaints'),(78,'Can delete complaints',26,'delete_complaints'),(79,'Can add auth group',27,'add_authgroup'),(80,'Can change auth group',27,'change_authgroup'),(81,'Can delete auth group',27,'delete_authgroup'),(82,'Can add auth group permissions',28,'add_authgrouppermissions'),(83,'Can change auth group permissions',28,'change_authgrouppermissions'),(84,'Can delete auth group permissions',28,'delete_authgrouppermissions'),(85,'Can add auth permission',29,'add_authpermission'),(86,'Can change auth permission',29,'change_authpermission'),(87,'Can delete auth permission',29,'delete_authpermission'),(88,'Can add auth user',30,'add_authuser'),(89,'Can change auth user',30,'change_authuser'),(90,'Can delete auth user',30,'delete_authuser'),(91,'Can add auth user groups',31,'add_authusergroups'),(92,'Can change auth user groups',31,'change_authusergroups'),(93,'Can delete auth user groups',31,'delete_authusergroups'),(94,'Can add auth user user permissions',32,'add_authuseruserpermissions'),(95,'Can change auth user user permissions',32,'change_authuseruserpermissions'),(96,'Can delete auth user user permissions',32,'delete_authuseruserpermissions'),(97,'Can add complaints',33,'add_complaints'),(98,'Can change complaints',33,'change_complaints'),(99,'Can delete complaints',33,'delete_complaints'),(100,'Can add customer',34,'add_customer'),(101,'Can change customer',34,'change_customer'),(102,'Can delete customer',34,'delete_customer'),(103,'Can add django admin log',35,'add_djangoadminlog'),(104,'Can change django admin log',35,'change_djangoadminlog'),(105,'Can delete django admin log',35,'delete_djangoadminlog'),(106,'Can add django content type',36,'add_djangocontenttype'),(107,'Can change django content type',36,'change_djangocontenttype'),(108,'Can delete django content type',36,'delete_djangocontenttype'),(109,'Can add django migrations',37,'add_djangomigrations'),(110,'Can change django migrations',37,'change_djangomigrations'),(111,'Can delete django migrations',37,'delete_djangomigrations'),(112,'Can add django session',38,'add_djangosession'),(113,'Can change django session',38,'change_djangosession'),(114,'Can delete django session',38,'delete_djangosession'),(115,'Can add request',39,'add_request'),(116,'Can change request',39,'change_request'),(117,'Can delete request',39,'delete_request'),(118,'Can add reviewrating',40,'add_reviewrating'),(119,'Can change reviewrating',40,'change_reviewrating'),(120,'Can delete reviewrating',40,'delete_reviewrating'),(121,'Can add services',41,'add_services'),(122,'Can change services',41,'change_services'),(123,'Can delete services',41,'delete_services'),(124,'Can add ssp',42,'add_ssp'),(125,'Can change ssp',42,'change_ssp'),(126,'Can delete ssp',42,'delete_ssp'),(127,'Can add transaction',43,'add_transaction'),(128,'Can change transaction',43,'change_transaction'),(129,'Can delete transaction',43,'delete_transaction'),(130,'Can add service provider',44,'add_serviceprovider'),(131,'Can change service provider',44,'change_serviceprovider'),(132,'Can delete service provider',44,'delete_serviceprovider');
/*!40000 ALTER TABLE `auth_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user`
--

DROP TABLE IF EXISTS `auth_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user`
--

LOCK TABLES `auth_user` WRITE;
/*!40000 ALTER TABLE `auth_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_groups`
--

DROP TABLE IF EXISTS `auth_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  KEY `auth_user_groups_user_id_6a12ed8b` (`user_id`),
  KEY `auth_user_groups_group_id_97559544` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_groups`
--

LOCK TABLES `auth_user_groups` WRITE;
/*!40000 ALTER TABLE `auth_user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_user_permissions`
--

DROP TABLE IF EXISTS `auth_user_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  KEY `auth_user_user_permissions_user_id_a95ead1b` (`user_id`),
  KEY `auth_user_user_permissions_permission_id_1fbb5f2c` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_user_permissions`
--

LOCK TABLES `auth_user_user_permissions` WRITE;
/*!40000 ALTER TABLE `auth_user_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaints` (
  `compID` int(11) NOT NULL AUTO_INCREMENT,
  `compMessage` varchar(100) NOT NULL,
  `compDate` datetime NOT NULL,
  `spID` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `complainer` varchar(5) NOT NULL,
  PRIMARY KEY (`compID`),
  UNIQUE KEY `compID_UNIQUE` (`compID`),
  KEY `sp_fk_idx` (`spID`),
  KEY `cust_fk_idx` (`custID`),
  CONSTRAINT `comp_cust_fk` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comp_sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custID` int(11) NOT NULL AUTO_INCREMENT,
  `custLastName` varchar(45) NOT NULL,
  `custFirstName` varchar(45) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custPassword` varchar(16) NOT NULL,
  `custAdd` varchar(45) NOT NULL,
  `custZip` varchar(45) NOT NULL,
  `custNum` varchar(45) NOT NULL,
  `custAbout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`custID`),
  KEY `rr_ID_idx` (`custID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Mark','Concepcion','vbjkl@nmnm.com','hgrfds','Somewhere, Baguio City','2600','6543276543222','Life is life.');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_admin_log`
--

DROP TABLE IF EXISTS `django_admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) unsigned NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `django_admin_log_content_type_id_c4bce8eb` (`content_type_id`),
  KEY `django_admin_log_user_id_c564eba6` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_admin_log`
--

LOCK TABLES `django_admin_log` WRITE;
/*!40000 ALTER TABLE `django_admin_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `django_admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_content_type`
--

DROP TABLE IF EXISTS `django_content_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_content_type`
--

LOCK TABLES `django_content_type` WRITE;
/*!40000 ALTER TABLE `django_content_type` DISABLE KEYS */;
INSERT INTO `django_content_type` VALUES (1,'admin','logentry'),(2,'auth','user'),(3,'auth','permission'),(4,'auth','group'),(5,'contenttypes','contenttype'),(6,'sessions','session'),(7,'forms','authuseruserpermissions'),(8,'forms','authpermission'),(9,'forms','petowner'),(10,'forms','services'),(11,'forms','transaction'),(12,'forms','request'),(13,'forms','djangocontenttype'),(14,'forms','serviceprovider'),(15,'forms','djangoadminlog'),(16,'forms','authuser'),(17,'forms','authgroup'),(18,'forms','djangomigrations'),(19,'forms','ssp'),(20,'forms','authgrouppermissions'),(21,'forms','customer'),(22,'forms','authusergroups'),(23,'forms','djangosession'),(24,'forms','petlist'),(25,'forms','reviewrating'),(26,'forms','complaints'),(27,'custModule','authgroup'),(28,'custModule','authgrouppermissions'),(29,'custModule','authpermission'),(30,'custModule','authuser'),(31,'custModule','authusergroups'),(32,'custModule','authuseruserpermissions'),(33,'custModule','complaints'),(34,'custModule','customer'),(35,'custModule','djangoadminlog'),(36,'custModule','djangocontenttype'),(37,'custModule','djangomigrations'),(38,'custModule','djangosession'),(39,'custModule','request'),(40,'custModule','reviewrating'),(41,'custModule','services'),(42,'custModule','ssp'),(43,'custModule','transaction'),(44,'custModule','serviceprovider');
/*!40000 ALTER TABLE `django_content_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_migrations`
--

DROP TABLE IF EXISTS `django_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_migrations`
--

LOCK TABLES `django_migrations` WRITE;
/*!40000 ALTER TABLE `django_migrations` DISABLE KEYS */;
INSERT INTO `django_migrations` VALUES (1,'contenttypes','0001_initial','2017-05-14 04:08:24.804729'),(2,'auth','0001_initial','2017-05-14 04:08:28.152008'),(3,'admin','0001_initial','2017-05-14 04:08:29.049071'),(4,'admin','0002_logentry_remove_auto_add','2017-05-14 04:08:29.068584'),(5,'contenttypes','0002_remove_content_type_name','2017-05-14 04:08:29.307024'),(6,'auth','0002_alter_permission_name_max_length','2017-05-14 04:08:29.463178'),(7,'auth','0003_alter_user_email_max_length','2017-05-14 04:08:29.580295'),(8,'auth','0004_alter_user_username_opts','2017-05-14 04:08:29.599822'),(9,'auth','0005_alter_user_last_login_null','2017-05-14 04:08:29.701736'),(10,'auth','0006_require_contenttypes_0002','2017-05-14 04:08:29.710242'),(11,'auth','0007_alter_validators_add_error_messages','2017-05-14 04:08:29.734772'),(12,'auth','0008_alter_user_username_max_length','2017-05-14 04:08:29.887255'),(13,'forms','0001_initial','2017-05-14 04:08:29.958437'),(14,'sessions','0001_initial','2017-05-14 04:08:30.199134'),(15,'forms','0002_complaints','2017-05-14 04:51:34.511597'),(16,'custModule','0001_initial','2017-05-14 13:39:51.278046');
/*!40000 ALTER TABLE `django_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_session`
--

DROP TABLE IF EXISTS `django_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL,
  PRIMARY KEY (`session_key`),
  KEY `django_session_expire_date_a5c62663` (`expire_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_session`
--

LOCK TABLES `django_session` WRITE;
/*!40000 ALTER TABLE `django_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `django_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `reqID` int(11) NOT NULL AUTO_INCREMENT,
  `reqStatus` enum('pending','accepted') NOT NULL DEFAULT 'pending',
  `pettype` enum('dog','cat') NOT NULL,
  `petbreed` varchar(60) NOT NULL,
  `custID` int(11) NOT NULL,
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL,
  `rDate` date NOT NULL,
  `rTimeStart` time NOT NULL,
  `rTimeEnd` time NOT NULL,
  PRIMARY KEY (`reqID`),
  KEY `sp_fk` (`spID`),
  KEY `cust_fk` (`custID`),
  KEY `serv_dk` (`servID`),
  CONSTRAINT `cust_fk` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `serv_fk` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sp_fk` FOREIGN KEY (`spID`) REFERENCES `service_provider` (`spID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (1,'pending','dog','Poodle',1,1,1,'2017-05-15','08:00:00','09:00:00');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviewrating`
--

DROP TABLE IF EXISTS `reviewrating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviewrating` (
  `rr_ID` int(11) NOT NULL,
  `revmessage` varchar(10000) NOT NULL,
  `rating` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `reviewer` varchar(45) NOT NULL,
  KEY `sp_fk` (`spid`),
  KEY `cust_fk` (`custid`),
  CONSTRAINT `revrat.custID` FOREIGN KEY (`custid`) REFERENCES `customer` (`custID`) ON UPDATE CASCADE,
  CONSTRAINT `revrat.spID` FOREIGN KEY (`spid`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviewrating`
--

LOCK TABLES `reviewrating` WRITE;
/*!40000 ALTER TABLE `reviewrating` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviewrating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_provider` (
  `spID` int(11) NOT NULL AUTO_INCREMENT,
  `spUsername` varchar(45) NOT NULL,
  `spLastName` varchar(45) NOT NULL,
  `spFirstName` varchar(45) NOT NULL,
  `spEmail` varchar(45) NOT NULL,
  `spPassword` varchar(16) NOT NULL,
  `spAdd` varchar(45) NOT NULL,
  `spNum` varchar(45) NOT NULL,
  `spPet` enum('dog','cat','both') NOT NULL,
  `spZip` int(5) NOT NULL,
  `spLastLogged` date DEFAULT NULL,
  `spStatus` enum('active','not active') NOT NULL,
  `spServices` varchar(45) NOT NULL,
  `spDay` varchar(10) DEFAULT NULL,
  `spTime` varchar(45) DEFAULT NULL,
  `spReqStatus` varchar(5) NOT NULL,
  PRIMARY KEY (`spID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
INSERT INTO `service_provider` VALUES (1,'sp101','Kilma','Dona','dk@gmail.com','1234','A. Bonifacio St., Baguio City','09090912345','dog',2600,NULL,'active','grooming','mwf','10:00:00','acc'),(2,'nerimae','Halos','Neri ','nerimaechalos@gmail.com','nerimae','New Lucban','09175855137','dog',2600,NULL,'active','Training,Sitting',NULL,NULL,'acc'),(3,'asjnas asn','asdeubbas','kasdjandn','asjdie@adnskac.ada','asdasidenda','aosdamand','12354664','dog',1234,NULL,'active','Training,Grooming',NULL,NULL,'acc'),(4,'imogdl','GDL','Imogen','imogdl@gmail.com','imogdl','Aurora Hill','09123456789','dog',2600,NULL,'active','Training,Grooming,Vet',NULL,NULL,'acc'),(5,'rgjfawehi','WRYHQRY','tenewrh','DGNFF@eherg.com','asg9feoy','ndkjgfhweiyfh','10927491221','dog',137129,NULL,'active','Training,Vet',NULL,NULL,'acc'),(6,'qt4wyte','lkjhg','kjhgfds','hnfxgrd@trjyr.rtyr','66rtwe','fjjngfsv','709843','dog',43645,NULL,'active','Training,Vet',NULL,NULL,'acc');
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `servID` int(11) NOT NULL AUTO_INCREMENT,
  `servName` varchar(45) NOT NULL,
  `servPrice` int(11) NOT NULL,
  PRIMARY KEY (`servID`),
  UNIQUE KEY `servID_UNIQUE` (`servID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Pet Walking',100),(2,'Pet Training',300),(3,'Pet Grooming',350),(4,'Veterinarian Services',500);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp`
--

DROP TABLE IF EXISTS `ssp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp` (
  `servID` int(11) NOT NULL,
  `spID` int(11) NOT NULL,
  PRIMARY KEY (`servID`,`spID`),
  CONSTRAINT `ssp.servID` FOREIGN KEY (`servID`) REFERENCES `services` (`servID`) ON UPDATE CASCADE,
  CONSTRAINT `ssp.spID` FOREIGN KEY (`servID`) REFERENCES `service_provider` (`spID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp`
--

LOCK TABLES `ssp` WRITE;
/*!40000 ALTER TABLE `ssp` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `transID` int(11) NOT NULL,
  `transStatus` enum('ongoing','finished') NOT NULL DEFAULT 'ongoing',
  `transDate` date NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL,
  `payment` int(11) NOT NULL,
  `payStatus` enum('not yet paid','paid') NOT NULL DEFAULT 'not yet paid',
  `reqID` int(11) NOT NULL,
  PRIMARY KEY (`transID`),
  KEY `requestid` (`reqID`),
  CONSTRAINT `request_fk` FOREIGN KEY (`reqID`) REFERENCES `request` (`reqID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (1,'ongoing','2015-05-15','08:00:00','09:00:00',100,'not yet paid',1);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'petmovetko'
--

--
-- Dumping routines for database 'petmovetko'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-15  2:22:45
