/**
  18. Listar los clientes que han hecho algun encargo del coche 'Mercedez'
 */

 SELECT * FROM clientes;
 SELECT * FROM coches;
 SELECT * FROM encargos;

# Mi query #

 SELECT c.nombre AS 'cliente', e.id AS 'No. encargo', CONCAT(marca,' ', modelo) AS coche FROM encargos AS e
 INNER JOIN clientes AS c
     ON e.cliente_id = c.id
 INNER JOIN coches AS co
     ON e.coche_id = co.id
 WHERE coche_id IN
 (SELECT id FROM coches WHERE marca = 'Mercedez')
 AND cliente_id IN (SELECT id FROM clientes);


# El del curso #

SELECT * FROM clientes AS c
WHERE c.id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN (SELECT id FROM coches WHERE marca = 'Mercedez'));