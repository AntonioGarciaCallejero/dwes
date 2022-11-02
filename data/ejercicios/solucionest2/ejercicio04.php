<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Imprimir los primeros 10 números de la sucesión de fibonacci. La sucesión 
    // comienza con los números 0 y 1; 2​ a partir de estos, 
    // «cada término es la suma de los dos anteriores» 
    //la secuencia fibonacci es: 0, 1 , 1, 2, 3, 5...
    
    
    $penultimo= 0;
    $ultimo= 1;
    //no declarar variables nulas
    $suma= 0;
    
    for ($i = 0; $i <= 10; $i++) { 
        echo $penultimo . '<br>';
        //el penultimo de sale por pantalla y luego desaparece despues de hacer la suma

        //hacemos la suma
        $suma = $penultimo + $ultimo;
       
        
        //el penultimo es igual al ultimo y se pierde el valor de penultimo
        $penultimo = $ultimo;
        
        //el ultimo es igual a la suma
        $ultimo = $suma;

        //y vuelta a empezar
    }
    





        

    
    ?>
</body>
</html>