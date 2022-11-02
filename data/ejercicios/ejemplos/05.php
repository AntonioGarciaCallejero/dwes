<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 4</title>
</head><body>
<?php

echo "Array ordenado inicializado en la declaración <hr>";
$array1 = [5,"hola", 2.3, true, false, "elemento5"]; // estos dos son equivalentes
$array1 = array(5,"hola", 2.3, true, false, "elemento5");
//cada mierda de estas que le hemos metido tiene su posicion
//accedemos a los elementos del array con corchetes y su posición.
$elemento0 = $array1[0];
echo "El elemento 1 es $elemento0 y también $array1[0]";
echo "<hr> Podemos ver el contenido con var_dump o print_r";

echo "<br>";
//var dump nos da mas informacion que print r
var_dump($array1);
echo "<br>";
print_r($array1); //print_r puede ser más incomodo salvo que usemos <pre></pre>
//entiendo que el pre te lo pone con los saltos de linea para que no sea un chorizo

echo "<pre>";
var_dump($array1); 
echo "</pre>";

echo "<pre>";
print_r($array1); 
echo "</pre>";

//la podemos recorrer con el bucle foreach de dos maneras:
    //la etiqueta hr te hace una linea horizontal
echo "<hr> Recorrido mediante bucle foreach simple <br>";
foreach ($array1 as $element){
    echo $element . '<br>';
}
//foreach clave->elemento
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
?>
</body></html>