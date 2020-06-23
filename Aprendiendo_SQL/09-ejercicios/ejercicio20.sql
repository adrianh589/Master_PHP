/**
  20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo
 */

 SELECT * FROM vendedores;
SELECT * FROM grupos;

# Mi query #

SELECT nombre, ciudad FROM grupos WHERE id
= (SELECT grupo_id FROM vendedores GROUP BY grupo_id, sueldo ORDER BY sueldo DESC LIMIT 1);

# El del curso #

SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM  vendedores WHERE sueldo =
(SELECT MAX(sueldo) FROM vendedores));