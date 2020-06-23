/* VISTAS:

   Las podemos definir como una consulta almacenada en la base de datos
   que se utiliza como una tabla virtual y no almacena datos si no que utiliza
   asociaciones y los datos de las tablas originales de forma que siempre se mantienen
   actualizadas

   */

   /* Las vistas es reconmendable usarlas cuando se ve que tenemos que usar una consulta repetidas veces,
      el hacer uan vista nos ahorra escribir toda la sentencia para poder usar su alias */

    /*Aparte de smplificar consultas muy complejas, las vistas al usar solo el alias debido a la tabla virtual
      que genera, solo con hacer la consulta SELECT * FROM entradas_con_nombres; da un rendimiento enorme
      puesto que no se esta haciendo de nuevo la consulta mil veces, ademas, quitamos arga al gestor de bases de datos
      por la tabla virtual que genera*/

    CREATE VIEW entradas_con_nombres AS
    SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
    FROM entradas AS e
         INNER JOIN usuarios AS u
                    ON e.usuario_id = u.id
         INNER JOIN categorias AS c
                    ON e.categoria_id = c.id;

    /* Dado que las vistas me crea una tabla virtual, debo usar el SELECT como si fuese una tabla normal pero en realidad
       NO es una tabla normal*/

       SELECT * FROM entradas_con_nombres;

    /* Asi eliminamos la vista */
    DROP VIEW entradas_con_nombres;