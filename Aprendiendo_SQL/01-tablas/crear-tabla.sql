/*
int(numero de cifras) entero
integer lo mismo que arriba
varchar (numero de caracteres) string maximo 255 caracteres
char (numero de caracteres) string/alfanumerico
float(numero de cifras, numero de decimales)
date(), time, timestamp
mediumtext 16 millones caracteres
longtext 16 bmillones de caracteres
text 65000 caracteres
*/

/*
Crear tabla
 */

create table usuarios(
    id int(11),
    nombres varchar(100),
    apellidos varchar(255),
    email varchar(100),
    password varchar(255)
);
