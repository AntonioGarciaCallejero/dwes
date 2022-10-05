<?php

    //globales
    $var1 = 6;
    $var2 = 7;

    // como es no tipado no tengo que poner  el tipo de dato que devuelve
    function suma($a, $b){
        global $var1;
        global $var2;
        $var1 = 99;
        $var2 =100;
        //fuera tendra prioridad el valor de fuera, dentro este
       // para que una funcion utilice una variable global hay que definiarl a de cierta manera
       unset($var2);
       //con esto borro una variables
        echo "<br>LA variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
        
        //definicion variables estatica
        //estatica guarda el valor incluso si la funcion acaba
        static $varestatica = 0;
        echo "<br>El valor de la var estatica es: " . $varestatica;
        $varestatica++;
        return $a + $b;
    }

    echo "<br>LA variable a y b son : " . $a . " y " . $b;
    echo "<br>LA variable fuera de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
    
    
    echo "<br>Llamada a suma 1 vez : " . suma(3,5);
    echo "<br>Llamada a suma 2 vez : " . suma(3,5);
    echo "<br>Llamada a suma 3 vez : " . suma(3,5);



