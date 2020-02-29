<?php
function Conectarse(){
$servidor="localhost";
$basededatos="clase";
$usuario="root";
$clave="";
$cn=mysqli_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos Clase");
mysqli_select_db($cn, $basededatos) or die("Error seleccionando la Base de datos Clase");
return $cn;
}
?>