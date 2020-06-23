/**
  13. Sacar la media de sueldos entre todos los vendedores por grupo.
 */

 SELECT g.nombre, ROUND(AVG(v.sueldo), 2) FROM vendedores AS v
 INNER JOIN grupos AS g
 ON v.grupo_id = g.id
 GROUP BY grupo_id;