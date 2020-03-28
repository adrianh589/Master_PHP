/*Funciones matemáticas*/
SELECT ABS(-7) AS 'operacion' FROM usuarios;
SELECT CEIL(7.45) AS 'operacion' FROM usuarios;/*Alta, redondea hacia arriba*/
SELECT FLOOR(7.45) AS 'operacion' FROM usuarios;/*Baja, redonde hacia abajo*/
SELECT PI() AS 'operacion' FROM usuarios;
SELECT RAND() AS 'operacion' FROM usuarios;
SELECT ROUND(7.91) AS 'operacion' FROM usuarios;
SELECT TRUNCATE(7.91, 1) AS 'operacion' FROM usuarios;/*quita decimales, para ver los decimales que quiero tener*/

/*Funciones con cadenas de texto*/
SELECT * FROM usuarios;

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ' ,apellidos) AS 'nombre_completos' FROM usuarios;
SELECT UPPER( CONCAT(nombre, ' ' ,apellidos) ) AS 'nombre_completos' FROM usuarios;
SELECT UPPER(nombre), CURDATE() AS fecha_actual FROM usuarios;/*Fecha actual*/

/* FUNCIONES PARA FECHAS */

SELECT DATEDIFF(curdate(), fecha) FROM usuarios;/*diferencia de dias de diferencia*/
SELECT DAYNAME(fecha)  AS nombre_dia FROM usuarios;/*Nombre del dia en el que se registro*/
SELECT DAYOFMONTH(fecha), fecha  AS nombre_dia FROM usuarios;/*Nombre del mes en el que se registro*/
SELECT DAYNAME(fecha)  AS nombre_dia FROM usuarios;/*Nombre del dia en el que se registro*/
SELECT DAYOFWEEK(fecha), fecha  AS nombre_dia FROM usuarios;/*Semana en el que se hizo el registro*/
SELECT DAYOFYEAR(fecha), fecha FROM usuarios;/*Dia de los 365 que tiene un año en el que se hizo el registro*/
SELECT MONTH(fecha), fecha FROM usuarios;/*Mes de la fecha que se recogio*/
SELECT YEAR(fecha), fecha FROM usuarios;/*Año de la fecha que se recogio*/
SELECT HOUR(fecha), fecha FROM usuarios;/*sacar la hora*/
SELECT CURRENT_TIME(), fecha FROM usuarios;/*hORA ACTUAL*/
SELECT CURRENT_DATE(), fecha FROM usuarios;/*fecha actual (SIN horas)*/
SELECT current_timestamp(), fecha FROM usuarios;/*fecha actual (incluyendo horas)*/
SELECT SYSDATE(), fecha FROM usuarios;/*fecha del sistema operativo*/
SELECT DATE_FORMAT(fecha, '%d-%m-%Y'), fecha FROM usuarios;/*fecha como yo la quiero mostrar*/

/* PROFUNDIZANDO...

   Funciones que devuelven falso o verdadero
   */

SELECT * FROM usuarios;

SELECT nombre, ISNULL(apellidos) FROM usuarios;/*0 para false 1 para true*/
SELECT nombre, STRCMP('hola', 'hol1a') FROM usuarios;/* Verifica si 2 strings son diferentes, retorna -1 si el segundo parametro no coincide con el primer parametro */

SELECT version();/*Version de SQL que tengo actualmente*/
SELECT USER();/*Usuario con el que estoy conectado y el servidor*/
SELECT DISTINCT USER() FROM usuarios;/*evita traer registros repetidos*/
SELECT DATABASE();/*Base de datos que estoy usando en este momento*/
SELECT IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios;/*Si alguno esta vacio, lo reemplaza por el segundo parametro*/