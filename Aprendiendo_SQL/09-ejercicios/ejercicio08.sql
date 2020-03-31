/**
  8. Visualizar todos los coches en cuya marca exista la letra a
  y cuyo modelo empiece por f
 */

 SELECT * FROM coches;

/* Mi version */
 SELECT * FROM coches WHERE marca LIKE '%a%' AND SUBSTR(modelo, 1,1) = 'h';

/* La del curso */
SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'h%';