/**
  7. Mostrar el nombre de los vendedores con cargo de Ayudante de tienda
 */

 SELECT * FROM vendedores;

SELECT nombre, sueldo FROM vendedores WHERE cargo = 'Ayudante en tienda';