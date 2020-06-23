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

drop table if exists usuarios;

create table usuarios(
    id int(11) not null auto_increment,
    nombres varchar(100) not null ,
    apellidos varchar(255) default'Hoyitos',
    email varchar(100) not null ,
    password varchar(255),
    constraint pk_usuarios primary key (id)
);

describe usuarios;