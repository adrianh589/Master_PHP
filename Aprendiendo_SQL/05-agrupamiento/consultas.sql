/* CONSULTAS DE AGRUPAMIENTO */

/*Este query me indica cuanas entradas tiene cada categoria, cabe destacar que el where actua SOLO sobre una columna
  no sobre un grupo de datos, entonces si quiero poner una condicion tengo que usar HAVING*/

SELECT count(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

/* Consulta de agrupamiento con condicion */
/* Este query solo me meustra los agrupamientos que son mayores o iguales a 4 , HAVING es lo mismo que where, pero como se menciono antes, HAVING actua en agrupamiento*/
SELECT count(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING count(titulo) >= 3;

