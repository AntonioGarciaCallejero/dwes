<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
    <!--incrusta todo el codigo sin necesidad de copiarlo-->
    <?php
        //asi solo me lo incluira una vez y las siguiente no cargaran
        //parece que funciona rana
        //include_once "footer.php";
        //require "footer.php";
        //require_once "footer.php";
        //include sale un warning pero la pagina sigue ejecutandose
        //inlude es el como el import de java
        //include te sale un warning pero no para la ejecucion, require si que la para
        //el require aborta la ejecucion
        // puedes usar variables de la otra pagina
        //si referencias antes del include no funciona
        echo "<br> El nombre del admin es :" .$nombreadmin;
        //puedo ponerlo varias veces
        include "footer.php";
        include "footer.php";

        //esta es la forma correcta de ponerlo, el once no te saca nada, limita al que has puesto antes
        //es para evitar importar la misma mierda desde varios sitios ala vez
        require "footer.php";
        require_once "footer.php";
        ?>
    </footer>
</body>
</html>