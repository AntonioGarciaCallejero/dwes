<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //  Repitite el ejercicio 7 añadiendo los elementos al array de uno en uno. 
        //Construye un array con el nombre de 4 países y muestralo por pantalla.
        $paises = ['Nigeria', 'Brasil', 'Israel', 'Nigeria' ];
        //aqui añadiendolos 1 a 1
        $paises[0] = 'Nigeria';
        $paises[1] = 'Brasil';
        $paises[2] = 'Wakanda';
        $paises[3] = 'Israel';

        echo "<pre>";
            var_dump($paises); 
        echo "</pre>";
    ?>
</body>
</html>