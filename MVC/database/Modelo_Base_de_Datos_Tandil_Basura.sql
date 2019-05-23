-- --------------------------------------------------------
--
-- Database: `db_tandil_basura`
--
-- --------------------------------------------------------

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- tables
-- Table: reporte
CREATE TABLE reporte (
    id_reporte serial  NOT NULL,
    id_usuario int  NOT NULL,
    latitud real  NOT NULL,
    longitud real  NOT NULL,
    foto varchar(60)  NOT NULL,
    descripcion varchar(120)  NOT NULL,
    CONSTRAINT pk_reporte PRIMARY KEY (id_reporte,id_usuario)
);

-- Table: usuario
CREATE TABLE usuario (
    id_usuario serial  NOT NULL,
    nombre varchar(30)  NOT NULL,
    password varchar(90)  NOT NULL,
    admin boolean  NOT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);

-- foreign keys
-- Reference: fk_usuario_reporte (table: reporte)
ALTER TABLE reporte ADD CONSTRAINT fk_usuario_reporte
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    NOT DEFERRABLE
    INITIALLY IMMEDIATE
;

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

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`, `admin`) VALUES
(3, 'nicky_jam@gmail.com', '$2y$10$/4YQXzUkhM8J4Scxi44EIeeFmFCKeKuh4.rxP1NJta1X6Snt.HdRS', 1),
(4, 'juancodigo@hotmail.com', '$2y$10$HR6IWfyIWykKJ8NpPY.PBOGWNG2aKn2PCZFdo5tYLz7uBZ0RME9j2', 0),
(5, 'tatoguchi@gmail.com', '$2y$10$lOcgrStN5a0mTEI1JgNV6euc7waI74591qLTfoSRAd88psYu.UjXC', 0),
(6, 'eze.wesex@exa.unicen.edu.ar', '$2y$10$KgNKtBi2dqnS/Max1opp1u/OUBa0c8AEcvkzXecQmZIJdPKuX8HVe', 0),
(7, 'yenimotoquera@gmail.com', '$2y$10$QDqgQQcqHd6dyI0ktG9WYeJZJwEidYaXE88ZINA6sbLGoE0FJMvfO', 0),
(8, 'heroadolfo@hotmail.com', '$2y$10$Dibz3519aqTQdJF.guclD.ovex.LILH/yDc9.KNzFnZ6RW/OSm6Ei', 1);

-- End of file.
