/**
  23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente.
 */

 SELECT e.id, co.marca, c.nombre FROM encargos AS e
 INNER JOIN clientes AS c
     ON e.cliente_id = c.id
 INNER JOIN coches AS co
    ON e.coche_id = co.id;