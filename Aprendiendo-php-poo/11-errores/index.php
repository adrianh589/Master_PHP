<?php
/*
 * Una excepcion son fallos en nuestro codigo para avisarnos de que se ha
 * producido un problema
 * */

//Capturar excepciones en codigo susceptible a errores
try {
    throw new Exception("Se ha producido un error");
}catch (Exception $e){
    echo $e->getMessage();
} finally {//Sirve para ejecutarse despues de que se ha ejecutado el try y el catch
    echo "Todo correcto";
}