-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2017 a las 00:06:52
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agilt`
--

CREATE TABLE IF NOT EXISTS `agilt` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agilt`
--

INSERT INTO `agilt` (`name`, `password`, `lastname`, `email`, `city`, `address`, `id`) VALUES
('alvarez-ty@hotmail.com', 'llolo1212', 'Alvarez', 'alvarez-ty@hotmail.com', 'manizales', 'cra', 3),
('Edison0315', '12345', 'Bedoya', 'ebg-0315@hotmail.com', 'Manizales', 'Calle 48 G2 # 1C - 35', 4),
('Sergio', '12345', 'Gutierres', 'guti@hotmail.com', 'Manizales', 'Barrio estrella', 5),
('Daneil', 'rosk', 'Rosca', 'rosk@hotmail.com', 'Cali', 'Calle 102 # 23 B - 34', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `Marca` varchar(100) NOT NULL DEFAULT '',
  `Modelo` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Cilindraje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buy`
--

INSERT INTO `buy` (`Marca`, `Modelo`, `Color`, `Cilindraje`) VALUES
('Merzedes Ben 10', '1990', 'rojo', '6500'),
('Audi', '2018', 'rojo', '6500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
`id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `capacidad` int(1) NOT NULL,
  `chasis` bigint(10) NOT NULL,
  `modelo` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca`, `color`, `capacidad`, `chasis`, `modelo`) VALUES
(1, 'Mazda', 'Verde', 4, 1234567, 2017),
(2, 'Toyota', 'Azul', 2, 10230456, 2017);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agilt`
--
ALTER TABLE `agilt`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agilt`
--
ALTER TABLE `agilt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
