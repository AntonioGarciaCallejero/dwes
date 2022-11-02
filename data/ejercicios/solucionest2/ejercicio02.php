<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  Imprimir la tabla de multiplicar del 8. 
    //  Usar constante para que fácilmente podamos adaptarla a otros números. 
    define('OXO', 8);
    for ($i=1; $i <= 10 ; $i++) { 
        echo OXO . " por " . $i . " es " . $i* OXO . "<br>";
    }

    ?>
    
</body>
</html>