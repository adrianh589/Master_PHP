 <?php
/*
 * INTERFAZ: Es un contrato en el cual definimos que métodos y en que orden van
 * a estar en una clase.
 * */

 interface Ordenador {



     public function encender();
     public function apagar();
     public function reiniciar();
     public function desfragmentar();
     public function detectarUSB();
 }

 class iMac implements Ordenador{
     public $modelo;

     public function getModelo()
     {
         return $this->modelo;
     }

     public function setModelo($modelo): void
     {
         $this->modelo = $modelo;
     }

     public function apagar()
     {
         // TODO: Implement apagar() method.
     }

     public function encender()
     {
         // TODO: Implement encender() method.
     }



     public function reiniciar()
     {
         // TODO: Implement reiniciar() method.
     }

     public function desfragmentar()
     {
         // TODO: Implement desfragmentar() method.
     }

     public function detectarUSB()
     {
         // TODO: Implement detectarUSB() method.
     }
 }

 $mcintosh = new iMac();
 $mcintosh->setModelo("1995");

 var_dump($mcintosh);