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
  //esto creo que mejor lo sacamos del GET
  echo "<h1>Array de " . $_GET['method'] ."</h1>";

  
  
  var_dump($this->array);
  ?>
</body>
</html>