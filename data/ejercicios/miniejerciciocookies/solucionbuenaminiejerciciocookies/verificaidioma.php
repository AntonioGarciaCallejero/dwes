<?php
    if(isset($_POST["envio"])){
        if(!empty($_POST["idioma"]) && !isset($_COOKIE["idioma"])){
            //verificar que la variable no este vacia
            setcookie("idioma", $_POST["idioma"], time()+3600);
        }
        //si tengo esas mierdas establecidas y la cookie no existe
        if (!empty($_POST["marca"]) && !isset($_COOKIE["marca"])) {
            setcookie("marca", $_POST["marca"], time()+3600);
        }
        //establece las dos cookie yte redirige
        //lo podriahacer todo en una sola cookie

        if (!empty($_POST["idioma"]) && !empty($_POST["marca"])) {
            //redirige automaticamente al llegar hasta esta instruccion 
            header("Location: visualizaopciones.php");
            exit(); //die() normalmente despues de las redirecciones tambien se pone esto
            //hace que no se ejecute nada mas
        }
        //por si alguien inyecta una cookie e intenta venir directamente a verificaidioma
    }else{
        //como medida de seguridad si no vengo de un post
        //borrare las cookie y redigire al inicio idioma.html
        //las cookies que yo pueda haber metido a mano se las tiene que cargar y redirigirme a inicio
        setcookie("idioma", '', time() -7200);
        setcookie("marca", '', time() -7200);
        header("Location: idioma.html");
        //esto es para que quien cargue la pagina a mano no pueda hacer diabluras
        exit();


    }