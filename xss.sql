# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: xss
# ------------------------------------------------------
# Server version 5.5.36

#
# Source for table ti_poject
#

DROP TABLE IF EXISTS `ti_poject`;
CREATE TABLE `ti_poject` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `func` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

#
# Dumping data for table ti_poject
#

LOCK TABLES `ti_poject` WRITE;
/*!40000 ALTER TABLE `ti_poject` DISABLE KEYS */;
/*!40000 ALTER TABLE `ti_poject` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table ti_regcode
#

DROP TABLE IF EXISTS `ti_regcode`;
CREATE TABLE `ti_regcode` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `regpass` varchar(255) DEFAULT NULL,
  `regcode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=gbk;

#
# Dumping data for table ti_regcode
#

LOCK TABLES `ti_regcode` WRITE;
/*!40000 ALTER TABLE `ti_regcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `ti_regcode` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table ti_user
#

DROP TABLE IF EXISTS `ti_user`;
CREATE TABLE `ti_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `regtime` varchar(255) DEFAULT NULL,
  `regcode` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk;

#
# Dumping data for table ti_user
#

LOCK TABLES `ti_user` WRITE;
/*!40000 ALTER TABLE `ti_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ti_user` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table ti_x
#

DROP TABLE IF EXISTS `ti_x`;
CREATE TABLE `ti_x` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `ua` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

#
# Dumping data for table ti_x
#

LOCK TABLES `ti_x` WRITE;
/*!40000 ALTER TABLE `ti_x` DISABLE KEYS */;
/*!40000 ALTER TABLE `ti_x` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
