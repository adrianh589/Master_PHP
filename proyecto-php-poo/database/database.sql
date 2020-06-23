
DROP DATABASE IF EXISTS tienda_master;
CREATE DATABASE tienda_master;

USE tienda_master;

CREATE TABLE USUARIOS (
  id int (255) AUTO_INCREMENT,
  nombre varchar(100) NOT NULL ,
  apellidos varchar(100),
  email varchar(255) ,
  password varchar(255) NOT NULL ,
  rol varchar(20) ,
  imagen varchar(255),
  CONSTRAINT pk_usuarios PRIMARY KEY (id),
  CONSTRAINT uq_email UNIQUE (email)
)ENGINE = InnoDB;

INSERT INTO USUARIOS VALUES (NULL, 'admin', 'admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE CATEGORIAS(
    id int(255) AUTO_INCREMENT,
    nombre varchar(255),
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE = InnoDB;

INSERT INTO CATEGORIAS VALUES (NULL, 'manga corta'), (NULL, 'tirantes'), (NULL, 'manga larga'),
                              (NULL, 'sudaderas');

CREATE TABLE PRODUCTOS(
    id int(255),
    categoria_id int(255),
    nombre varchar(255),
    descripcion text,
    precio float(100, 2) NOT NULL ,
    stock int(255) NOT NULL,
    oferta varchar(2),
    fecha date NOT NULL ,
    imagen varchar(255),
    CONSTRAINT pk_productos PRIMARY KEY (id),
    CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES CATEGORIAS (id)
)ENGINE = InnoDB;

CREATE TABLE PEDIDOS(
    id int(255) AUTO_INCREMENT NOT NULL ,
    usuario_id int (255) NOT NULL ,
    provincia varchar(100) NOT NULL ,
    localidad varchar(100) NOT NULL ,
    direccion varchar(255) NOT NULL ,
    coste float(200, 2) NOT NULL ,
    estado varchar(20) NOT NULL ,
    fecha date,
    hora time,
    CONSTRAINT pk_pedidos PRIMARY KEY (id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY (usuario_id) REFERENCES PEDIDOS(id)
)ENGINE = InnoDb;

CREATE TABLE LINEAS_PEDIDOS(
    id int(255) NOT NULL ,
    pedido_id int(255) NOT NULL ,
    producto_id int (255) NOT NULL ,
    unidades int(255),
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY (id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY (pedido_id) REFERENCES PEDIDOS(id),
    CONSTRAINT fr_linea_producto FOREIGN KEY (producto_id) REFERENCES PRODUCTOS(id)
) ENGINE = InnoDB;