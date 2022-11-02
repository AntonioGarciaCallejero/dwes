<?php

//xpath

$datos = simplexml_load_file("empleados.xml");
$apellidos = $datos->xpath("//apellidos");
//te devuelve los dos apellidos que hay en barra barra
//la primera barra seria departamento, la segunda empleado
foreach ($apellidos as $apellido) {
    echo "<br> Apellido :";
    print_r($apellido);
}