/**
  21. Obtener lso nombres y ciudades de lso clientes con encargos >= 3 unidades.
 */

SELECT * FROM clientes;
SELECT * FROM encargos;

SELECT nombre, ciudad FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE cantidad >= 3);
