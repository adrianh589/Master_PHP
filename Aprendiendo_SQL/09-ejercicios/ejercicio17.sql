/**
  17. Obtener un listado con los encargos realizados por el cliente 'Fruterias Antonia Inc'
 */

 SELECT * FROM encargos;
 SELECT * FROM clientes;

/**
  Por subconsulta

  NOTA: Al ser ilegible porque necesito saber el nombre del cliente, se procedera a hacerlo con
  JOINS
 */

SELECT c.nombre, e.id AS 'No de encargo', e.cantidad, co.marca, e.fecha
FROM encargos AS e
INNER JOIN clientes AS c
    ON e.cliente_id = c.id
INNER JOIN coches AS co
    ON e.coche_id = co.id
WHERE cliente_id
= (SELECT id FROM clientes WHERE nombre = 'Tienda PC Inc');

