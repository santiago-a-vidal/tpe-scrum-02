-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 05:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tandil_basura`
--

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
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
-- Dumping data for table `reporte`
--

INSERT INTO `reporte` (`id_reporte`, `id_usuario`, `latitud`, `longitud`, `foto`, `descripcion`) VALUES
(1, 3, -37.315, -59.1457, 'images/5ce6b449cd5fb.jpg', ''),
(2, 5, -37.3219, -59.1214, 'images/5ce6b45f1d3c5.jpg', 'Mucha cantidad'),
(3, 4, -37.3304, -59.1255, 'images/5ce6b47376b00.jpg', 'Una sola bolsa'),
(4, 6, -37.3302, -59.1437, 'images/5ce6b480d013f.jpg', ''),
(5, 8, -37.3171, -59.1221, 'images/5ce6b4978bbb6.jpg', ''),
(6, 3, -37.309, -59.128, 'images/5ce6b4afe8cc6.jpg', ''),
(7, 5, -37.32, -59.1325, 'images/5ce6b4bd4df52.jpg', ''),
(8, 6, -37.335, -59.1402, 'images/5ce6b4ce4b638.jpg', ''),
(9, 4, -37.3276, -59.1356, 'images/5ce6b4e681f0c.jpg', 'Un monton'),
(10, 6, -37.315, -59.1472, 'images/5ce6b4f9eebae.jpg', ''),
(11, 4, -37.3212, -59.1143, 'images/5ce6b509cc4d7.jpg', ''),
(12, 6, -37.3368, -59.1253, 'images/5ce6b51877899.jpg', ''),
(13, 5, -37.3322, -59.1367, 'images/5ce6b5305ea68.jpg', 'Poca basura'),
(14, 3, -37.3226, -59.1249, 'images/5ce6b54cc1a17.jpg', 'Como cuarenta bolsas enormes'),
(15, 8, -37.3297, -59.1284, 'images/5ce6b56873196.jpg', 'Pocas bolsas'),
(16, 4, -37.3155, -59.1305, 'images/5ce6b59d46030.jpg', ''),
(17, 7, -37.3202, -59.1429, 'images/5ce6b5bbd22c9.jpg', 'Un monton, limpien ya');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(90) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`, `admin`) VALUES
(3, 'nicky_jam@gmail.com', '$2y$10$/4YQXzUkhM8J4Scxi44EIeeFmFCKeKuh4.rxP1NJta1X6Snt.HdRS', 1),
(4, 'juancodigo@hotmail.com', '$2y$10$HR6IWfyIWykKJ8NpPY.PBOGWNG2aKn2PCZFdo5tYLz7uBZ0RME9j2', 0),
(5, 'tatoguchi@gmail.com', '$2y$10$lOcgrStN5a0mTEI1JgNV6euc7waI74591qLTfoSRAd88psYu.UjXC', 0),
(6, 'eze.wesex@exa.unicen.edu.ar', '$2y$10$KgNKtBi2dqnS/Max1opp1u/OUBa0c8AEcvkzXecQmZIJdPKuX8HVe', 0),
(7, 'yenimotoquera@gmail.com', '$2y$10$QDqgQQcqHd6dyI0ktG9WYeJZJwEidYaXE88ZINA6sbLGoE0FJMvfO', 0),
(8, 'heroadolfo@hotmail.com', '$2y$10$Dibz3519aqTQdJF.guclD.ovex.LILH/yDc9.KNzFnZ6RW/OSm6Ei', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`,`id_usuario`),
  ADD UNIQUE KEY `id_reporte` (`id_reporte`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
