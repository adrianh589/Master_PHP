/*

    CONSULTA MULTITABLA:

    Consultas que sirven para consultar varias tablas en una sola sentencia.

*/

/* MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA */

SELECT e.id, e.titulo, u.nombre, c.nombre
FROM usuarios AS u, categorias AS c, entradas AS e
WHERE e.usuario_id = u.id AND u.id = e.usuario_id AND c.id;

/* INNER JOIN */

SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas AS e
INNER JOIN usuarios AS u
    ON e.usuario_id = u.id
INNER JOIN categorias AS c
    ON e.categoria_id = c.id;

/* Mostrar el nombre de las categorias y al lado cuantas entradas tiene */

SELECT c.nombre, COUNT(e.id)
FROM categorias AS c, entradas AS e
WHERE c.id = e.categoria_id
GROUP BY e.categoria_id;

/* Mostrar el email de los usuarios yal lado cuantas entradas tienen */
SELECT u.email, COUNT(e.usuario_id) AS entradas
FROM usuarios AS u, entradas AS e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;