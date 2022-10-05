<?php
//los arrays aqui no son vectores como en java, son mas parecidos
//a los hashmap
//los elementos son heterogeneos
//pueden contener varios tipos de mierda no solo 1
    $miarray = array(1, "hola", 3.0, false);
    $miarray2 = ["elt1", 2, 4.0];
    //aunque no me diga nada elva  crear unos indices
    // 0 1 2 3 para cada mierda que meta

    echo "<br>Elemento 2 del array :". $miarray[2];
    //mostrar un array
    //foreach, var_dump, print_r;
    foreach($miarray as $elmto){
        echo "<br>el elmto es : " . $elmto;
    }
echo "<br>";
    print_r($miarray);
var_dump($miarray);
    //var down es  como printr
    //me dice la longitud del array y me da mas informacion
    //var down y printr sirven con variables nrmales no solo con arrays
    echo "<br>  longitud del array :" . count($miarray);


    $array2 = [
        3,
        2,
        5,
        9
    ];

    //si pong el ampersand altera valor, sino no, solo lo muetra alterado
    //pasar por valor y pasar por variable
    
    foreach($array2 as &$elto){
        $elto = $elto * 2;
        echo "<br> valor del elto : " . $elto;
    }
    print_r($array2);

    //array indexados las claves pueden ser enteros o cadenas

    //añadir un elemento al array, lo inserta siempre al final
    $array2 [] = 15;
    echo "<br>";
    print_r($array2);
    //e incrementa en 1 el ultimo identificador entero de la clave
    //aqui el tamaño es dinamico 
    //eliminar un lemento o una variable
    //al eliminar el elemento ha eliminado la posicion tambien sin
    //reestructurar ni remplazar


    $mivar = 5;
    unset($mivar);


    print_r($array2);
    echo "<br> y la posicion 2 ? : " . $array2[2];

    $array2[] = 99;
    echo"<br>";
    print_r($arrya2);
    //siempre que inserto inserta al final aunque metas una posicion que falta
    $array2[2] = 13;
    //esto insertara en la posicion 2 y al final
    //no te puedes fiar del numero de posicion, solo del numero
    //de elementos
    //te la crea? puede remplazar? hacer pruebas

    echo "<br> mostrar clave y valor de darray:";

    //se pueden llamar distinto clave valor
    foreach($array2 as $key => $value){
        echo"<br> Clave : " . $key . " yvalor " . $value;
    }

    //$array2[100]= 4;

    //puedes saltar hasta la 100 y seguira contando desde ahi


    $persona = array(
        "edad"=> 23,
        "peso"=> 75,
        "dni"=> "78452",
        "casado"=> false

        

    );


    foreach($persona as $key => $value){
        echo "<br> Clave:"  . $key . "valor" . $value;
     }

     echo "<br>";
     print_r($persona);


     //si no le pones clave al añadir te va a coger la ultima clave
     //int que tengas y te la va a aumentar en 1

     $persona[]=7;


     //aqui te mostrara el valor que corresponde a esa clave 
     echo "<br> El dni es: " . $persona["dni"];


     // arrays multidimensionales: matrices, arrays de arrays (matrices)
     $arrm = [
            0=> [1,3],
            1=> [5,7,9],

     ];

     //de la posicion 1, el elemento 1 (o sea 7, empiezan en 0)
     echo "<br>" . $arrm[1][1];




















    unset($array2[2]);
    
    $array3 = [
        "hola",
        4

    ];
    