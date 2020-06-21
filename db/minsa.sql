-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 07:44 PM
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
  `AREA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ESTADO` int(11) DEFAULT '0',
  PRIMARY KEY (`ID_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`ID_AREA`, `AREA`, `ESTADO`) VALUES
(1, 'Unidad de intensivos', 1),
(2, 'Sala 1', 1),
(3, 'Sala 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `camas`
--

CREATE TABLE IF NOT EXISTS `camas` (
  `ID_CAMA` int(11) NOT NULL AUTO_INCREMENT,
  `CAMA` int(11) NOT NULL,
  `ID_CUARTO` int(11) NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'a',
  PRIMARY KEY (`ID_CAMA`),
  KEY `ID_CUARTO` (`ID_CUARTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `camas`
--

INSERT INTO `camas` (`ID_CAMA`, `CAMA`, `ID_CUARTO`, `ESTADO`) VALUES
(1, 1, 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `ID_CONSULTA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ID_MEDICO` int(11) NOT NULL,
  `MVISITA` text COLLATE utf8_spanish_ci,
  `ALERGIA` text COLLATE utf8_spanish_ci,
  `APP` text COLLATE utf8_spanish_ci,
  `AHF` text COLLATE utf8_spanish_ci,
  `AQX` text COLLATE utf8_spanish_ci,
  `INDICACIONES` text COLLATE utf8_spanish_ci,
  `EXAFISICO` text COLLATE utf8_spanish_ci,
  `DIAGNOSTICO` text COLLATE utf8_spanish_ci,
  `FECHA_HORA` date DEFAULT NULL,
  `OBSERVACION` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`ID_CONSULTA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`),
  KEY `ID_MEDICO` (`ID_MEDICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`ID_CONSULTA`, `ID_PACIENTE`, `ID_MEDICO`, `MVISITA`, `ALERGIA`, `APP`, `AHF`, `AQX`, `INDICACIONES`, `EXAFISICO`, `DIAGNOSTICO`, `FECHA_HORA`, `OBSERVACION`) VALUES
(1, 3, 2, 'historial', 'alergía', 'app', 'ahf', 'aqx', 'indicaciones médicas', 'examén físico', 'diagnóstico', '2020-05-30', NULL),
(2, 6, 2, 'ASDF', 'ASDF', 'ADF', 'ASDF', 'ADSF', 'ADF', 'ASDF', 'ASDF', '2020-05-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corregimientos`
--

CREATE TABLE IF NOT EXISTS `corregimientos` (
  `ID_CORREGIMIENTO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) NOT NULL,
  `ID_DISTRITO` int(11) NOT NULL,
  `CORREGIMIENTO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CORREGIMIENTO`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  KEY `ID_DISTRITO` (`ID_DISTRITO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `corregimientos`
--

INSERT INTO `corregimientos` (`ID_CORREGIMIENTO`, `ID_PROVINCIA`, `ID_DISTRITO`, `CORREGIMIENTO`) VALUES
(1, 1, 1, '24 de Diciembre');

-- --------------------------------------------------------

--
-- Table structure for table `cuartos`
--

CREATE TABLE IF NOT EXISTS `cuartos` (
  `ID_CUARTO` int(11) NOT NULL AUTO_INCREMENT,
  `CUARTO` int(11) NOT NULL,
  `ID_AREA` int(11) NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'a',
  PRIMARY KEY (`ID_CUARTO`),
  KEY `ID_AREA` (`ID_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cuartos`
--

INSERT INTO `cuartos` (`ID_CUARTO`, `CUARTO`, `ID_AREA`, `ESTADO`) VALUES
(1, 1, 2, 'a'),
(2, 1, 3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `dietas`
--

CREATE TABLE IF NOT EXISTS `dietas` (
  `ID_DIETA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `DIETA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOTA` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`ID_DIETA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `ID_DISTRITO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) NOT NULL,
  `DISTRITO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_DISTRITO`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `distritos`
--

INSERT INTO `distritos` (`ID_DISTRITO`, `ID_PROVINCIA`, `DISTRITO`) VALUES
(1, 1, 'Panamá'),
(2, 1, 'Balboa'),
(3, 1, 'Chepo'),
(4, 1, 'Chimán'),
(5, 1, 'San Miguelito');

-- --------------------------------------------------------

--
-- Table structure for table `enfermeras`
--

CREATE TABLE IF NOT EXISTS `enfermeras` (
  `ID_MEDICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `OTRAS` text COLLATE utf8_spanish_ci,
  `IDONEIDAD` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MEDICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `enfermeras`
--

INSERT INTO `enfermeras` (`ID_MEDICO`, `NOMBRE1`, `NOMBRE2`, `APELLIDO1`, `APELLIDO2`, `ESPECIALIDAD`, `OTRAS`, `IDONEIDAD`, `CEDULA`, `SEXO`, `TELEFONO`, `CORREO`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', 'F', '1', '1'),
(2, '1', '1', '1', '1', '1', '1', '1', '1', 'M', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `enfermerias`
--

CREATE TABLE IF NOT EXISTS `enfermerias` (
  `ID_ENFERMERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `ID_MEDICO` int(11) NOT NULL,
  `DIAGNOSTICO` text COLLATE utf8_spanish_ci,
  `PROCEDENCIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SEGURO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESPONSABLES` text COLLATE utf8_spanish_ci,
  `SVITALES` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FLLEGADA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONDICION` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `GLASGOWVERVAL` int(11) DEFAULT NULL,
  `GLASGOWVOJOS` int(11) DEFAULT NULL,
  `GLASGOWMOTOR` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `TURNO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `OBSERVACION` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`ID_ENFERMERIA`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`),
  KEY `ID_MEDICO` (`ID_MEDICO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hmedi`
--

CREATE TABLE IF NOT EXISTS `hmedi` (
  `ID_HMEDICAM` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACIENTE` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_HMEDICAM`),
  KEY `ID_PACIENTE` (`ID_PACIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `ID_MEDICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD1` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD2` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD3` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `OTRAS` text COLLATE utf8_spanish_ci,
  `IDONEIDAD` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MEDICO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`ID_MEDICO`, `NOMBRE1`, `NOMBRE2`, `APELLIDO1`, `APELLIDO2`, `ESPECIALIDAD1`, `ESPECIALIDAD2`, `ESPECIALIDAD3`, `OTRAS`, `IDONEIDAD`, `CEDULA`, `SEXO`, `TELEFONO`, `CORREO`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'M', '1', '1'),
(2, 'Angel', 'Michael', 'Garcia', 'Salazar', 'Gato1', 'Gato2', 'Gato3', 'programador', 'lala01', '8-796-2481', 'M', '6851-7784', '3dangs28@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `ID_PACIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AREA` int(11) NOT NULL,
  `ID_PROVINCIA` int(11) NOT NULL,
  `ID_DISTRITO` int(11) NOT NULL,
  `ID_CORREGIMIENTO` int(11) NOT NULL,
  `NOMBRE1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIAGNOSTICO` text COLLATE utf8_spanish_ci,
  `PROCEDENCIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SEGURO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESPONSABLES` text COLLATE utf8_spanish_ci,
  `EDAD` int(11) NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `CEDULA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `TIPAJE` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RELIGION` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `BARRIO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CALLE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NUMCASA` int(11) DEFAULT NULL,
  `ESTADO` int(11) DEFAULT '0',
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_PACIENTE`),
  KEY `ID_AREA` (`ID_AREA`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  KEY `ID_DISTRITO` (`ID_DISTRITO`),
  KEY `ID_CORREGIMIENTO` (`ID_CORREGIMIENTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`ID_PACIENTE`, `ID_AREA`, `ID_PROVINCIA`, `ID_DISTRITO`, `ID_CORREGIMIENTO`, `NOMBRE1`, `NOMBRE2`, `APELLIDO1`, `APELLIDO2`, `DIAGNOSTICO`, `PROCEDENCIA`, `SEGURO`, `RESPONSABLES`, `EDAD`, `FECHA_NAC`, `CEDULA`, `SEXO`, `TIPAJE`, `TELEFONO`, `RELIGION`, `BARRIO`, `CALLE`, `NUMCASA`, `ESTADO`, `FECHA`) VALUES
(1, 2, 1, 3, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'F', 'B NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(2, 3, 1, 3, 1, 'Iguana', 'Cardoze', 'Cardoze', 'Cardoze', 'Ta loco', 'sin procencia', '777', 'Maricruz Valencia y el abuelo', 13, '1995-01-01', '8-796-2481', 'M', 'O POS.', '6851-7784', NULL, 'Gonzalillo', '8', 10, 0, '2020-05-22'),
(3, 1, 1, 1, 1, 'Angel', '', 'Garcia', '', 'no tiene', 'no tiene', '68-00-9900', 'el tío peluche', 33, '1995-01-01', '8-796-2481', 'M', 'O POS.', '6851-7784', NULL, 'Sin Barrio', '8', 10, 0, '2020-05-22'),
(4, 1, 1, 1, 1, 'Angel', '', 'Garcia', '', 'no tiene', 'no tiene', '68-00-9900', 'el tío peluche', 33, '1995-01-01', '8-796-2481', 'M', 'O POS.', '6851-7784', NULL, 'Sin Barrio', '8', 10, 0, '2020-05-22'),
(5, 1, 1, 1, 1, 'Angel', '', 'Garcia', '', 'no tiene', 'no tiene', '68-00-9900', 'el tío peluche', 33, '1995-01-01', '8-796-2481', 'M', 'O POS.', '6851-7784', NULL, 'Sin Barrio', '8', 10, 0, '2020-05-22'),
(6, 2, 1, 1, 1, 'Roberto', '1', 'Garcia', '1', 'no tiene', 'no tiene', 'no tiene', 'la abuela', 33, '1995-01-01', '28', 'M', 'O POS.', '6851-7784', NULL, 'macaracas', '1', 28, 1, '2020-05-22'),
(7, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'M', 'O NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(8, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'M', 'O NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(9, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'F', 'AB NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(10, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'M', 'B NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(11, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'M', 'B NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(12, 1, 1, 1, 1, '2', '2', '2', '2', '2', '2', '2', '2', 2, '1995-01-01', '2', 'F', 'B NEG.', '2', NULL, '2', '2', 2, 0, '2020-05-22'),
(13, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'F', 'B NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(14, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1995-01-01', '1', 'F', 'O NEG.', '1', NULL, '1', '1', 1, 0, '2020-05-22'),
(15, 1, 1, 1, 1, '2', '2', '2', '2', '2', '2', '2', '2', 2, '1995-01-01', '2', 'F', 'O NEG.', '2', NULL, '2', '2', 2, 0, '2020-05-22'),
(16, 1, 1, 1, 1, '2', '2', '2', '2', '2', '2', '2', '2', 2, '1995-01-01', '2', 'F', 'O NEG.', '2', NULL, '2', '2', 2, 0, '2020-05-22'),
(17, 1, 1, 1, 1, '2', '2', '2', '2', '2', '2', '2', '2', 2, '1995-01-01', '2', 'F', 'O NEG.', '2', NULL, '2', '2', 2, 0, '2020-05-22'),
(18, 1, 1, 1, 1, '3', '3', '3', '3', '3', '3', '3', '3', 3, '1995-01-01', '3', 'M', 'B NEG.', '3', NULL, '3', '3', 3, 0, '2020-05-22'),
(19, 1, 1, 1, 1, '6', '6', '6', '6', '6', '6', '6', '6', 6, '1995-01-01', '6', 'F', 'A NEG.', '6', NULL, '6', '6', 6, 0, '2020-05-22'),
(20, 2, 1, 3, 1, 'Sergio', '', 'Nelson', '', '1', '1', '1', 'la abuela', 1, '1995-01-28', '1', 'M', 'A POS.', '64', NULL, 'cerro pelado', '1', 1, 0, '2020-05-23'),
(21, 2, 1, 2, 1, 'Guachimingo', 'Tercero', 'Gato', 'Mentecato', 'No tiene', 'No tiene procedencia', '8-796-2481', 'La abuela', 28, '1995-01-01', '8-796-2481', 'M', 'O NEG.', '6851-7784', NULL, 'No tiene barrio', '8', 10, 0, '2020-05-26'),
(22, 1, 1, 1, 1, 'Madruga', 'Madruga', 'Madruga', 'Madruga', 'Madruga', 'Madruga', 'Madruga', 'Madruga', 5, '1995-01-01', 'Madruga', 'M', 'A POS.', 'Madruga', NULL, 'Madruga', 'Madruga', 5, 0, '2020-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `ID_PERMISO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) NOT NULL,
  `P_CONSULTAR` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_AGREGAR` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_MODIFICAR` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_ELIMINAR` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_TODO` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PERMISO`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`ID_PROVINCIA`, `PROVINCIA`) VALUES
(1, 'Panamá');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SECCION` int(11) NOT NULL,
  `ROL` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_ROL`),
  KEY `ID_SECCION` (`ID_SECCION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_ROL`, `ID_SECCION`, `ROL`, `FECHA_CREACION`) VALUES
(1, 2, 'Soporte IT', '2020-05-20'),
(2, 1, 'Recepción', '2020-05-20'),
(3, 3, 'Médico', '2020-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `ID_SECCION` int(11) NOT NULL AUTO_INCREMENT,
  `SECCION` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_SECCION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `secciones`
--

INSERT INTO `secciones` (`ID_SECCION`, `SECCION`, `FECHA_CREACION`) VALUES
(1, 'Registro Médico', '2020-05-20'),
(2, 'Sistema', '2020-05-20'),
(3, 'Unidad de atención', '2020-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICK` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `PASS` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID_ROL`, `NOMBRE`, `APELLIDO`, `CORREO`, `NICK`, `PASS`) VALUES
(1, 1, 'Nelson', 'Santana', 'nsantana8@hotmail.com', 'NSantana09', '123'),
(2, 1, 'Angel', 'Garcia', 'gato@gmail.com', 'gato', '123'),
(3, 3, 'Angel', 'Garcia', 'gato@gato.com', '8-796-2481', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camas`
--
ALTER TABLE `camas`
  ADD CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`ID_CUARTO`) REFERENCES `cuartos` (`ID_CUARTO`);

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
-- Constraints for table `enfermerias`
--
ALTER TABLE `enfermerias`
  ADD CONSTRAINT `enfermerias_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`),
  ADD CONSTRAINT `enfermerias_ibfk_2` FOREIGN KEY (`ID_MEDICO`) REFERENCES `medicos` (`ID_MEDICO`);

--
-- Constraints for table `hmedi`
--
ALTER TABLE `hmedi`
  ADD CONSTRAINT `hmedi_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Constraints for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`),
  ADD CONSTRAINT `pacientes_ibfk_3` FOREIGN KEY (`ID_DISTRITO`) REFERENCES `distritos` (`ID_DISTRITO`),
  ADD CONSTRAINT `pacientes_ibfk_4` FOREIGN KEY (`ID_CORREGIMIENTO`) REFERENCES `corregimientos` (`ID_CORREGIMIENTO`);

--
-- Constraints for table `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`ID_SECCION`) REFERENCES `secciones` (`ID_SECCION`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
