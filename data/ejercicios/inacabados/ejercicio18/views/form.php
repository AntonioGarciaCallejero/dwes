<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <style></style>
  <title>Document</title>
</head>
<body>
  <?php
    require('views/header.php');
  ?>
  <h1>Login de  <?= $this->name ?></h1>

  <!-- no deberia hacer falta asi poner el metodo en principio, ya probare -->

  <form action="/solucionest2/ejercicio17?method=auth" method="GET">
    <label for="">nombre</label>
    <input type="text" name="name"> <br>
    <label for="">contraseña</label>
    <input type="password" name="password"> <br>
    <input type="submit">
  </form>
</body>
</html>