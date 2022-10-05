<?php
    $var1 = (string)5.0;
    $var2 = "5";
    $var2 = (int)"7";

    $var3 = (string)8;
    $var4 ="";
    $var5 =

    // notacion de las variables
    $camelCase;

    echo "Var1 es del tipo : " . gettype($var1)"<br>";
    //te dice si tiene algun valor esa variable

    echo "LA variable 3 esta definida : ? " . isset($var3) . "<br>";
    echo "<br>LA variable 4 esta definida : ? " . isset($var4);


    echo "LA variable 3 esta vacia : ? " . empty($var3) . "<br>";
    echo "<br>LA variable 4 esta vacia : ? " . empty($var4);
    echo "<br>LA variable 5 esta vacia : ? " . empty($var3) . "<br>";

    //recomendable constantes en mayusculas
    const  MICONST = 100;
    define('OTRACONST', 200);
    echo "<br> las constante es :" . MICONST;
    //las constantes no tiene simbolo del dolar

    $num1 = 3;
    $num2 = 7;

    // == compara valores, === compara valor y tipo
    if($num1 === $numer2){
        echo "<br> Son iguales";
    }else{
            echo "<br> Son diferentes"
    }
    //de linea
    /*de bloque*/

    /*
        variables: [A-Z, a-z, 0-9]
            -no pueden comenzar con numeros (contener si que pueden), ni caracteres especiales
            (ni puede tener ni puede empezar)
            excepto el guion bajo
            pueden contener numero

            Casesensitive:
                JAVA -> SI
                PHP -> a medias:
                    - las variables ->si.
                        $MIVAR diferente $mivar
                    - los metodos -> no
                        METODO1 = metodo1 = Metodo1

            TIPOS DE DATOS:
             simples:   int, string, boolean, float (no hay char,
             aqui char es una cadena de una solo caracter)
             complejos: arrays, objetos, ficheros

             Tipao de un lenguaje programacion:
             si tengo que definir lo que es a la hora de programar una variable
              -Fuerte: JAVA
              -Debil: PHP
        gettype();


    OPERADORES

    =========================

    =, <, > ... !=, <>, ==, ===, <=>



    ESTRUCTURAS DE CONTROL 

    if(){} ; if(){}else{}

    if(){

    }elseif{

    }else{

    }
    while(){} ; do{}while() ;
    $miarray
    for($i = 0; $i<10; $i++){
        $miarray[$i];
    }
    lo mismo que en java excepto esta
    para recorrer los arrays
    foreach($array as $elmto){

    }


    Inclusion de codgo de un fichero en otro:
    include, include_once, require, require_once;
    */
   