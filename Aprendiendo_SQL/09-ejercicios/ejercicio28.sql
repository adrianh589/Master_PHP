/**
  28 Mostrar todos los vendedores tengan o no clientes, mostrar tambien el numero de clientes
 */

 SELECT * FROM clientes;
 SELECT * FROM vendedores;

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR', COUNT(c.id) AS 'NO DE CLIENTES DEL VENDEDOR'
FROM vendedores AS v
LEFT JOIN clientes AS c
    ON v.id = c.vendedor_id
GROUP BY v.id;
