/**
  11. Visualizar todos los cargos y el No. de vendedores que hay en cada cargo
 */

 SELECT * FROM vendedores;

 SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo;