<?php

/**
 * Cookies: similares a las sesiones, pero estas han creado controversia porque los sitios grandesde internet
 * se mete con la privacidad de los usuarios, es por ello que las páginas creo los avisos de las cookies, para
 * informar a los ususarios que se estan almacenando sus datos y darle al usuario si acepta o no dicho aviso.

 *

 * Es inseguro porque se almacenan en el cliente.

  Ventajas:

 * Estan ahi incluso si el navegador esta cerrado o abierto.

 * Utiles para recordar los inicios de sesion

 * Guardar valores temporales

 * Desventajas:

 * Se almacenan en el disco duro del usuario, por lo que este puede manipularlas a su gusto.

 * A diferencia de las sesiones, estan almacenan una cantidad limitada de datos, es decir que no
 * pueden manejar gran cantidad de información.
 */

//Crear una cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//Cookie basica
setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion (se borra del equipo y la referencia en el servidor)
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>


