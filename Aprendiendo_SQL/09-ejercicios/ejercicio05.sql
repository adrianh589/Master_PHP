/**
  5. Listar todos los vendedores y mostrar unicamente el nombre y al lado los dias que lleva trabajando en el concesionario
 */

 SELECT * FROM vendedores;

 SELECT nombre, DATEDIFF(CURDATE(),fecha_alta) AS 'Dias trabajados hasta hoy' FROM vendedores;