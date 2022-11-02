<?php
//para cerrar una sesion tengo que unirme a ella
    session_start(); //unirme


    

    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),"",time()-7200,'/');
    //para que funcione en chrome hay que poner el path

    //hay que ponerlo aqui o el setcookie no va a funcionar

    //echo "<h2>Cerrando sesion</h2>";
    //echo '<a href="login.php">Pagina de Login</a>';


    //este o lo comentado son excluyentes
    header("Location: login.php");

    //al cerrar sesion ya no deberia existir cookie