
//establecer una cookie 
//setcookie(nombre, valor, timeexpired)

//leer el valor
    //$_COOKIE["nombre"]

//borrar
//setcookie(nombre, valor, timeexpired-muchotiempo)


//redireccion
//pero entonces te redirecciona nada mas cargar la pagina no?
//header('Location: miotrapagina.php'); como? en el header?

//el header y el setcookie tiene qe ir antes de  -->

<?php
    //esto no entrara en conflicto con otro que se lame tambien envio
        if (isset($_GET['envio'])){
            if(!empty($_GET['idiomas'])){
            $idiomas = $_GET['idiomas'];
            $idiomasguardar = serialize($idiomas);
            setcookie("cookieidiomas", $idiomasguardar, time()+300);
            } 
        }
        else{
            echo "no funsiona";
        }
        if (isset($_GET['envio'])){
            if(!empty($_GET['marcas'])){
            $marcas = $_GET['marcas'];
            $marcasguardar = serialize($marcas);
            setcookie("cookiemarcas", $marcasguardar, time()+300);
            } 
        }
        else{
            echo "no funsiona";
        }
        //no estara establecida aun sid que eso habra que hacerlo enel siguiente
