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

-- End of file.
