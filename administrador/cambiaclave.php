<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$randomnumber=$_POST["randomnumber"];
$txtclave = $_POST["txtclave"];
$txtrepite = $_POST["txtrepite"];
$txtcodigo = $_POST["txtcodigo"];
$sql="UPDATE usuario set cPerUsuClave='$txtclave' where nPerCodigo='$txtcodigo'";
$result=mysqli_query($cn, $sql);
?>
<h2>Cambiar Clave</h2>
<hr />
Se actualiz&oacute; la clave correctamente.