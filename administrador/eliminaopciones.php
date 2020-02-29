<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$nPerCodigo=$_POST["nPerCodigo"];

// ELIMINA TODAS LAS OPCIONES PARA UNA PERSONA
$sql1="delete from persona_opcion where nPerCodigo='$nPerCodigo'";
$result1=mysqli_query($cn, $sql1);
?>