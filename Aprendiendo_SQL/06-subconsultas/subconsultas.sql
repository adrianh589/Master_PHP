/*-Son consultas que se ejecutan dentro de otras.

  -Tambien consisten en utilizar los resultados de la subconsulta
  para operar en la consulta principal.

  -Jugando con las llaves foraneas.
  */

  SELECT * FROM usuarios;

INSERT INTO usuarios VALUES (NULL, 'Prueba', 'Prueba', 'prueba@prueba.com', 'prueba', '2020-12-02');

/*El operador IN debe usarse cuando la consulta devuelve varios resultados y no solamente 1, en este caso IN indica
  que me muestre tal registro cuando el id exista */

/* NOTA: si la subconuslta solo me saca un unico resultado, lo mejor es usar el operador = */

/*Esta consulta se traduciria como: traeme todos los campos del registro cuando el id exista en la tabla de entradas*/

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*Query para sacar los usuarios que no tienen entradas*/

SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

/* Sacar los usuarios que tengan alguna entrada que hablen de gta */

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

/*Sacar todas las entradas de la categoria accion utilizando su nombre*/

SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'accion');

/* Mostrar las categorias con mas de 3 entradas */

SELECT * FROM categorias WHERE id IN
                               (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(*) >= 3);

/*Mostrar los usuarios que crearon una entrada un martes de cualquier semana*/

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3 );

/* Mostrar el nombre del usuario que tenga mas entradas, puesto que solo me trae 1 dato se cambia el IN por el operador = */

SELECT nombre FROM usuarios WHERE id = ( SELECT COUNT(usuario_id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(*) DESC LIMIT 1 );

/* Mostrar las categorias sin entradas */

SELECT nombre FROM categorias WHERE id
                                        NOT IN ( SELECT categoria_id FROM entradas );

desc categorias;

SELECT * FROM entradas;
SELECT * FROM usuarios;
SELECT * FROM categorias;

