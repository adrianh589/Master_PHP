
CREATE DATABASE notas_master;
USE notas_master;

CREATE TABLE usuarios
(
    id        int(255) auto_increment NOT NULL,
    nombre    varchar(45)             NOT NULL,
    apellidos varchar(45)             NOT NULL,
    email     varchar(45)             NOT NULL,
    password  varchar(45)             NOT NULL,
    fecha     date                    NOT NULL,
    CONSTRAINT pk_usuarios primary key (id),
    CONSTRAINT uq_email UNIQUE (email)
) ENGINE = InnoDb;


CREATE TABLE notas
(
    id           int(45) auto_increment NOT NULL,
    usuario_id   int(255)               NOT NULL,
    titulo       varchar(45)            NOT NULL,
    descripcion  MEDIUMTEXT,
    fecha        date                   NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario Foreign key (usuario_id) REFERENCES usuarios (id)
) ENGINE = InnoDb;