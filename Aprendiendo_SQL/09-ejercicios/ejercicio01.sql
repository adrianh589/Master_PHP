/**
  1. Diseñar y crear la base de datos de un consecionario

  (Primero se crean las tablas que no apunten a ninguna otra de manera progresiva como se muestra en la imagen)
 */

    CREATE DATABASE IF NOT EXISTS concesionario;
    USE concesionario;

    CREATE TABLE coches(
        id      int(45) AUTO_INCREMENT NOT NULL ,
        modelo  varchar(100) NOT NULL,
        marca   varchar(50),
        precio  int(20) NOT NULL,
        stock   int(255) NOT NULL,
        CONSTRAINT pk_coches PRIMARY KEY (id)
    )ENGINE = InnoDB;

    CREATE TABLE grupos(
        id      int(10) AUTO_INCREMENT NOT NULL,
        nombre  varchar(100) NOT NULL,
        ciudad  varchar(100),
        CONSTRAINT pk_grupos PRIMARY KEy(id)
    )ENGINE = InnoDB;

    CREATE TABLE vendedores(
        id          int(10) AUTO_INCREMENT NOT NULL,
        grupo_id    int(10),
        jefe        int(10),
        nombre      varchar(100) NOT NULL ,
        apellidos   varchar(100),
        cargo       varchar(100),
        fecha_alta  date,
        sueldo      float(20,2),
        comision    float(10,2),
        CONSTRAINT pk_vendedores PRIMARY KEY (id),
        CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos (id),
        CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores (id)
    )ENGINE = InnoDB;

    CREATE TABLE clientes(
        id int(10) AUTO_INCREMENT NOT NULL,
        vendedor_id int(10) NOT NULL,
        nombre      varchar(100) NOT NULL,
        ciudad      varchar(100),
        total_gastado     float(50,2),
        fecha       date,
        CONSTRAINT pk_clientes PRIMARY KEY (id),
        CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores (id)
    )ENGINE = InnoDB;

    CREATE TABLE encargos(
        id int(10) AUTO_INCREMENT NOT NULL,
        cliente_id int(10) NOT NULL,
        coche_id int(10) NOT NULL,
        cantidad int(100),
        fecha date,
        CONSTRAINT pk_encargos PRIMARY KEY (id),
        CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes (id),
        CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES coches (id)
    )ENGINE = InnoDB;

    # COCHES #

    INSERT INTO coches VALUES (NULL, 'CLA 2015', 'Mercedez', 12000, 12);
    INSERT INTO coches VALUES (NULL, 'GT', 'Ford', 52000, 15);
    INSERT INTO coches VALUES (NULL, 'Camaro', 'Chevrolet', 45000, 21);
    INSERT INTO coches VALUES (NULL, 'Huayra', 'Pagani', 120000, 16);
    INSERT INTO coches VALUES (NULL, 'Gallardo', 'Lamborghini', 450000, 8);
    INSERT INTO coches VALUES (NULL, 'i8', 'BMW', 390000, 14);

    # GRUPOS #

    INSERT INTO grupos VALUES (NULL, 'vendedores A', 'Madrid');
    INSERT INTO grupos VALUES (NULL, 'vendedores B', 'Madrid');
    INSERT INTO grupos VALUES (NULL, 'vendedores A', 'Bogotá');
    INSERT INTO grupos VALUES (NULL, 'vendedores B', 'Barranquilla');
    INSERT INTO grupos VALUES (NULL, 'vendedores C', 'Madrid');
    INSERT INTO grupos VALUES (NULL, 'vendedores D', 'Barcelona');
    INSERT INTO grupos VALUES (NULL, 'vendedores E', 'Illinois');
    INSERT INTO grupos VALUES (NULL, 'vendedores F', 'Medellin');
    INSERT INTO grupos VALUES (NULL, 'vendedores G', 'Bilbao');

    # VENDEDORES #
    INSERT INTO vendedores VALUES(NULL, 1, NULL, 'David', 'Lopez', 'Reponsable de tienda', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2);
    INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Nelson', 'Sánchez', 'Reponsable de tienda', CURDATE(), 38000, 5);
    INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante en tienda', CURDATE(), 12000, 6);
    INSERT INTO vendedores VALUES(NULL, 3, NULL, 'Víctor', 'Lopez', 'Mecanico jefe', CURDATE(), 50000, 2);
    INSERT INTO vendedores VALUES(NULL, 4, NULL, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8);
    INSERT INTO vendedores VALUES(NULL, 5, NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
    INSERT INTO vendedores VALUES(NULL, 6, NULL, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
    INSERT INTO vendedores VALUES(NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante en tienda', CURDATE(), 10000, 10);

    # CLIENTES #
    INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
    INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
    INSERT INTO clientes VALUES(NULL, 1, 'Imprenta martinez Inc', 'Barcelona', 32000, CURDATE());
    INSERT INTO clientes VALUES(NULL, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
    INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
    INSERT INTO clientes VALUES(NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

    # ENCARGOS #

    INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
    INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
    INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
    INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
    INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
    INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());

INSERT INTO encargos VALUES(NULL, 6, 1, 1, CURDATE());

SELECT * FROM encargos;

    # Modificacion de columna por fallos propios AH #

    ALTER TABLE coches MODIFY precio int(20) NOT NULL ;