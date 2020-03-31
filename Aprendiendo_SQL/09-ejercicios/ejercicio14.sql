/**
  14. Visualizar las unidades totales vendidas de cada coche a cada cliente mostrando el nombre
  del producto el numero de cliente y la suma de unidades.
 */

 /* El GROUP BY con  2 campos, es muy similar que una clave compuesta,
    ambos campos deben ser iguales para que agrupe por esos 2 campos*/

 SELECT * FROM coches;
SELECT * FROM encargos;

    SELECT c.id AS 'id cliente', CONCAT(co.marca,' ',co.modelo) AS 'Coche', SUM(cantidad) AS 'Suma total'
    FROM encargos AS e
    INNER JOIN clientes AS c on e.cliente_id = c.id
    INNER JOIN coches AS co on e.coche_id = co.id
    GROUP BY e.coche_id, e.cliente_id;