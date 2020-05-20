-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2020 a las 17:23:29
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
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,
  `AREA` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_AREA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`ID_AREA`, `AREA`) VALUES
(1, 'Unidad de intensivos'),
(2, 'Unidad de recuperación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corregimientos`
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
-- Volcado de datos para la tabla `corregimientos`
--

INSERT INTO `corregimientos` (`ID_CORREGIMIENTO`, `ID_PROVINCIA`, `ID_DISTRITO`, `CORREGIMIENTO`) VALUES
(1, 1, 1, '24 de Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
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
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `ID_DISTRITO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) NOT NULL,
  `DISTRITO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_DISTRITO`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`ID_DISTRITO`, `ID_PROVINCIA`, `DISTRITO`) VALUES
(1, 1, 'Panamá'),
(2, 1, 'Balboa'),
(3, 1, 'Chepo'),
(4, 1, 'Chimán'),
(5, 1, 'San Miguelito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermeras`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermerias`
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
-- Estructura de tabla para la tabla `hmedi`
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
-- Estructura de tabla para la tabla `medicos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
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
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROVINCIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`ID_PROVINCIA`, `PROVINCIA`) VALUES
(1, 'Panamá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SECCION` int(11) NOT NULL,
  `ROL` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_ROL`),
  KEY `ID_SECCION` (`ID_SECCION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `ID_SECCION`, `ROL`, `FECHA_CREACION`) VALUES
(1, 2, 'Soporte IT', '2020-05-20'),
(2, 1, 'Recepción', '2020-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `ID_SECCION` int(11) NOT NULL AUTO_INCREMENT,
  `SECCION` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_SECCION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`ID_SECCION`, `SECCION`, `FECHA_CREACION`) VALUES
(1, 'Registro Médico', '2020-05-20'),
(2, 'Sistema', '2020-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID_ROL`, `NOMBRE`, `APELLIDO`, `CORREO`, `NICK`, `PASS`) VALUES
(1, 1, 'Nelson', 'Santana', 'nsantana8@hotmail.com', 'NSantana09', '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  ADD CONSTRAINT `corregimientos_ibfk_1` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`),
  ADD CONSTRAINT `corregimientos_ibfk_2` FOREIGN KEY (`ID_DISTRITO`) REFERENCES `distritos` (`ID_DISTRITO`);

--
-- Filtros para la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD CONSTRAINT `dietas_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_ibfk_1` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`);

--
-- Filtros para la tabla `enfermerias`
--
ALTER TABLE `enfermerias`
  ADD CONSTRAINT `enfermerias_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`),
  ADD CONSTRAINT `enfermerias_ibfk_2` FOREIGN KEY (`ID_MEDICO`) REFERENCES `medicos` (`ID_MEDICO`);

--
-- Filtros para la tabla `hmedi`
--
ALTER TABLE `hmedi`
  ADD CONSTRAINT `hmedi_ibfk_1` FOREIGN KEY (`ID_PACIENTE`) REFERENCES `pacientes` (`ID_PACIENTE`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincias` (`ID_PROVINCIA`),
  ADD CONSTRAINT `pacientes_ibfk_3` FOREIGN KEY (`ID_DISTRITO`) REFERENCES `distritos` (`ID_DISTRITO`),
  ADD CONSTRAINT `pacientes_ibfk_4` FOREIGN KEY (`ID_CORREGIMIENTO`) REFERENCES `corregimientos` (`ID_CORREGIMIENTO`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`ID_SECCION`) REFERENCES `secciones` (`ID_SECCION`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
