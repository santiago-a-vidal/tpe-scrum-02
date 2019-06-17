-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 20:25:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tandil_basura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `foto` varchar(60) NOT NULL,
  `descripcion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id_reporte`, `id_usuario`, `latitud`, `longitud`, `foto`, `descripcion`) VALUES
(18, 9, -37.3184, -59.1499, 'images/5d07d24830cb1.jpg', 'Contenedor de basura lleno, sin recoger hace unos días ya. Seria fantástico que la recogiesen, gracias!'),
(21, 9, -37.3109, -59.1296, 'images/5d07d5384ba3f.jpg', 'Mucha basura amontonada, con bolsas rotas. Gracias por el laburo que hacen.'),
(22, 9, -37.3259, -59.1154, 'images/5d07d560600bc.jpg', 'Bolsas de basura sin recoger desde el lunes.'),
(23, 9, -37.3375, -59.1351, 'images/5d07d66b45f51.jpg', 'Bolsas de basura abiertas por la zona.'),
(24, 9, -37.3221, -59.1175, 'images/5d07d6b8f2357.jpg', 'Se ve que algunos perritos han roto un par de bolsas que no han llegado a recolectar los recolectores.'),
(25, 9, -37.3254, -59.1494, 'images/5d07d6fb80927.jpg', 'Los perros se estan haciendo un festin con estas bolsas de basura. Seria buenisimo que las recojan. Gracias.'),
(26, 9, -37.3204, -59.1332, 'images/5d07d7395e694.jpg', 'Muchas bolsas de basura amontonadas casi en medio de la calle.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `mail`, `nombre`, `apellido`, `password`, `admin`) VALUES
(9, 'marquitos.gonzalez@hotmail.com', 'Marcos', 'Gonzalez', '$2y$10$qXYOytsO1H6XJ3EWg852YO4Ekcbuapv/9zyNnPi1lQvJZ48Z0Q1rW', 0),
(10, 'alberto.lopez@hotmail.com', 'Alberto', 'Lopez', '$2y$10$ayMB8cB9ARyM57M.3P0X7.trKnIFy0tfZCl1WjT4ZDnK4ANIWtzb.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`,`id_usuario`),
  ADD UNIQUE KEY `id_reporte` (`id_reporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
