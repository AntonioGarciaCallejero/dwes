<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo. 
Si no existe se vuelve atrás indicando que el campo es obligatorio.  -->
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <input type="submit" value="enviar">
    </form>
    
    
    <!-- en la primera pasada el post estara vacio -->
    <!-- una parte de la pagina que mostrara 
    una cosa u otra dependiendo de lo que hayamos hecho con $_POST -->
    <?php
    // si no esta sin declarar o su valor es null y si no es igual a false o 0
    if(isset($_POST) && !empty($_POST)){
        echo "Bienvenido $_POST[nombre] ";
    }
     else{
         echo "El campo Nombre es obligatorio";
    }
    ?>
</body>
</html>