/**
  25. Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado.
 */

 SELECT * FROM encargos;

# Mi query con JOIN y subconsulta #

 SELECT c.nombre, SUM(e.cantidad * co.precio) AS 'IMPORTE'
 FROM clientes AS c
 INNER JOIN encargos AS e
 ON  c.id = e.cliente_id
 INNER JOIN coches co ON e.coche_id = co.id
 GROUP BY c.id
 HAVING c.id IN ( SELECT cliente_id FROM encargos )
 ORDER BY 2 ASC;

# Mi query pero solo con Joins #

SELECT c.nombre, SUM(e.cantidad * co.precio) AS 'IMPORTE'
FROM clientes AS c
INNER JOIN encargos AS e ON  c.id = e.cliente_id
INNER JOIN coches AS co ON e.coche_id = co.id
GROUP BY cliente_id
ORDER BY 2 ASC;
