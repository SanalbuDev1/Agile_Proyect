-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2017 a las 18:20:45
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agilt`
--

CREATE TABLE `agilt` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agilt`
--

INSERT INTO `agilt` (`name`, `password`, `lastname`, `email`, `city`, `address`, `id`) VALUES
('alvarez-ty@hotmail.com', 'llolo1212', 'Alvarez', 'alvarez-ty@hotmail.com', 'manizales', '', 1),
('alvarez-ty@hotmail.com', 'llolo1212', 'Alvarez', 'alvarez-ty@hotmail.com', 'manizales', '', 2),
('alvarez-ty@hotmail.com', 'llolo1212', 'Alvarez', 'alvarez-ty@hotmail.com', 'manizales', 'cra', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buy`
--

CREATE TABLE `buy` (
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agilt`
--
ALTER TABLE `agilt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agilt`
--
ALTER TABLE `agilt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
