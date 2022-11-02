<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplos</title>
</head>
<body>
  <?php
  // esto es como un import de la clase persona
    require('Persona.php');
    $juan = new Persona('Juan', 'García', 15);
// esto es para usar el metodo saludar del objeto juan
    echo $juan-> saludar();
    echo "<br>";
    echo "Soy $juan";
    echo "<br>";
    echo "Mi nombre completo es $juan->nombre $juan->apellido y tengo $juan->edad años";
  ?>
</body>
</html>
