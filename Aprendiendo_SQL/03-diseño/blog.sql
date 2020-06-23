
/** Primero se crean las tablas que no tengan llaves foraneas */

--Es util usar Engine para elegir el motor de bases de datos y de esta manera
--hacer que las claves ajenas o llaves foraneas funcionen bien y hacer que la integridad
--referencial se respete.

--Existen 2 tipos de ENGINE en sql , esta el InnoDb que me permite soporte de transacciones, tener claves ajenas
--y foraneas que se respeten estrictamentei y aparte si nuestra app hace muchas consultas de tipo INSERT o UPDATE esta
--diseñado para optimizarse en estas cosas.

/**
    El otro engine se llama MyISAMP (xD) que me permite tener una velociad mayor en general a la hora de recuperar datos
    osea SELECT , osea que esta enfocado para apps que hagan muchos SELECT, sin embargo, este ENGINE NO mantiene una integridad
    de datos referencial, es inutil hacer claves priamrias y foraneas.
 */

CREATE TABLE usuarios(
    id          int(255) auto_increment NOT NULL ,
    nombre      varchar (45) NOT NULL,
    apellidos   varchar (45) NOT NULL,
    email       varchar (45) NOT NULL,
    password    varchar (45) NOT NULL,
    fecha       date NOT NULL,
    CONSTRAINT pk_usuarios primary key (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE = InnoDb;

CREATE TABLE categorias(
    id      int(255) auto_increment NOT NULL,
    nombre  varchar(45) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE = InnoDb;

CREATE TABLE entradas(
    id              int(45) auto_increment NOT NULL,
    usuario_id      int(255) NOT NULL,
    titulo          varchar(45) NOT NULL,
    descripcion     MEDIUMTEXT,
    fecha           date NOT NULL,
    categoria_id    int(255) NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_categoria Foreign key (categoria_id) REFERENCES categorias(id),
    CONSTRAINT fk_entrada_usuario Foreign key (usuario_id) REFERENCES usuarios(id)
)ENGINE = InnoDb;