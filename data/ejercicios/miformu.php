<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Credenciales</h1>
    
    <!-- si quiero mandar la informacion a la propia pagina se pone almohadilla en el valor del action -->
    <!-- con get la info en la cabecera y en texto plano -->
     <!-- es a donde va actions a mandar esos datos -->
    <form name="miformu" action="/autoriza.php" method="get">
        <p>
            <label for="nombre"> Introduce Nombre:</label>
            <!-- //imput : t ya te lo rellena -->
            <!-- aqui nos va a interesar el campo name, el campo id en esta asignatura no interesa -->
            <!-- el nombre y el id normalmente se ponen igual pero no tiene porque -->
            <!-- ami me interesa el campo nombre -->
            <input type="text" name="nombreusuario" id="nombreusu">
        </p>
        <p>
            <label for="password">Introduce la contraseña:</label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <p>
            <p>Elige tu modulo preferido: </p>
            <!-- radio button solo deja elegir uno, los checkbox dejan varios -->
            <!-- en el checkbox hay que poner los corchetes en el name o solo recoge uno -->
            <!-- checkbox for -->
            <label for="asignatura1">PHP </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP" checked>
            <label for="asignatura2">Javascript </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="Javascript">
            <label for="asignatura3">Python </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python" checked> 
            <label for="asignatura4">SQL </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
        </p>

        <p>Elige tu equipo de basket</p>
        <p>
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont" checked>
            <label for="equipo2">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro">
            
        </p>


        <p>Elige tu plato favorito: </p>
        <p>
            
            <!-- select>option*4 -->
            <!-- una etiqueta select y 4 ertiquetas option -->
            <select name="menus" id="menus">
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <!-- porque este no funciona -->
        <p>Elige tus platos favorito: (SELECT MULTIPLE)</p>
        <p>
            
            <!-- select>option*4 -->
            <!-- una etiqueta select y 4 ertiquetas option -->
            <select name="menusm[]" id="menus" multiple required>
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <!-- como insertaba php dentrp de un codigo html -->
        <!-- puedo meter php dentro del value -->
        <!-- es un valor dinamico que el sevidor calcula, en este caso la direccion del servidor -->
        <input type="hidden" name="ip" value=" <?=$_SERVER['SERVER_ADDR'] ?>">

        <input type="submit" name ="envio" id="envio" value="Enviar Datos">

    </form>
</body>
</html>