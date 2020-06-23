/**
  29. Crear una vista llamada vendedoresA que incluira todos los vendedores del grupo
  que se llame vendedores A
 */

 SELECT * FROM grupos;
SELECT * FROM vendedores;

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores AS v
WHERE v.grupo_id IN (SELECT g.id FROM  grupos AS g WHERE g.nombre = 'vendedores A');


SELECT * FROM vendedoresA;
DROP VIEW vendedoresA;