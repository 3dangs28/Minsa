-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 07:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,
  `AREA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `ESTADO` int(11) DEFAULT '1',
  PRIMARY KEY (`ID_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`ID_AREA`, `AREA`, `ESTADO`) VALUES
(1, 'Urgencias', 1),
(2, 'Cirugía', 1),
(3, 'Manitas Calientes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `camas`
--

CREATE TABLE IF NOT EXISTS `camas` (
  `ID_CAMA` int(11) NOT NULL AUTO_INCREMENT,
  `CAMA` int(11) NOT NULL,
  `ID_CUARTO` int(11) NOT NULL,
  `USO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'l',
  `ESTADO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'a',
  PRIMARY KEY (`ID_CAMA`),
  KEY `ID_CUARTO` (`ID_CUARTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `camas`
--

INSERT INTO `camas` (`ID_CAMA`, `CAMA`, `ID_CUARTO`, `USO`, `ESTADO`) VALUES
(1, 1, 1, 'u', 'a'),
(2, 2, 1, 'u', 'a'),
(3, 2, 4, 'l', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `circulacion`
--

CREATE TABLE IF NOT EXISTS `circulacion` (
  `ID_CIRCULACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `SELLOHEPARINA` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VENOCLISI` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EDEMAS` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ELOCALIZACION` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HERIDA` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HERIDA_TIPO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HEMORRAGIA` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HEMO_LUGAR` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_CIRCULACION`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comunicacion`
--

CREATE TABLE IF NOT EXISTS `comunicacion` (
  `ID_DOLOR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `COMU_VERBAL` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `DISFASIA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `AFASIA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `DISATRIA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `DISFEMIA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `OBS` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_DOLOR`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `ID_CONSULTA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ID_MEDICO` int(11) NOT NULL,
  `MVISITA` text COLLATE utf8_spanish2_ci,
  `ALERGIA` text COLLATE utf8_spanish2_ci,
  `APP` text COLLATE utf8_spanish2_ci,
  `AHF` text COLLATE utf8_spanish2_ci,
  `AQX` text COLLATE utf8_spanish2_ci,
  `INDICACIONES` text COLLATE utf8_spanish2_ci,
  `EXAFISICO` text COLLATE utf8_spanish2_ci,
  `DIAGNOSTICO` text COLLATE utf8_spanish2_ci,
  `FECHA_HORA` date DEFAULT NULL,
  `OBSERVACION` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`ID_CONSULTA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`),
  KEY `ID_MEDICO` (`ID_MEDICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`ID_CONSULTA`, `ID_PACIENTE`, `ID_MEDICO`, `MVISITA`, `ALERGIA`, `APP`, `AHF`, `AQX`, `INDICACIONES`, `EXAFISICO`, `DIAGNOSTICO`, `FECHA_HORA`, `OBSERVACION`) VALUES
(1, 1, 1, 'algo ', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2020-09-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corregimientos`
--

CREATE TABLE IF NOT EXISTS `corregimientos` (
  `ID_CORREGIMIENTO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) NOT NULL,
  `ID_DISTRITO` int(11) NOT NULL,
  `CORREGIMIENTO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CORREGIMIENTO`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  KEY `ID_DISTRITO` (`ID_DISTRITO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `corregimientos`
--

INSERT INTO `corregimientos` (`ID_CORREGIMIENTO`, `ID_PROVINCIA`, `ID_DISTRITO`, `CORREGIMIENTO`) VALUES
(1, 8, 4, '24 de Diciembre');

-- --------------------------------------------------------

--
-- Table structure for table `cuartos`
--

CREATE TABLE IF NOT EXISTS `cuartos` (
  `ID_CUARTO` int(11) NOT NULL AUTO_INCREMENT,
  `CUARTO` int(11) NOT NULL,
  `ID_AREA` int(11) NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'a',
  PRIMARY KEY (`ID_CUARTO`),
  KEY `ID_AREA` (`ID_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cuartos`
--

INSERT INTO `cuartos` (`ID_CUARTO`, `CUARTO`, `ID_AREA`, `ESTADO`) VALUES
(1, 1, 2, 'a'),
(4, 1, 3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `deambulacion`
--

CREATE TABLE IF NOT EXISTS `deambulacion` (
  `ID_DEAMBULACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ALTERADA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `CAUSA` text COLLATE utf8_spanish2_ci,
  `DEFORMACION` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `DEFO_LUGAR` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TONO_NORMAL` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `TONO_DISMINUIDA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `OBS` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_DEAMBULACION`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dietas`
--

CREATE TABLE IF NOT EXISTS `dietas` (
  `ID_DIETA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `DIETA` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_DIETA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `ID_DISTRITO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) NOT NULL,
  `DISTRITO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_DISTRITO`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `distritos`
--

INSERT INTO `distritos` (`ID_DISTRITO`, `ID_PROVINCIA`, `DISTRITO`) VALUES
(4, 8, 'Panamá');

-- --------------------------------------------------------

--
-- Table structure for table `dolor`
--

CREATE TABLE IF NOT EXISTS `dolor` (
  `ID_DOLOR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `EVA` int(11) DEFAULT NULL,
  `LOCALIZACION` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_DOLOR`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eli_intestinal`
--

CREATE TABLE IF NOT EXISTS `eli_intestinal` (
  `ID_INSTESTINAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `FRECUENCIA` int(11) DEFAULT NULL,
  `NORMAL` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `ESTRENIMIENTO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `DIARREA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `COLOR` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OBS` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_INSTESTINAL`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eli_urinaria`
--

CREATE TABLE IF NOT EXISTS `eli_urinaria` (
  `ID_URINARIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ESPONTANEA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `PAMPER` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `SONDA_SUPRAPUBICA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `SONDA_URETRAL` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `COLOR` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OLOR` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OBS` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_URINARIA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `enfermeras`
--

CREATE TABLE IF NOT EXISTS `enfermeras` (
  `ID_MEDICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OTRAS` text COLLATE utf8_spanish2_ci,
  `IDONEIDAD` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MEDICO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `enfermerias`
--

CREATE TABLE IF NOT EXISTS `enfermerias` (
  `ID_ENFERMERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ID_MEDICO` int(11) NOT NULL,
  `DIAGNOSTICO` text COLLATE utf8_spanish2_ci,
  `PROCEDENCIA` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGURO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDIOMA` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESPONSABLES` text COLLATE utf8_spanish2_ci,
  `SVITAT` float DEFAULT NULL,
  `SVITAP` float DEFAULT NULL,
  `SVITAR` float DEFAULT NULL,
  `SVITAPA` float DEFAULT NULL,
  `SVITASO2` float DEFAULT NULL,
  `FLLEGADA` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONDICION` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `GLASGOWVERVAL` int(11) DEFAULT NULL,
  `GLASGOWVOJOS` int(11) DEFAULT NULL,
  `GLASGOWMOTOR` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `TURNO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OBSERVACION` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`ID_ENFERMERIA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`),
  KEY `ID_MEDICO` (`ID_MEDICO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `estados_piel`
--

CREATE TABLE IF NOT EXISTS `estados_piel` (
  `ID_ESTADO_PIEL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `COLOR_ALTERADO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `OBS_COLOR` text COLLATE utf8_spanish2_ci,
  `INTEGRA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `HIDRATADA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `SUB_HIDRATADA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `MACERADA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT 'n',
  `OBS` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO_PIEL`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hmedi`
--

CREATE TABLE IF NOT EXISTS `hmedi` (
  `ID_HMEDICAM` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_HMEDICAM`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `ID_MEDICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESPECIALIDAD1` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESPECIALIDAD2` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESPECIALIDAD3` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OTRAS` text COLLATE utf8_spanish2_ci,
  `IDONEIDAD` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MEDICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`ID_MEDICO`, `NOMBRE1`, `NOMBRE2`, `APELLIDO1`, `APELLIDO2`, `ESPECIALIDAD1`, `ESPECIALIDAD2`, `ESPECIALIDAD3`, `OTRAS`, `IDONEIDAD`, `CEDULA`, `SEXO`, `TELEFONO`, `CORREO`) VALUES
(1, 'Roberto', 'Anacleto', 'Cediño', 'Garcia', 'Magico', '3', 'Exótico', '4', 'adsrgtfd', '8-796-2481', 'M', '231-6711', 'lala@gato.com');

-- --------------------------------------------------------

--
-- Table structure for table `mucosa_oral`
--

CREATE TABLE IF NOT EXISTS `mucosa_oral` (
  `ID_MUCOSA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CAUSAS` text COLLATE utf8_spanish2_ci,
  `DENTINCION` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LROSADA_COLOR` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LENGUA_HUMEDA` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `REFLE_DEGLUCION` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `REFLE_CAUSA` text COLLATE utf8_spanish2_ci,
  `USR_CREA` int(11) NOT NULL,
  `FECHA_CREA` date DEFAULT NULL,
  `USR_MODIFICA` int(11) NOT NULL,
  `FECHA_MODIFICA` date DEFAULT NULL,
  PRIMARY KEY (`ID_MUCOSA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `ID_PACIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AREA` int(11) NOT NULL,
  `ID_CUARTO` int(11) NOT NULL,
  `ID_CAMA` int(11) NOT NULL,
  `ID_PROVINCIA` int(11) NOT NULL,
  `ID_DISTRITO` int(11) NOT NULL,
  `ID_CORREGIMIENTO` int(11) NOT NULL,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIAGNOSTICO` text COLLATE utf8_spanish2_ci,
  `PROCEDENCIA` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGURO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESPONSABLES` text COLLATE utf8_spanish2_ci,
  `EDAD` int(11) NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `TIPAJE` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RELIGION` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `BARRIO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CALLE` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUMCASA` int(11) DEFAULT NULL,
  `ESTADO` int(11) DEFAULT '0',
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_PACIENTE`),
  KEY `ID_AREA` (`ID_AREA`),
  KEY `ID_CUARTO` (`ID_CUARTO`),
  KEY `ID_CAMA` (`ID_CAMA`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  KEY `ID_DISTRITO` (`ID_DISTRITO`),
  KEY `ID_CORREGIMIENTO` (`ID_CORREGIMIENTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`ID_PACIENTE`, `ID_AREA`, `ID_CUARTO`, `ID_CAMA`, `ID_PROVINCIA`, `ID_DISTRITO`, `ID_CORREGIMIENTO`, `NOMBRE1`, `NOMBRE2`, `APELLIDO1`, `APELLIDO2`, `DIAGNOSTICO`, `PROCEDENCIA`, `SEGURO`, `RESPONSABLES`, `EDAD`, `FECHA_NAC`, `CEDULA`, `SEXO`, `TIPAJE`, `TELEFONO`, `RELIGION`, `BARRIO`, `CALLE`, `NUMCASA`, `ESTADO`, `FECHA`) VALUES
(1, 2, 1, 1, 8, 4, 1, 'Angel', 'Michael', 'Garcia', 'Salazar', 'no tiene', 'sin procedencia', 'no tiene', 'no tiene familiares', 28, '1995-01-01', '8-796-2481', 'M', 'O NEG.', '231-6711', 'No tiene', 'cerquita de la calle', '40', 12, 1, '2020-09-05'),
(2, 2, 1, 2, 8, 4, 1, 'sdafa', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 24, '1995-01-01', 'asdf', 'M', 'O NEG.', 'asdf', 'asdf', 'asdf', 'asdf', 12, 0, '2020-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `ID_PERMISO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) NOT NULL,
  `P_CONSULTAR` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `P_AGREGAR` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `P_MODIFICAR` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `P_ELIMINAR` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `P_TODO` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PERMISO`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`ID_PROVINCIA`, `PROVINCIA`) VALUES
(8, 'Panamá');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ROL` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_CREACION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_ROL`, `ROL`, `FECHA_CREACION`) VALUES
(1, 'Administrador', '2020-08-02 23:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) DEFAULT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `cedula`, `nombre`, `usuario`, `password`, `correo`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 1, '8-796-2481', 'Angel', 'pichu', '20EAfcH0JSFQY', '3dangs28@gmail.com', '', 1, '2020-09-05 16:37:10', '2020-09-05 23:31:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camas`
--
ALTER TABLE `camas`
  ADD CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`ID_CUARTO`) REFERENCES `cuartos` (`ID_CUARTO`);

--
-- Constraints for table `circulacion`
--
ALTER TABLE `circulacion`
  ADD CONSTRAINT `circulacion_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `comunicacion`
--
ALTER TABLE `comunicacion`
  ADD CONSTRAINT `comunicacion_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`),
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`ID_MEDICO`) REFERENCES `medicos` (`ID_MEDICO`);

--
-- Constraints for table `corregimientos`
--
ALTER TABLE `corregimientos`
  ADD CONSTRAINT `corregimientos_ibfk_1` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`),
  ADD CONSTRAINT `corregimientos_ibfk_2` FOREIGN KEY (`ID_DISTRITO`) REFERENCES `distritos` (`ID_DISTRITO`);

--
-- Constraints for table `cuartos`
--
ALTER TABLE `cuartos`
  ADD CONSTRAINT `cuartos_ibfk_1` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`);

--
-- Constraints for table `deambulacion`
--
ALTER TABLE `deambulacion`
  ADD CONSTRAINT `deambulacion_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `dietas`
--
ALTER TABLE `dietas`
  ADD CONSTRAINT `dietas_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_ibfk_1` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`);

--
-- Constraints for table `dolor`
--
ALTER TABLE `dolor`
  ADD CONSTRAINT `dolor_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `eli_intestinal`
--
ALTER TABLE `eli_intestinal`
  ADD CONSTRAINT `eli_intestinal_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `eli_urinaria`
--
ALTER TABLE `eli_urinaria`
  ADD CONSTRAINT `eli_urinaria_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `enfermerias`
--
ALTER TABLE `enfermerias`
  ADD CONSTRAINT `enfermerias_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`),
  ADD CONSTRAINT `enfermerias_ibfk_2` FOREIGN KEY (`ID_MEDICO`) REFERENCES `medicos` (`ID_MEDICO`);

--
-- Constraints for table `estados_piel`
--
ALTER TABLE `estados_piel`
  ADD CONSTRAINT `estados_piel_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `hmedi`
--
ALTER TABLE `hmedi`
  ADD CONSTRAINT `hmedi_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `mucosa_oral`
--
ALTER TABLE `mucosa_oral`
  ADD CONSTRAINT `mucosa_oral_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`ID_CUARTO`) REFERENCES `cuartos` (`ID_CUARTO`),
  ADD CONSTRAINT `pacientes_ibfk_3` FOREIGN KEY (`ID_CAMA`) REFERENCES `camas` (`ID_CAMA`),
  ADD CONSTRAINT `pacientes_ibfk_4` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`),
  ADD CONSTRAINT `pacientes_ibfk_5` FOREIGN KEY (`ID_DISTRITO`) REFERENCES `distritos` (`ID_DISTRITO`),
  ADD CONSTRAINT `pacientes_ibfk_6` FOREIGN KEY (`ID_CORREGIMIENTO`) REFERENCES `corregimientos` (`ID_CORREGIMIENTO`);

--
-- Constraints for table `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
