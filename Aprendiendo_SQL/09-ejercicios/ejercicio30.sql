/**
  30. Mostrar los datos del vendedor con mas antiguedad en el concesionario.
 */

 SELECT * FROM vendedores;

# Mi query #

 SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

/**
  30+. Obtener los coches con mas unidades vendidas.
 */

 SELECT * FROM coches;
SELECT * FROM vendedores;
SELECT * FROM encargos;

# Mi query con solo JOINS #

SELECT co.id, CONCAT(co.marca,' ', co.modelo) AS 'COCHE', SUM(e.cantidad) AS'CANTIDAD VENDIDA'
FROM encargos AS e
INNER JOIN coches AS co
    ON e.coche_id = co.id
GROUP BY e.coche_id
ORDER BY 3 DESC;

# Query del curso (Aunque solo saca el de mayor cantidad de un encargo) #

SELECT * FROM coches
WHERE id IN ( SELECT coche_id FROM encargos
    WHERE cantidad IN (SELECT MAX(cantidad) FROM encargos) );