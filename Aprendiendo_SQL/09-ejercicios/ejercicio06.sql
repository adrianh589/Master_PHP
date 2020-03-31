/**
  Visualizar el nombre y los apellidos de los vendedores en una misma columna y su fecha de registro y que dia de la semana era
  cuando se registraron.
 */

 SELECT CONCAT(nombre,' ',apellidos) AS 'nombres_vendedor', fecha_alta AS 'fecha de registro', DAYNAME(fecha_alta) AS 'dia de la semana'
        FROM  vendedores CONCAT;