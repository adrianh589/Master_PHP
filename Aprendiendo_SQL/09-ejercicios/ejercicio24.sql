/**
  24. Listar los encargos con el nombre del coche el nombre del cliente
  y el nombre de la ciudad, pero unicamente cuando sean de Madrid
 */

 SELECT * FROM clientes;
 SELECT * FROM coches;
 SELECT * FROM encargos;

 SELECT co.marca, c.nombre, c.ciudad
 FROM encargos AS e
 INNER JOIN coches AS co
     ON e.coche_id = co.id
 INNER JOIN clientes AS c
     ON e.cliente_id = c.id
 WHERE c.ciudad = 'Valencia';
