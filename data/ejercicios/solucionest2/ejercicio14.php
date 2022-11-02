<!-- Envío del script al mismo script. Crea un formulario que funcione como calculadora. 
Debe contener dos input como operandos y un select para elegir operador.

    Si se reciben los datos muestra el resultado.
    Si no son válidos o no existen debe mostrar de nuevo el formulario de calculadora. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario</h2>
    <form method="post" action="">
        <label>Operando 1</label><input type="text"  name="operando1"> <br>

        <select name="operador">
            
         <optgroup label="Grupo de colores">
           <option>+</option>
           <option>-</option>
           <option>/</option>
           <option>*</option>
           <option>%</option>
         </optgroup>
       </select>


        <label>Operando 2</label><input type="text"  name="operando2"> <br>
        <input type="submit" value="enviar">
    </form>
    
    

    <?php
    //vamos a 
    if(isset($_POST) && !empty($_POST)){
        switch ($_POST["operador"]) {
            case '+':
                echo $_POST["operando1"]+$_POST["operando2"];
                break;
            
            case '-':
                echo $_POST["operando1"]-$_POST["operando2"];
                break;
            case '/':
                echo $_POST["operando1"]/$_POST["operando2"];
                break;
            case '*':
                echo $_POST["operando1"]*$_POST["operando2"];
                break;
            case '%':
                echo $_POST["operando1"]%$_POST["operando2"];
                break;
            
        
        }
    }
   

    
    ?>
</body>
</html>
