-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-05-21 12:46:30.663
--
-- Database: `db_tandil_basura`
--

CREATE DATABASE db_tandil_basura;

USE db_tandil_basura;

-- --------------------------------------------------------

-- tables
-- Table: reporte
CREATE TABLE reporte (
    id_reporte serial  NOT NULL,
    usuario_id_usuario int  NOT NULL,
    latitud real  NOT NULL,
    longitud real  NOT NULL,
    foto varchar(60)  NOT NULL,
    descripcion varchar(120)  NOT NULL,
    CONSTRAINT pk_reporte PRIMARY KEY (id_reporte,usuario_id_usuario)
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
    FOREIGN KEY (usuario_id_usuario)
    REFERENCES usuario (id_usuario)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

