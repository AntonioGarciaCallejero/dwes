<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
//  Imprimir una ficha con tus datos personales guardados en variables 
//(nombre, apellidos, edad, teléfono, email, ...). Hazlo usando una tabla html y cambiando de modo:

// Con print y con echo
// Con concatenando, usando dobles comillas y simples
$nombre= "Antonio";
$apellidos= "Garcia Callejero";
$edad= 26;
$telefono= "420420420";
$email= "wasdadadada@gmail.com";
//imprimimos la mita superior de la tabla con los titulos
echo '<table border= "1">
<tr>
<th>nombre</th>
<th>apellidos</th>
<th>edad</th>
<th>telefono</th>
<th>email</th>
</tr>';
//imprimos la mitad inferior con los valores de los campos
echo"<tr>
<td>" . $nombre . "</td> .
<td>" . $apellidos . "</td> .
<td>" . $edad . "</td> .
<td>" . $telefono . "</td> .
<td>" . $email . "</td> .
</tr></table>";
?>
</body>
</html>