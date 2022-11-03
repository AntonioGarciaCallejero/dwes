<?php
//para unirse a la sesion ya inciada
//buscara si ya hay la cookie esa creada
//en este caso usamos apache
//variables de sesion se comparte entre las paginas que se unen a esa sesion

    session_start(); //creo o me uno a la sesion

    //esto del session_name no nos lo va a pedir
    $nombresesion = session_name();
    echo "Nombre de sesion creada anteriormente : " . $nombresesion;


    $_SESSION = array(); //unset($_SESSION)
    //estableces un array vaci en session de manera que no te contega variables
    session_destroy();
    //se dresruyr la info de la session pero la cookie permance asi que
    //variable que contiene el nombre de la sesion el session name
    //en chrome hay que añadirleademas el parametro del path (el que esta alfinal)
    setcookie(session_name(), '', time() -7200, '/');


    echo "La pagina se ha cargado " . $_SESSION["contador"] . "veces";

    


   //si yo cargo sesion 2 sin cookie habra perdido la informacion de la sesion