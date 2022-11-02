<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Contraseña</label><input type="password" value="" name="password"> <br>
        <input type="submit" value="enviar">
    </form>
    
    <h2>Datos enviados</h2>
    <!-- en la primera pasada el post estara vacio -->
    <!-- una parte de la pagina que mostrara 
    una cosa u otra dependiendo de lo que hayamos hecho con $_POST -->
    <?php
    // si no esta sin declarar o su valor es null y si no es igual a false o 0
    if(isset($_POST) && !empty($_POST)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Bienvenido $_POST[nombre] $_POST[apellidos]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
        var_dump($_POST);
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
</body></html>