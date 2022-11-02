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

            //bidimensional para no sobrescribir siempre la misma variable
            $_SESSION["listadeseo"][] = $item;
            // var_dump($_SESSION);
            // echo "<br><br>";
            // var_dump($_SESSION["listadeseo"]);
            //echo "<br>Elemento selecc: " . $_SESSION["listadeseo"];
            //codifcar a json
            $sesioncodif = json_encode($_SESSION["listadeseo"]);
            //una cadena si ha odido parsearlo, un falso sino
            //le podria pasar $_SESION directamente

            //esta es la opcion mas facil, utilizarla
            //OPCION 1: decodificarlo como un array asociativo
            $sesiondecodif = json_decode($sesioncodif, true);
            //el true devuelve los objetos codificados como arrays
            //podriamos jsonear el session si tuviera mas de 1 elemento
            //vardump de sesion codif y decodif
            //me devuelve un array
            // $_SESSION["listadeseo"][4] = "Porsche";
            //como accederiamos al array asociativo
            //para modificar a pelo una posicion de la lista


            //son excluyentes las dos opciones, comentar una
            //OPCION 2: decodificarlo como un objeto
                //OPCION 2.1
            //json decode sin el true y que te lo devuelva como un objeto
            $sesiondecodif = json_decode($sesioncodif);
            //cambiar el elemento 2 a otra cosa $sesiondecodif
            var_dump($sesiondecodif);
            //para que funcione con comillas dobles
             $sesiondecodif->{"listadeseo"}[6]="lampara";
            echo 
            //accedemos al atributo lista deseo a la posicion 6
            //$this->metodo aqui el this se puede usar desde fuera
            // var_dump($sesiondecodif);
            // get_object_var devule las propiedades de un objeto como array
            //

            //OPCION 2.2
            //me devuleve los atributos y las variables de un objeto como un array
            $miarray = get_object_vars($sesiondecodif);
            var_dump($miarray);
            //o cont print_r mejor que se ve mas claro
            //count normal te da el numero de elementos que hay en el array en ese momento
            //count recursive es para arrays dentro de arrays
            //un array que contuviera 2 arrays de 3 me daria 6 en vez de 2 con el count recursive
            //el -1 es para que vaya de 0 a 5, no empiece a contar desde 1
            //6 elementos que van del 0 al 5 en el array
            for ($i=0; $i < count($miarray, COUNT_RECURSIVE)-1; $i++) { 
                echo "<br>Elemento" . $i . " es: " . $miarray['listadeseo'][$i];
                //lo ideal es usar puntos separadores
                //que pasa con el this en php, es distintode java
            }

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