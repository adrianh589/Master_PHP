/**
  9. Mostrar todos los vendedores del grupo No. 2, ordenados por salario de mayor a menor
 */

 SELECT * FROM vendedores;

 SELECT * FROM vendedores
 WHERE grupo_id = 2
 ORDER BY sueldo DESC;