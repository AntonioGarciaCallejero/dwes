<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- //info del fichero -->
    <?php
    if(isset($_POST["envio"])){
        echo "Nombre del fichero" . $_FILES["myfile"]["name"];
        //extension del fichero
        echo "<br>Extension del fichero : " . $_FILES["myfile"]["type"];
        //tamaño del fichero
        echo "<br>Tamaño delfichero: " . $_FILES["myfile"]["size"];
        //nombre del fichero temporal
        echo "<br>Nombre del fichero temporal : " . $_FILES["myfile"]["tmp_name"];
        //todo esto echos

        $destino = "subidos/" . $_FILES["myfile"]["name"];
        $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"], $destino);
        //usamos el operador ternario por no hacer un ifelse
        echo $flag ? "fichero subido correctamente" : "fallo en la subida";

    }else{
        echo "no has enviado nigun fichero";
    }

    ?>
</body>
</html>