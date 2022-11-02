<?php
    if($_SERVER["RESQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item = $_POST["lista"];
            //este item que he agregadi lo tengo que guarar en el session
            //creo un array bidimensional
            //dolarsesion es un array 
            //cuyo elemento listadeseos va ser a su vez un array 
            //donde vamos a ir metiendo la mierda

            $_SESSION["listadeseo"][] = $item;
            // var_dump($_SESSION);
            // echo "<br><br>";
            // var_dump($_SESSION["listadeseo"]);
            //echo "<br>Elemento selecc: " . $_SESSION["listadeseo"];
            //codifcar a json
            $sesioncodif = json_encode($_SESSION["listadeseo"]);
            //una cadena si ha odido parsearlo, un falso sino
            //le podria pasar $_SESION directamente

            //OPCION 1: decodificarlo como un array
            $sesiondecodif = json_decode($sesioncodif, true);
            //el true devuelve los objetos codificados como arrays
            //podriamos jsonear el session si tuviera mas de 1 elemento
            //vardump de sesion codif y decodif

            //OPCION 2: decodificarlo como un objeto
            $sesiondecodif = json_decode($sesioncodif);
            //cambiar el elemento 2 a otra cosa $sesiondecodif

        }//if_post

    }//if_server

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar..</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <select name="lista" id="lista" required>
    <option value="camisa">camisa</option>
    <option value="cortcesped">cortcesped</option>
    <option value="consola">XBox 360</option>
    <option value="pantalon">Levis</option>
    <option value="movil">Samsung</option>
    <option value="colonia">Hugo Boss</option>
    <option value="Coche">Mercedes</option>
    <option value="Portatil">Acer</option>
    <option value="raspberry">RPI 4</option>
    <!-- lista simple, si es multiple es con array -->

    <input type="submit" name="envio" value="Agregar Deseo">

    </form>



    </select>
</body>
</html>