/*Consulta con una condicion*/
SELECT * FROM usuarios;
SELECT * FROM usuarios WHERE email = 'adrianh_@hotmail.com';

SELECT * FROM usuarios WHERE YEAR(fecha) = 2020;/*Recordar que almaceno fechas ocmpletas, por ello la funcion YEAR() para que solo tome el año de la fecha*/

/* Trae los usuarios que tienen fecha diferente a 2020 o la fecha es nulla */
SELECT * FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);

/*Apellido que se incluya la letra A y la contraseña sea 1234*/

/*COMODINES
  Cualquier cantidad de caracteres: %
  Un caracter desconocido: _
  */
SELECT * FROM usuarios WHERE apellidos LIKE '%A%' AND password = 1234;

/*Ejemplos*/

/*Sacar todos los registros de la talba usuarios cuyo año sea PAR*/
SELECT * FROM usuarios WHERE (YEAR(fecha) %2 = 0);

/*Sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado
  Antes de 2020 y mostrar el nombre en mayus*/
  SELECT id, UPPER(nombre), apellidos, email, password, fecha FROM usuarios WHERE (LENGTH(apellidos) > 5) AND (YEAR(fecha) < 2020);


/*ORDER BY y LIMIT*/
SELECT * FROM usuarios ORDER BY nombre;

/*Limite ente lso registros que yo deseo*/
SELECT * FROM usuarios LIMIT 1,3;
