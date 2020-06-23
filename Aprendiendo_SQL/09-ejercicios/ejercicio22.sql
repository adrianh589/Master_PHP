/**
  22. Mostrar listado de clientes mostrando el id de cliente y el nombre
  y luego mostrar el numero de vendedor y su nombre.
 */

 SELECT * FROM clientes;
SELECT * FROM vendedores;

 SELECT c.id, c.nombre, v.id AS 'No. Vendedor',v.nombre AS 'vendedor'
    FROM clientes AS c
  INNER JOIN vendedores AS v
      ON c.vendedor_id = v.id;