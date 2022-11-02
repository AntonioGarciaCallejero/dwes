
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <?php
        // Dado un número por constante, por ejemplo el 169 o 193, 
        //mostrar la lista de todos sus divisores.
        //Si no los hay decir que el número es primo. 
        define("NUMERO", 193);
        $contador1 = 1;
        $contador2 = 0;

        for ($contador1 ; $contador1 <= NUMERO ; $contador1++) { 
            if (NUMERO % $contador1 == 0) {
                echo $contador1 . '<br>';
                $contador2++;
            }
        }
        
        //1 no es primo, 2 si
        if ($contador2 == 2) {
            echo "Es primo";
        }
    ?>
 </body>

 </html>