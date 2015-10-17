# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.25)
# Base de datos: Arduino
# Tiempo de Generación: 2015-10-16 07:09:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla Dispositivos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Dispositivos`;

CREATE TABLE `Dispositivos` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `pin0` varchar(15) DEFAULT NULL,
  `pin1` varchar(15) DEFAULT NULL,
  `pin2` varchar(15) DEFAULT NULL,
  `pin3` varchar(15) DEFAULT NULL,
  `pin4` varchar(15) DEFAULT NULL,
  `pin5` varchar(15) DEFAULT NULL,
  `pin6` varchar(15) DEFAULT NULL,
  `pin7` varchar(15) DEFAULT NULL,
  `pin8` varchar(15) DEFAULT NULL,
  `pin9` varchar(15) DEFAULT NULL,
  `pin10` varchar(15) DEFAULT NULL,
  `pin11` varchar(15) DEFAULT NULL,
  `pin12` varchar(15) DEFAULT NULL,
  `pin13` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Dispositivos` WRITE;
/*!40000 ALTER TABLE `Dispositivos` DISABLE KEYS */;

INSERT INTO `Dispositivos` (`id`, `pin0`, `pin1`, `pin2`, `pin3`, `pin4`, `pin5`, `pin6`, `pin7`, `pin8`, `pin9`, `pin10`, `pin11`, `pin12`, `pin13`)
VALUES
	(1,'','sdfsdfsd','','','','','','','','','','','',''),
	(2,'','sdfsdfsd','sdfsdsdf','a','f','u',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `Dispositivos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla Estados
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Estados`;

CREATE TABLE `Estados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pin0` int(1) NOT NULL,
  `pin1` int(1) NOT NULL,
  `pin2` int(1) NOT NULL,
  `pin3` int(1) NOT NULL,
  `pin4` int(1) NOT NULL,
  `pin5` int(1) NOT NULL,
  `pin6` int(1) NOT NULL,
  `pin7` int(1) NOT NULL,
  `pin8` int(1) NOT NULL,
  `pin9` int(1) NOT NULL,
  `pin10` int(1) NOT NULL,
  `pin11` int(1) NOT NULL,
  `pin12` int(1) NOT NULL,
  `pin13` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Estados` WRITE;
/*!40000 ALTER TABLE `Estados` DISABLE KEYS */;

INSERT INTO `Estados` (`id`, `pin0`, `pin1`, `pin2`, `pin3`, `pin4`, `pin5`, `pin6`, `pin7`, `pin8`, `pin9`, `pin10`, `pin11`, `pin12`, `pin13`)
VALUES
	(1,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
	(2,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

/*!40000 ALTER TABLE `Estados` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla Usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Usuarios`;

CREATE TABLE `Usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;

INSERT INTO `Usuarios` (`Id`, `Usuario`, `Password`)
VALUES
	(1,'manuelignacioantonio@gmail.com','cacasca');

/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
