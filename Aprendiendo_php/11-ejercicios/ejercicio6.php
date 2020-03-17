<?php

/**
 * mostrar las tablas del 1 al 10 dentro de una tabla de html
 */

//Forma horizontal

echo "
        <table border='1'>
            
            <tr>";//Inicio cabecera
                for ($cabecera = 1; $cabecera <= 10; $cabecera++){
                    echo "<th>Tabla del $cabecera</th>";
                }
            echo "</tr>";
            //Fin cabecera

            //Inicio de las operaciones
            for ($i = 1; $i <= 10; $i++){
                echo '<tr>';
                for ($j = 1; $j <= 10; $j++){
                    echo "<td>$i * $j = ".($i*$j)."</td>";
                }
                echo '</tr>';
            }
            //Fin operaciones

        echo "</table>
        
        ";

            echo '<hr>';

            //Forma vertical


            for ($i = 1; $i <= 10; $i++) {

                echo
                    "<table border='1'>
                    <tr>
                        <th>Tabla del $i</th>
                        <th>Resultado</th>
                    </tr>";

                for ($j = 1; $j <= 10; $j++) {

                    echo "
                        <tr>
                            <td>$i * $j =</td>
                            <td>".($i*$j)."</td>
                        </tr>";


                }

                echo "</table>";
            }
?>
