<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Repitite el ejercicio 6. En esta ocasión debes usar un array asociativo. 
Cada posición se llamará correctamente: base, escolta, alero, alapivot, pivot. 
Muestra el resultado con un "foreach (clave => valor)"  -->
<?php
   

    $baloinsecto = ["hitler1"=>"base", "hitler2" =>"escolta", "hitler3"=>"alero", "hitler4"=>"alapivot", "hitler5"=>"pivot"];
    foreach ($baloinsecto as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    
    
?>
</body>
</html>