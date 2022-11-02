<?php
//valores buenos 
// usuario : 1234 => rol = 0
//admin : 4567 => rol = 1
//este trozo de codigo php se ejecuta cuando hago el submit
//va encima porque si fuera debajo no funcionaria porque el session start tiene que estar encima del html
//    
function comprobarcredenciales($nombreusu, $clave){
        if ($nombreusu === "usuario" && $clave === "1234") {
            //voy a guardar la info en un array asociativo
            $credenciales["nombreusu"] = "usuario";
            $credenciales["rol"] = 0;
            return $credenciales;
        }
        if ($nombreusu === "admin" && $clave === "4567") {
            //voy a guardar la info en un array asociativo
            $credenciales["nombreusu"] = "admin";
            $credenciales["rol"] = 1;
            return $credenciales;
        }
        return false;
    }//funcion

    //$_SERVER es una variable que contiene mucha informacion
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["envio"])) {

            $credentials = comprobarcredenciales($_POST["usuario"], $_POST["password"]);

                      
            if ($credentials === false) {
                $error = 1;
            }else{
                //si credenciales validas
                session_start();
                $_SESSION["loginok"] = $credentials; 
                //tengo que pasar a principal sies valido
                //echo "<p>he llegado qui</p>";

                header("Location: principal.php");
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Pagina de Acceso</h2>
<!-- entiendo que cuando vuelva a cargar pillara esto -->
<?php
    if(isset($error) && $error == 1){
        echo "<p><font color=\"red\">Credenciales invalidas</font></p>";
    }
?>
<!-- de tipo post porque con get la informacion viaja en la url en texto plano -->
<!-- para que no te puedan meter algo interpretable por aqui usar htmlspecialchars -->
<!-- se lo envia asimismo pero PHP_SELF te devuelve el nombre del script que esta corriendo ahora mismo, -->
<!-- asi que si le cambias el nombre al fichero sigue funcionando aun asi -->
<!-- lo pone por seguridad eso -->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label for="usuario">Introduce Usuario:</label>
<input type="text" name="usuario" id="usuario">
<br>
<label for="password">Contraseña:</label>
<input type="password" name="password" id="password">
<br>
<input type="submit" name="envio" value="Acceder">
</form>

</body>
</html>