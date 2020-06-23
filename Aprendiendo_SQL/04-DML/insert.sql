SELECT * FROM usuarios;

DESC usuarios;

/*Insert basico*/

INSERT INTO usuarios VALUES (null, 'Adrian', 'Hoyos', 'adrianh_@hotmail.com', '6259', '2020-03-24');
INSERT INTO usuarios VALUES (null, 'Antonio', 'Gomez', 'ant@hotmail.com', '6259', '2020-03-24');
INSERT INTO usuarios VALUES (null, 'Juean', 'Paul', 'juean@hotmail.com', '6259', '2020-03-24');
INSERT INTO usuarios VALUES (null, 'Camila', 'Hoyos', 'camila@hotmail.com', '6259', '2020-03-24');

/*Insert avanzado*/
INSERT INTO usuarios(email, password) VALUES ('adrian@hot', '12345');