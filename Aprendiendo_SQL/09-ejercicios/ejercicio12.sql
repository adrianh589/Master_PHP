/**
  12. Conseguir la masa salarial del concesionario anual.
 */

 SELECT * FROM vendedores;

 SELECT SUM(sueldo) AS 'Masa salarial' FROM vendedores;