
 <!-- Envío del script al mismo script. Crea un formulario para enviar campo nombre. 
 El nombre debe existir y debe tener un tamaño mínimo de 3 caracteres. 
 Si es válido se da un saludo. Si no lo es se vuelve a mostar el formulario 
 indicando que el campo es obligatorio y mostrando en el "input" el valor anterior no válido.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br><br>
        <input type="submit" value="enviar">
    </form>
    
    
    <!-- en la primera pasada el post estara vacio -->
    <!-- una parte de la pagina que mostrara 
    una cosa u otra dependiendo de lo que hayamos hecho con $_POST -->
    <?php
    // si no esta sin declarar o su valor es null y si no es igual a false o 0
    if(isset($_POST) && !empty($_POST) && strlen($_POST["nombre"]) >= 3){
        echo "Bienvenido $_POST[nombre] ";
    }
     elseif(isset($_POST) && !empty($_POST) && strlen($_POST["nombre"]) < 3) {
         echo "$_POST[nombre] como Nombre no es válido, este campo es obligatorio ";
    }
    ?>
</body>
</html>