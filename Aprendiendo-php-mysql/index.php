<?php
// Conectarme a la base de datos
$conexion = mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'phpmysql');

//Comprobar si la conexion es correcta
if (mysqli_connect_errno())//Esta funcion devuelve el error que ha generado al conexion con la base de datos
{
    echo 'La conexion a la base de datos a Mysql ha fallado: '.mysqli_errorno();
}else{
    echo 'Conexion realizada correctamente';
}

//Consulta para configurar la codificiación de caracteres.
mysqli_query($conexion, "SET 'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");//Esta funcion me devuelve un objeto


//Ya que el mysqli_fetch_Assoc me trae un unico array asociativo, es decir, una fila,
// hare un while para traerme todos los valores

while ($nota = mysqli_fetch_assoc($query)){ //El true sobra pero es para saber que devuelve un booleano, true si hay mas filas false si no
    //var_dump($nota);
    echo "<h1>" .$nota['titulo'] . "</h1>";
    echo "<h3>" .$nota['descripcion'] . "</h3>";
}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas (id, titulo, descripcion, color) VALUES 
        (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'Verde');";


$insert = mysqli_query($conexion, $sql);

if($insert){
    echo 'Datos insertados corectamente';
}else{
    echo 'Error: '.mysqli_error($conexion);
}
