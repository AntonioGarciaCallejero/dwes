<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales :</h1>
    <h2>Si has llegafo aqui eres bsdkdada</h2>
   
   <!-- isset(), emtpy -->
   <?php
        
        //lo de envio es si le has dado al boton de enviar
        //verifico si se ha enviado y los campos del formulario estan vacios ono
        if (isset($_GET['envio'])) {
            if (!empty($_GET['nombreusuario'])){
                $usuario = $_GET['nombreusuario'];
                echo "<br>Usuario introducido : " . $usuario;
            }else{
                echo "<br><h3>No has introducido ningun usuario</h3>";
            }
            if (!empty($_GET['passwd'])){
                $password = $_GET['passwd'];
                echo "<br>contraseña introducida : " . $password;
            }else{
                echo "<br><h3>No has introducido ninguna contraseña</h3>";
            }
        }
        //elemntos de array, recorrer array php
        

        //esta estaria peor
        // if(isset($_GET['nombreusuario']) && !empty($_GET['nombreusuario'])){
        //     $usuario = $_GET['nombreusuario'];
        //     echo "<br>Usuario introducio : " . $usuario;

        // }else
        // {
        //     echo "<br><h3>No has introducido ningun usuario</h3>";
        // }
        // echo "<br> El nombre del usuario introducido es : " . $_GET['passwd'];
       
        //RECOGIDA VALORES CHECKBOX
        if (isset($_GET['envio'])){
            if(!empty($_GET['asignaturas'])){
            $asignaturas = $_GET['asignaturas'];
            foreach($asignaturas as $asignatura){
                echo "<br> Te encanta el lenguaje de programacion : " . $asignatura;
            }
            }else{
                echo "<br> No te gusta la programacion";
            }
        }//fin isset


        //Recogida datos RadioButton
        if(isset($_GET["envio"])){
            $equipobasket = $_GET["equipo"];
            if(!empty($equipobasket)){
                echo "<br> Tu equipo de basket preferido es : " . $equipobasket;
            }else{
                echo "<br>No has elegido ningun equipo";
            }
        }

        //recogida de listas desplegable
        if(isset($_GET["envio"])){
            $menupreferido = $_GET["menus"];
            if(!empty($menupreferido)){
                echo "<br> Tu plato preferido es : " . $menupreferido;
            }else{
                echo "<br>No has elegido ningun equipo";
            }
        }

        //recogida de listas desplegables multiples opciones
        if(isset($_GET["envio"])){
            $menupreferidos = $_GET["menusm"];
            if(!empty($menupreferidos)){
                //la llave del for each no es necesaria creo
                foreach($menupreferidos as $menu){
                echo "<br> Te encanta el plato : " . $menu;
                }
            }else{
                echo "<br>No has elegido ningun equipo";
            }
        }
    ?>
</body>
</html>