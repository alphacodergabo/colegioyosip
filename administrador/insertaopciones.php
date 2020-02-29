<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$nPerCodigo=$_POST["nPerCodigo"];
$nOpCodigo=$_POST["nOpCodigo"];

// INSERTA LAS OPCIONES PARA UNA PERSONA
$sql1="insert into persona_opcion (nPerCodigo,nOpCodigo,nPerOpEstado) values('$nPerCodigo','$nOpCodigo','7')";
$result1=mysqli_query($cn, $sql1);
?>
<img src="imagenes/bien.png" width="10" height="10" /> Se insertaron los permisos correctamente.