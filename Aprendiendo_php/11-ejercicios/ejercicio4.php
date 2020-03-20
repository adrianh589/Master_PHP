<?php



    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {

        $numero1 = (int) $_GET['numero1'];
        $numero2 = (int) $_GET['numero2'];
        //suma
        echo "La suma es ".($numero1 + $numero2)."<br>";
        //resta
        echo "La resta es ".($numero1 - $numero2)."<br>";
        //multiplicacion
        echo "La multiplicacion es ".($numero1 * $numero2)."<br>";
        //division
        echo "La division es ".($numero1 / $numero2);
    }else{
        echo '<h1>Porfavor introduce ambos numeros en la URL</h1>';
    }

?>