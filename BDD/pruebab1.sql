-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 06:22:34
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebab1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `Codigo` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `NombTienda` varchar(30) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Clave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTienda`, `NombTienda`, `Usuario`, `Clave`) VALUES
(1, 'juan', 'Gato', '202cb962ac59075b964b07152d234b'),
(2, 'DC', 'Gato2', '81dc9bdb52d04dc20036dbd8313ed0'),
(3, 'DC1', 'Gato22', 'c20ad4d76fe97759aa27a0c99bff67'),
(4, 'cr7', 'cr7', 'c20ad4d76fe97759aa27a0c99bff67'),
(5, 'sdffd', 'asdf', 'c20ad4d76fe97759aa27a0c99bff67'),
(6, 'cr77', 'cr77', '202cb962ac59075b964b07152d234b'),
(7, 'mesi', 'mesi', 'c20ad4d76fe97759aa27a0c99bff67'),
(8, 'a', 'a', 'c20ad4d76fe97759aa27a0c99bff67'),
(9, 'a', 'a', 'c20ad4d76fe97759aa27a0c99bff67'),
(10, 'b', 'b', '202cb962ac59075b964b07152d234b'),
(11, 's', 's', '81dc9bdb52d04dc20036dbd8313ed0'),
(12, 't', 't', 'c20ad4d76fe97759aa27a0c99bff67'),
(13, 'x', 'x', '202cb962ac59075b964b07152d234b'),
(14, 'z', 'z', '202cb962ac59075b964b07152d234b'),
(15, 'c', 'c', '202cb962ac59075b964b07152d234b'),
(16, 'r', 'r', '4b43b0aee35624cd95b910189b3dc2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
