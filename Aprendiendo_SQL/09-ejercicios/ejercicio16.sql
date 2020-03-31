/**
  16. Obtener un listado de clientes aatendidos por el vendedor 'David Lopez'
 */

 SELECT * FROM  vendedores;
SELECT * FROM clientes;

/**
 Por joins
 */
SELECT c.nombre, v.nombre FROM clientes AS c
INNER JOIN vendedores AS v
ON c.vendedor_id = v.id
WHERE v.nombre = 'David' AND v.apellidos = 'Lopez';

/**
  Por subconsultas
 */

 SELECT c.nombre FROM clientes AS c WHERE c.vendedor_id
 IN (SELECT v.id FROM vendedores AS v WHERE v.nombre = 'David' AND v.apellidos = 'Lopez');
