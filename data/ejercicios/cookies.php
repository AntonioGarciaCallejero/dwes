<?php
//para volverlo a formato normal

//da problemas el mostrar el json_decode
echo json_decode($miarray);

time(); //epoch time, unix -> el tiempo en segundos 1970
//fecha y hora textual a fecha unix
//time() = strtotime(now());
//strtotime();

//definir un cookie

$miarray = ["hola", 25, [1,3,5]];

//para que se aprecie el formato json hay que ponerlo en formato asociativo
// => claves y valores

//para almacenar toda esta info en una cookie la tngo que serializar
//esto me devuelve una cadena
$infoguardar = serialize($miarray);
//muestro el array con el <pre>
//lo de serializar funciona solo si uso unicamente php
//tambien se puede usar el formato json
$infojson = json_encode($miarray);


echo "<br>";

setcookie("primeracookie", $infoguardar, time()+300);
setcookie("segundacookie", $infojson, time()+600);



echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));
echo "</pre>";
//y ahora le paso la cadena como value a la cookie
//lo deserializo y lo muestro por pantalla con el var dump porque hacer un echo
//lo serializo para meterlo y lo deserializo para mostrarlo por pantalla

//buscar mi candado
//numero de segundos desde 1970 hasta cuando sea
setcookie("primeracookie", "aceptado", time()+ (24*60*60)); //un dia
setcookie("primeracookie", "aceptado", strtotime("+1 week")); //una semana
//nombre, valor y cuando caduca la cookie


//tengo que establecer la cookie antes de mostrar nada por pantalla
//van en la cabecera y cuando hagoecho ya la he cerrado y estoy escribiendo en el cuerpo

setcookie("primeracookie", "aceptado", strtotime("+1 minute"));
//este $_COOKIE no funcionar hasta la proxima peticion
echo "Valor de la cookie :" . $_COOKIE["primeracookie"];
//el valor de todas las cookies del servidor parece que aqu
// estamos haciendo mierda relacionada con el servidor

echo "Numero de cookies creadas" . count($_COOKIE);

//como borrar una cookie
//le pongo tiempo negativo para que caduque y este en el pasado
//te la invalida y la elimina
//setcookie("primeracookie", "aceptado", time()-120);

//solo la invalida no la elimina (no lo recomienda)
//unset();



