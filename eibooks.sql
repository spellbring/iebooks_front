-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2016 a las 13:47:32
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eibooks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `ID_COMENTARIOS` int(11) NOT NULL AUTO_INCREMENT,
  `VALORACION` int(11) DEFAULT NULL,
  `COMENTARIO` varchar(1000) DEFAULT NULL,
  `LIBRO_ID_LIBRO` int(11) NOT NULL,
  `LOGIN_ID_USER` int(11) NOT NULL,
  PRIMARY KEY (`ID_COMENTARIOS`,`LIBRO_ID_LIBRO`,`LOGIN_ID_USER`),
  KEY `fk_COMENTARIOS_LIBRO1_idx` (`LIBRO_ID_LIBRO`),
  KEY `fk_COMENTARIOS_LOGIN1_idx` (`LOGIN_ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT,
  `GENERO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_GENERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `ID_LIBRO` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` char(1) DEFAULT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `ETIQUETA1` varchar(45) DEFAULT NULL,
  `ETIQUETA2` varchar(45) DEFAULT NULL,
  `ETIQUETA3` varchar(45) DEFAULT NULL,
  `ETIQUETA4` varchar(45) DEFAULT NULL,
  `ETIQUETA5` varchar(45) DEFAULT NULL,
  `ETIQUETA6` varchar(45) DEFAULT NULL,
  `ETIQUETA7` varchar(45) DEFAULT NULL,
  `GENERO_ID_GENERO` int(11) NOT NULL,
  `LOGIN_ID_USER` int(11) NOT NULL,
  PRIMARY KEY (`ID_LIBRO`,`GENERO_ID_GENERO`,`LOGIN_ID_USER`),
  KEY `fk_LIBRO_GENERO_idx` (`GENERO_ID_GENERO`),
  KEY `fk_LIBRO_LOGIN1_idx` (`LOGIN_ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(45) DEFAULT NULL,
  `PASSWORD` varchar(128) DEFAULT NULL,
  `CORREO` varchar(100) DEFAULT NULL,
  `INFORMACION` varchar(2000) DEFAULT NULL,
  `FECHACREACION` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID_USER`, `USUARIO`, `PASSWORD`, `CORREO`, `INFORMACION`, `FECHACREACION`) VALUES
(28, 'user', 'E1V7X.vdvfX/U', 'user@user.cl', '', '2015-12-27 00:00:00'),
(29, 'user2', 'E1V7X.vdvfX/U', 'user@asd.cl', '', '2015-12-27 00:00:00'),
(30, 'user33', 'E1V7X.vdvfX/U', 'user33@iser.cl', '', '2015-12-27 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_libro`
--

CREATE TABLE IF NOT EXISTS `login_libro` (
  `LOGIN_ID_USER` int(11) NOT NULL,
  `LIBRO_ID_LIBRO` int(11) NOT NULL,
  `TIPO` char(1) DEFAULT NULL,
  `PARRAFO_ID_PARRAFO` int(11) NOT NULL,
  PRIMARY KEY (`LOGIN_ID_USER`,`LIBRO_ID_LIBRO`,`PARRAFO_ID_PARRAFO`),
  KEY `fk_LOGIN_has_LIBRO_LIBRO1_idx` (`LIBRO_ID_LIBRO`),
  KEY `fk_LOGIN_has_LIBRO_LOGIN1_idx` (`LOGIN_ID_USER`),
  KEY `fk_LOGIN_has_LIBRO_PARRAFO1_idx` (`PARRAFO_ID_PARRAFO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parrafo`
--

CREATE TABLE IF NOT EXISTS `parrafo` (
  `ID_PARRAFO` int(11) NOT NULL AUTO_INCREMENT,
  `PARRAFO` text,
  `PAGINA` int(11) DEFAULT NULL,
  `LIBRO_ID_LIBRO` int(11) NOT NULL,
  PRIMARY KEY (`ID_PARRAFO`,`LIBRO_ID_LIBRO`),
  KEY `fk_PARRAFO_LIBRO1_idx` (`LIBRO_ID_LIBRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
  `ID_VARIABLES` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `TEXTO` varchar(100) DEFAULT NULL,
  `VALOR` float DEFAULT NULL,
  `LIBRO_ID_LIBRO` int(11) NOT NULL,
  PRIMARY KEY (`ID_VARIABLES`,`LIBRO_ID_LIBRO`),
  KEY `fk_VARIABLES_LIBRO1_idx` (`LIBRO_ID_LIBRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables_usuario`
--

CREATE TABLE IF NOT EXISTS `variables_usuario` (
  `LOGIN_ID_USER` int(11) NOT NULL,
  `VARIABLES_ID_VARIABLES` int(11) NOT NULL,
  `TEXTO` varchar(100) DEFAULT NULL,
  `VALOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`LOGIN_ID_USER`,`VARIABLES_ID_VARIABLES`),
  KEY `fk_LOGIN_has_VARIABLES_VARIABLES1_idx` (`VARIABLES_ID_VARIABLES`),
  KEY `fk_LOGIN_has_VARIABLES_LOGIN1_idx` (`LOGIN_ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_COMENTARIOS_LIBRO1` FOREIGN KEY (`LIBRO_ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_COMENTARIOS_LOGIN1` FOREIGN KEY (`LOGIN_ID_USER`) REFERENCES `login` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_LIBRO_GENERO` FOREIGN KEY (`GENERO_ID_GENERO`) REFERENCES `genero` (`ID_GENERO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LIBRO_LOGIN1` FOREIGN KEY (`LOGIN_ID_USER`) REFERENCES `login` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `login_libro`
--
ALTER TABLE `login_libro`
  ADD CONSTRAINT `fk_LOGIN_has_LIBRO_LIBRO1` FOREIGN KEY (`LIBRO_ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LOGIN_has_LIBRO_LOGIN1` FOREIGN KEY (`LOGIN_ID_USER`) REFERENCES `login` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LOGIN_has_LIBRO_PARRAFO1` FOREIGN KEY (`PARRAFO_ID_PARRAFO`) REFERENCES `parrafo` (`ID_PARRAFO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parrafo`
--
ALTER TABLE `parrafo`
  ADD CONSTRAINT `fk_PARRAFO_LIBRO1` FOREIGN KEY (`LIBRO_ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `variables`
--
ALTER TABLE `variables`
  ADD CONSTRAINT `fk_VARIABLES_LIBRO1` FOREIGN KEY (`LIBRO_ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `variables_usuario`
--
ALTER TABLE `variables_usuario`
  ADD CONSTRAINT `fk_LOGIN_has_VARIABLES_LOGIN1` FOREIGN KEY (`LOGIN_ID_USER`) REFERENCES `login` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LOGIN_has_VARIABLES_VARIABLES1` FOREIGN KEY (`VARIABLES_ID_VARIABLES`) REFERENCES `variables` (`ID_VARIABLES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
