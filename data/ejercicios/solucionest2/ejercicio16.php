<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Crea una lista usando etiquetas ul y li. 
La lista inicialmente estará vacía pero un formulario con un input servirá para añadir los elementos. 
Usa input de tipo hidden para que no "olvidar" los elementos ya añadidos a la lista.  -->
<form action="" method="post">
    <label>Elemento</label><input type="text" value="" name="lista[]"> <br>

    <input type="submit" value="Nuevo">
  
    <hr>
    <?php
    
    if (isset($_POST['lista'])) {
      echo "<ul>";
      //la recorremos con un foreach
      foreach($_POST['lista'] as $elemento) {
        //Esto entiendo que es  para que te guarde los valores para cuando vuelva a cargar la pagina
        
        echo '<input type="hidden" name="lista[]" value="' . $elemento . '"><br>';
        echo '<li>'.$elemento.'</li>';
      }
      echo "</ul>";
      
    }
    ?>
  </form>
  
  

<!-- el post va a ser un array que a su vez va a contener un arrray como valor asociado a la clave lista -->


</body>
</html>