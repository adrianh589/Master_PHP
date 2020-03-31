/**
  15. Mostrar los 2 clientes que mas pedidos han hecho y mostrar cuantos
  pedidos hicieron.
 */

 # El 2 en el ORDER BY significa la columna por la que uiero agrupar #

    SELECT c.nombre, COUNT(en.id) FROM encargos AS en
    INNER JOIN clientes AS c
    ON en.cliente_id = c.id
    GROUP BY en.cliente_id
    ORDER BY 2 DESC
    LIMIT 2;

SELECT * FROM encargos;