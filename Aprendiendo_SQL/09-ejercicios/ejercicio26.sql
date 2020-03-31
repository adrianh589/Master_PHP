/**
  26. Sacar vendedores que tienen jefe y sacar el nombre del jefe
 */

 SELECT * FROM vendedores;

# Mi query por subconsulta #

SELECT v.nombre AS 'VENDEDOR', j.nombre AS 'JEFE'
FROM vendedores AS v
INNER JOIN vendedores AS j
ON v.jefe = j.id
WHERE v.jefe IN ( SELECT jefe FROM vendedores WHERE jefe IS NOT NULL );

# Mi query solo con JOINS #

SELECT v.nombre AS 'VENDEDOR', j.nombre AS 'JEFE'
FROM vendedores AS v
INNER JOIN vendedores AS j
ON v.jefe = j.id;