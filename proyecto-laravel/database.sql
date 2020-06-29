CREATE DATABASE IF NOT EXISTS laravel_master;
USE laravel_master;

CREATE TABLE IF NOT EXISTS users
(
    id             INT(255) AUTO_INCREMENT NOT NULL,
    role           VARCHAR(20),
    name           VARCHAR(100),
    surname        VARCHAR(200),
    nick           VARCHAR(100),
    email          VARCHAR(255),
    password       VARCHAR(255),
    image          VARCHAR(255),
    created_at     DATETIME,
    updated_at     DATETIME,
    remember_token VARCHAR(255),
    CONSTRAINT pk_users PRIMARY KEY (id)
) ENGINE = InnoDB;

INSERT INTO users VALUES(NULL, 'user', 'Adrian', 'Hoyos', 'Saurex',
                         'adrianh_589@hotmail.com', '1234', NULL, CURTIME(), CURTIME(), NULL);

INSERT INTO users VALUES(NULL, 'user', 'Juan', 'Lopez', 'Lopexa',
                         'juan@hotmail.com', '1234', NULL, CURTIME(), CURTIME(), NULL);

INSERT INTO users VALUES(NULL, 'user', 'Manolo', 'Cardona', 'ManCar',
                         'ManoCar6589@hotmail.com', '1234', NULL, CURTIME(), CURTIME(), NULL);

CREATE TABLE IF NOT EXISTS images
(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    user_id     INT(255),
    image_path  VARCHAR(255),
    description TEXT,
    created_at  DATETIME,
    updated_at  DATETIME,
    CONSTRAINT pk_images        PRIMARY KEY (id),
    CONSTRAINT fk_images_users  FOREIGN KEY (user_id) REFERENCES USERS (id)

) ENGINE = InnoDB;

INSERT INTO images VALUES (NULL, 1, 'test.jpg', 'descripcion de prueb', CURTIME(), CURTIME());
INSERT INTO images VALUES (NULL, 1, 'playa.jpg', 'descripcion de testing', CURTIME(), CURTIME());
INSERT INTO images VALUES (NULL, 1, 'arena.jpg', 'descripcion de tu madre', CURTIME(), CURTIME());
INSERT INTO images VALUES (NULL, 3, 'familia.jpg', 'descripcion de tu madre 2', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments
(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    user_id     INT(255),
    image_id    INT(255),
    content     TEXT,
    created_at  DATETIME,
    updated_at  DATETIME,
    CONSTRAINT pk_comments  PRIMARY KEY (id),
    CONSTRAINT fk_comments_users  FOREIGN KEY (user_id) REFERENCES USERS(id),
    CONSTRAINT fk_comments_images     FOREIGN KEY (image_id) REFERENCES IMAGES(id)
) ENGINE = InnoDB;

INSERT INTO comments VALUES (NULL, 1, 4, 'Buena foto de familia', CURTIME(), CURTIME());
INSERT INTO comments VALUES (NULL, 2, 1, 'Buena foto de playa', CURTIME(), CURTIME());
INSERT INTO comments VALUES (NULL, 2, 4, 'Buena foto de volcan', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes
(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    user_id     INT(255),
    image_id    INT(255),
    created_at  DATETIME,
    updated_at  DATETIME,
    CONSTRAINT pk_likes  PRIMARY KEY (id),
    CONSTRAINT fk_likes_users  FOREIGN KEY (user_id) REFERENCES USERS(id),
    CONSTRAINT fk_likes_images FOREIGN KEY (image_id) REFERENCES IMAGES(id)
) ENGINE = InnoDB;

INSERT INTO likes VALUES (NULL, 1, 4, CURTIME(), CURTIME());
INSERT INTO likes VALUES (NULL, 2, 4, CURTIME(), CURTIME());
INSERT INTO likes VALUES (NULL, 3, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES (NULL, 3, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES (NULL, 2, 1, CURTIME(), CURTIME());


