-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2014 a las 04:22:15
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cajero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `CUE_ID` int(11) NOT NULL,
  `USR_ID` int(11) NOT NULL,
  `CUE_BALANCE` decimal(12,2) DEFAULT NULL,
  `CUE_TIPO` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CUE_ID`),
  KEY `FK_USUARIO_CUENTA` (`USR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`CUE_ID`, `USR_ID`, `CUE_BALANCE`, `CUE_TIPO`) VALUES
(1, 1, '420.00', 'Ahorro'),
(2, 2, '890.00', 'Corriente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `MOV_ID` int(11) NOT NULL,
  `CUE_ID` int(11) NOT NULL,
  `MOV_TIPO` varchar(200) DEFAULT NULL,
  `MOV_FECHA` date DEFAULT NULL,
  PRIMARY KEY (`MOV_ID`),
  KEY `FK_CUENTA_MOVIMIENTO` (`CUE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USR_ID` int(11) NOT NULL,
  `USR_NICK` varchar(50) DEFAULT NULL,
  `USR_CLAVE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`USR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USR_ID`, `USR_NICK`, `USR_CLAVE`) VALUES
(1, 'dpmorocho', '$2y$12$FDqWAtlFxC4YlCrZne3Wn.Cp0eyHPreEVleRUBdI0iDILr0Rzheym'),
(2, 'test', '$2y$12$IDptGB0PkEoB1ulO0jElQO8KNMpnw4qUBM.qstws.nwz29OIoB4qW');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `FK_USUARIO_CUENTA` FOREIGN KEY (`USR_ID`) REFERENCES `usuario` (`USR_ID`);

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `FK_CUENTA_MOVIMIENTO` FOREIGN KEY (`CUE_ID`) REFERENCES `cuenta` (`CUE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
