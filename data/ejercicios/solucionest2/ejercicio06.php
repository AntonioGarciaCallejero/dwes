<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Construír un array con el quinteto inicial de un equipo de basket. 
    // Construyelo usando "array()" y usando "[]". 
    // Imprimir dicho quinteto usando etiquetas "ul" y "li". 
    // Imprimelo de dos modos distintos: 
    // a) Indicando sólo los nombres. b) Indicando la posición del nombre en el array (0, 1, 2, ...). 
    $baloincesto = ['hitler1', 'hitler2',  'hitler3', 'hitler4', 'hitler5'];
    $baloincesto = array('hitler1', 'hitler2',  'hitler3', 'hitler4', 'hitler5');
    
    //foreach simple
    echo '<ul>';
        foreach ($baloincesto as $element){
            echo '<li>' . $element . '</li>';
        }
        
    echo '</ul>';

    echo '<ul>';
        //foreach clave->elemento
    foreach ($baloincesto as $position=>$element){
        echo '<li>' . $position . ": " . $element . '</li>';
    }
    echo '</ul>';

    ?>
</body>
</html>