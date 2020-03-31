/**
  27. Visualizar lso nombres de los clietnes y la cantidad de encargos realizados
  incluyendo los que no hayan realizado encargos
 */

 SELECT * FROM encargos;
SELECT * FROM clientes;

SELECT c.nombre, COUNT(e.id)
FROM clientes AS c
LEFT JOIN encargos AS e
    ON c.id = e.cliente_id
GROUP BY c.id;
