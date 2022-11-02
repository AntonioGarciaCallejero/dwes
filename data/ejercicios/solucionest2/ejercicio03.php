<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Imprimir los números divisibles por 3 desde el 1 hasta el 10 
        define('TRES', 3);
        for ($i=1; $i <= 10 ; $i++) { 
        
            if ($i % TRES == 0) {
                echo $i . "<br>";
           
            
            }
        }

    ?>
</body>
</html>