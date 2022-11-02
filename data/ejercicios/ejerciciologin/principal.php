<?php
session_start();

if(!isset($_SESSION["loginok"])){
    header("Location: login.php");
}

//para ver lo que hay dentro
// var_dump($_SESSION["loginok"]);
//array dentro de un array
echo "<h2>Bienvenido usuario: </h2>" . $_SESSION["loginok"]["nombreusu"];
echo "<h2>El valor de tu rol es: </h2>" . $_SESSION["loginok"]["rol"];

echo"<br><br>";
echo "<a href=\"logout.php\">Cerrar Sesion</a>";