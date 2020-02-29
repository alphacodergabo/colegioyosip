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
$txtusuario = $_POST["txtusuario"];
$sql="insert into usuario(nPerCodigo,cPerUsuCodigo,cPerUsuClave,nUsuEstado) values('$txtcodigo','$txtusuario','$txtclave','7')";
$result=mysqli_query($cn, $sql);
?>
Se ha creado el usuario correctamente.