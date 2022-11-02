<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    //esto es una forma de definir una constante de nombre SIZE, valor 10
    define('SIZE', 10);
    echo "<table border=1>";

    //10 filas por 10 columnas
    //esa mierda la hace para que las filas pares tengan color
    //dentro de una tabla va ha ir haciendo tr y por cada tr las td que hagan falta
    $number = 1;
    for ($row = 1; $row <= SIZE; $row++) {
        if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
        else
            echo "<tr>";
        for ($column = 1; $column <= SIZE; $column++) {
            echo "<td>", $number, "</td>";
            $number = $number + 1;
            //cada vez que lo imprime lo aumenta
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>