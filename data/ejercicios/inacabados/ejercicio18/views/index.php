<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <h1>Ejemplo con cookies</h1>
  <p>¿Tenemos alguna cookie?</p>

  <?php
  //esto para ver lo que hara dependiendo de si ya hay cookies o no hay cookies
  if (empty($_COOKIE)) {
    echo "No hay cookies disponibles<br>";
    //al hacer esto me redigira al index inicial y ejecutara la funcion setcookie()
    //esto es interesante, enlace con la wea
    echo "<a href=?method=setcookie>Crear cookies</a>";
  } else {   
    //te mostrara los valores de las cookies  
    echo "Parece que sí:";
    echo "Usuario es $user<br>";

    echo "Aficiones: <br><ul>";
    //recorrera el array decodificado que me devuelve dentro de una ul, tambien lo podriamos hacer con el
    //pre supongo, no estoy seguro
    //array indexado
    foreach ($hobbies as $value) {
      echo "<li>$value</li>";
    }
    echo "</ul>";

    //los objetos son como arrays, entiendo
    //array asociativo
  
    echo "Persona: <br><ul>";
    foreach ($persona as $key => $value) {
      echo "<li>$key: $value</li>";
    }
    echo "</ul>";    

    echo "<hr>";
    echo "Aficiones (json): <br><ul>";
    foreach ($hobbies2 as $value) {
      echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "Persona (json): <br><ul>";
    foreach ($persona2 as $key => $value) {
      echo "<li>$key: $value</li>";
    }
    echo "</ul>";    

    echo "<pre>";
    var_dump($_COOKIE);

    var_dump($persona);
    var_dump($persona2);
  }
  ?>  
</body>
</html>