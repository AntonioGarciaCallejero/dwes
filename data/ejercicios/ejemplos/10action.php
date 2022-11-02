<?php
//aprovechamos para ver un par de funciones para el manejo de variables.
//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
if(isset($_GET) && !empty($_GET)){
    //parece que te mete las mierdas en el array asociado $_GET siendo el campo name
    //de los inputs la clave
    echo "Recibido!! Mira la URL en tu navegador<hr>";
    echo "Bienvenido $_GET[nombre] $_GET[apellidos]";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_GET);
}
 else {
     echo "No hemos recibido nada!";
}
