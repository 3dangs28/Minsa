-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2020 a las 06:01:10
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `minsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `ID_APLICACION` int(11) NOT NULL AUTO_INCREMENT,
  `APLICACION` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_APLICACION`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`ID_APLICACION`, `APLICACION`, `FECHA_CREACION`) VALUES
(5, 'Recepción General', '2020-05-08'),
(4, 'SALA 1', '2020-05-08'),
(6, 'CUIDADOS INTENSIVOS', '2020-05-08'),
(7, 'ADMINISTRACIÓN', '2020-05-08'),
(8, 'SALA 2', '2020-05-08'),
(9, 'SUPERVICIÓN', '2020-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,
  `AREA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_AREA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avi_aeronaves`
--

CREATE TABLE IF NOT EXISTS `avi_aeronaves` (
  `ID_AERONAVE` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONSUMO` float DEFAULT NULL,
  PRIMARY KEY (`ID_AERONAVE`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `avi_aeronaves`
--

INSERT INTO `avi_aeronaves` (`ID_AERONAVE`, `NOMBRE`, `TIPO`, `CONSUMO`) VALUES
(1, 'ANDRES', 'RIOS', 18),
(2, 'RICARDO', 'PEYES', 42),
(3, 'MARIA', 'VERGARA', 23),
(4, 'ROLANDO', 'GARCIA', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avi_firmas`
--

CREATE TABLE IF NOT EXISTS `avi_firmas` (
  `ID_FIRMA` int(11) NOT NULL AUTO_INCREMENT,
  `FIRMA_RUTA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_FIRMA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avi_pasajeros`
--

CREATE TABLE IF NOT EXISTS `avi_pasajeros` (
  `ID_PASAJERO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PLAN` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NACIONALIDAD` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DOCUMENTO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EXP_DOCUMENTO` date DEFAULT NULL,
  PRIMARY KEY (`ID_PASAJERO`),
  KEY `ID_PLAN` (`ID_PLAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avi_plan_vuelo`
--

CREATE TABLE IF NOT EXISTS `avi_plan_vuelo` (
  `ID_PLAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AERONAVE` int(11) NOT NULL,
  `AERO_SALIDA` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AERO_LLEGADA` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PROPIETARIO` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HORA_SALIDA` time DEFAULT NULL,
  `HORA_LLEGADA` time DEFAULT NULL,
  `FECHA_VIAJE` date DEFAULT NULL,
  `DECLA_SANITARIA` text COLLATE utf8_spanish_ci,
  `ESTATUS` varchar(1) COLLATE utf8_spanish_ci DEFAULT '0',
  `ID_FIRMA` int(11) NOT NULL,
  PRIMARY KEY (`ID_PLAN`),
  KEY `ID_AERONAVE` (`ID_AERONAVE`),
  KEY `ID_FIRMA` (`ID_FIRMA`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `avi_plan_vuelo`
--

INSERT INTO `avi_plan_vuelo` (`ID_PLAN`, `ID_AERONAVE`, `AERO_SALIDA`, `AERO_LLEGADA`, `PROPIETARIO`, `HORA_SALIDA`, `HORA_LLEGADA`, `FECHA_VIAJE`, `DECLA_SANITARIA`, `ESTATUS`, `ID_FIRMA`) VALUES
(1, 1, 'Bocas del toro', 'Panamá', 'Un gato', '00:00:00', '00:00:00', '2020-12-28', 'una declaración', '1', 1),
(2, 1, 'Panamá', 'Bocas del toro', 'Un gato', '00:00:00', '00:00:00', '2020-12-12', 'bdas', '1', 1),
(3, 1, 'Bocas del toro', 'Panamá', 'Un gato', '13:30:00', '15:30:00', '2020-12-25', 'nada', '1', 1),
(4, 2, 'Chiriquí', 'Panamá', 'copa', '14:30:00', '17:30:00', '2020-12-10', 'nada de nada', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avi_tripulacion`
--

CREATE TABLE IF NOT EXISTS `avi_tripulacion` (
  `ID_TRIPULACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PLAN` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FUNCION` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `LICENCIA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NACIONALIDAD` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `PASAPORTE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EXP_PASAPORTE` date DEFAULT NULL,
  PRIMARY KEY (`ID_TRIPULACION`),
  KEY `ID_PLAN` (`ID_PLAN`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `avi_tripulacion`
--

INSERT INTO `avi_tripulacion` (`ID_TRIPULACION`, `ID_PLAN`, `NOMBRE`, `APELLIDO`, `FUNCION`, `LICENCIA`, `NACIONALIDAD`, `FECHA_NAC`, `PASAPORTE`, `EXP_PASAPORTE`) VALUES
(1, 4, 'Angel', 'Garcia', 'Piloto', '54asdf', 'Panamá', '1986-06-28', 'asdfa', '2020-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corregimientos`
--

CREATE TABLE IF NOT EXISTS `corregimientos` (
  `ID_CORREGIMIENTO` int(11) NOT NULL AUTO_INCREMENT,
  `CORREGIMIENTO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CORREGIMIENTO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `corregimientos`
--

INSERT INTO `corregimientos` (`ID_CORREGIMIENTO`, `CORREGIMIENTO`) VALUES
(1, 'Ancón'),
(2, 'Bella vista'),
(3, 'Parque Lefevre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `ID_DISTRITO` int(11) NOT NULL AUTO_INCREMENT,
  `DISTRITO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_DISTRITO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`ID_DISTRITO`, `DISTRITO`) VALUES
(1, 'Panamá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `ID_PERMISO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_APLICACION` int(11) NOT NULL,
  `ID_SECCION` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `P_VER` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_MODIFICAR` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_TODO` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PERMISO`),
  KEY `ID_APLICACION` (`ID_APLICACION`),
  KEY `ID_SECCION` (`ID_SECCION`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`ID_PROVINCIA`, `PROVINCIA`) VALUES
(1, 'Panamá'),
(2, 'Bocas del Toro'),
(3, 'Chiriquí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_APLICACION` int(11) NOT NULL,
  `ROL` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_ROL`),
  KEY `ID_APLICACION` (`ID_APLICACION`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `ID_APLICACION`, `ROL`, `FECHA_CREACION`) VALUES
(6, 7, 'SOPORTE IT', '2020-05-08'),
(4, 6, 'MEDICOS', '2020-05-08'),
(5, 6, 'ENFERMERAS', '2020-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `ID_SECCION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_APLICACION` int(11) NOT NULL,
  `SECCION` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_SECCION`),
  KEY `ID_APLICACION` (`ID_APLICACION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_APLICACION` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICK` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PASS` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `ID_APLICACION` (`ID_APLICACION`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID_APLICACION`, `ID_ROL`, `NOMBRE`, `APELLIDO`, `CORREO`, `NICK`, `PASS`) VALUES
(1, 1, 1, 'angel', 'garcia2', '3dangs28@gmail.com', 'agarcia', 'Ygh8b77t'),
(2, 6, 5, 'Nelson', 'Santana', 'nsantana8@hotmail.com', 'NSantana23', '123456'),
(3, 7, 6, 'Nelson', 'Santana', 'nsantana8@hotmail.com', 'NSantana09', '123'),
(4, 7, 6, 'Angel', 'Garcia', '1@gato.com', 'gato', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
