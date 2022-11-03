<?php
//crear o unirse a una sesion ya creada
session_start();
//esto pasa igual que las cookies, tiene que ser lo primero que hay en una pagina no se puede imprimir nada antes
//$_SESSION["NOMBRE_VARIABLE"]
//contador visitas

if(!isset($_SESSION["contador"])){
    //se declara aqui si no existe
    $_SESSION["contador"] = 0;

}else{
    $_SESSION["contador"]++;
}

echo "He visitado la pagina " . $_SESSION["contador"] . " veces";
//session producto igual a pollas en vinagre
//echo "<br>Producto: "

//hay que escapar esto
echo "<a href=\"sesion2.php\">Siguiente Pagina</a>";

//la sesion de una cookie hay que establecerla antes de que haya ninguna etiqueta html
//estos dos metodos
//setcookie();
//session_start();

//<!doctype html>
//echo "";

//tiene que ir siempre delante de cualquier html o antes de que se muestre algo por pantalla
//por encima puedo tener codigo php pero ningun echo ni nada que muerte mierda por pantlla