CREATE DATABASE IF NOT EXISTS `symfony-master`;

USE `symfony-master`;

CREATE TABLE IF NOT EXISTS users(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    role        VARCHAR(50),
    name        VARCHAR(100),
    surname     VARCHAR(200),
    email       VARCHAR(255),
    password    VARCHAR(255),
    created_at  DATETIME,
    CONSTRAINT  pk_users PRIMARY KEY (id)
)ENGINE = InnoDB;

INSERT INTO users VALUES (NULL, 'ROLE_USER', 'Adrian', 'Hoyos', 'adrianh_589@hotmail.com', 'pass', CURTIME());
INSERT INTO users VALUES (NULL, 'ROLE_USER', 'Camila', 'Marquez', 'mariacamy@hotmail.com', 'pass', CURTIME());
INSERT INTO users VALUES (NULL, 'ROLE_USER', 'Yaneth', 'Ballestas', 'Aballestas@hotmail.com', 'pass', CURTIME());


CREATE TABLE IF NOT EXISTS tasks(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    user_id     INT(255) NOT NULL,
    title       VARCHAR(255),
    content     TEXT,
    priority    VARCHAR(20),
    hours       INT(100),
    created_at  DATETIME,
    CONSTRAINT  pk_tasks PRIMARY KEY (id),
    CONSTRAINT  fk_task_user FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE = InnoDB;

INSERT INTO tasks VALUES (NULL, 1, 'Tarea 1', 'Contenido tarea 1', 'high', 40, CURTIME());
INSERT INTO tasks VALUES (NULL, 2, 'Tarea 2', 'Contenido tarea 2', 'low', 40, CURTIME());
INSERT INTO tasks VALUES (NULL, 3, 'Tarea 3', 'Contenido tarea 3', 'medium', 40, CURTIME());
INSERT INTO tasks VALUES (NULL, 1, 'Tarea 4', 'Contenido tarea 4', 'high', 40, CURTIME());