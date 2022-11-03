<?php


    include_once "Asignatura.php";
    include_once "Modulo.php";
    //puedo pone require_once tambien, esto es como el import de java

    //php no es orientado a objetos, se puede utilizar la orientacion a objetos pero no lo es
    echo "<h1>WEB DE ASIGNATURAS</h1>";
    $bbdd = new Asignatura("BBDD",6);
    //imprimo el objeto entero y me lo saca con su toString


    Asignatura::setCiclo("DAM");
    echo "<br> " . $bbdd;
    echo "<br>BBDD pertence al ciclo" . Asignatura::getCiclo() . "<br><br>";

    //ESTE ES EL OTRO
    $dwes = new Modulo("DWES",9, "IFC3014");
    //o alo mejor si que funciona bien espera
    Modulo::setCiclo("DAW");
    echo "<br>" . $dwes;
    echo "<br>DWES pertenece al ciclo " . Modulo::getCiclo();
    //echo Asignatura::getCiclo();
    //hacer probatinas
    //confirmamos que el static (que es de la clase) es comun a todos los objetos
    //y si lo cambias lo cambias para todos los objetos

    