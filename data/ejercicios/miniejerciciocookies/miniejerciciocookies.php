<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- con cual se enviaban las cookies -->
    <form name="miformulario" action="/establecercookies.php" method="get">

        <p>
            <p>Elige un idioma</p>
            <!-- radio button solo deja elegir uno, los checkbox dejan varios -->
            <!-- en el checkbox hay que poner los corchetes en el name o solo recoge uno -->
            <!-- checkbox for -->
            <label for="idioma1">Ingles </label>
            <input type="checkbox" name="idiomas[]" id="idioma1" value="Ingles" >
            <label for="idioma2">Aleman </label>
            <input type="checkbox" name="idiomas[]" id="idioma2" value="Aleman">
            <label for="idioma3">Espagnol </label>
            <input type="checkbox" name="idiomas[]" id="idioma3" value="Espagnol" > 
        </p>

        <p>
            <p>Elige una marca</p>
            <!-- radio button solo deja elegir uno, los checkbox dejan varios -->
            <!-- en el checkbox hay que poner los corchetes en el name o solo recoge uno -->
            <!-- checkbox for -->
            <label for="marca1">Ingles </label>
            <input type="checkbox" name="marcas[]" id="marca1" value="Volvo" >
            <label for="marca2">Aleman </label>
            <input type="checkbox" name="marcas[]" id="marca2" value="Audi">
            <label for="marca3">Espagnol </label>
            <input type="checkbox" name="marcas[]" id="marca3" value="Merceds" > 
        </p>

        <input type="hidden" name="ip" value=" <?=$_SERVER['SERVER_ADDR'] ?>">

        <input type="submit" name ="envio" id="envio" value="Enviar Datos">
    
    </form>
    
</body>
</html>

crear web en la que seleecciones entre 3 idiomas: (radiobutton?) el expañol, ingles y alleman 
y selecciones una marca de coche perferida y muestre el siguiente mensaje

Bienvenido querido usuario.
Welcome dear user.


y la marca de coche seleccionada.


Esta informacion se debe guardar en cookies y luego recuperar la informacion
Si no se slecciona idioma por defecto sera español