<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Crea un formulario que envíe un array de 3 nombres. 
Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]").  -->
<form action="" method="post">
<label>Nombre1</label><input type="text" value="" name="nombres[]"> <br>
<label>Nombre2</label><input type="text" value="" name="nombres[]"> <br>
<label>Nombre3</label><input type="text" value="" name="nombres[]"> <br><br>

<input type="submit" value="enviar">
        
</form>
</body>
</html>

<?php
    var_dump($_POST);
?>