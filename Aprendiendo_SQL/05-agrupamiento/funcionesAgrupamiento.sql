/*Funciones de agrupamiento*/

/*
AVG     sacar la media
COUNT   contarel numero de elementos
MAX     Devuelve el valor maximo del grupo
MIN     DEvuelve el valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

SELECT * FROM entradas;

SELECT AVG(id) AS media_de_entradas FROM entradas;
SELECT COUNT(*) AS numero_de_registros FROM entradas;
SELECT MAX(id) AS id_maximo FROM entradas;
SELECT MIN(id) AS id_minimo FROM entradas;
SELECT SUM(id) AS suma_De_Los_ID FROM entradas;
