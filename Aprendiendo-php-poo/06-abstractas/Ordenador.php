<?php

/**
 *
 * Clase abstracta: Una clase abstracta es una clase que no se puede instanciar, es decir, que no podemos crear
 * objetos con ella pero si que la podemos usar para heredar de ella y esa clase define la estructira
 * que puede tener una clase que la herede incluso tambien puede definir funcionalidad.
 *
 * Aparte que cada metodo que yo defina como abstracto dentro de la clase abstracta, va a tener que ser definido
 * tambien dentro de la clase hija para poder utilizarse.
 *
 * Las clases abstractas, funciona como una clase estricta, es decir, que todos los que hereden de la clase
 * padre SI o SI deberan tener los metodos o atributos que se les asigne en la clase abstracta.
 *
 * En pocas palabras, la clase abstracta solo se usa como referencia para heredar atributos o metodos obligatoriamente
 * ademas de que no se puede instanciar.
 */

abstract class Ordenador
{

    public $encendido;

    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }


}

class PcAsus extends Ordenador {
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender()//Este metodo Si o SI debe estar, si no, genera error por obligacion
    {
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();

var_dump($ordenador);

var_dump( get_object_vars($ordenador) );