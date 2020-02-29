<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$cod=$_POST["txtid"];
$nombres=strtoupper($_POST["txtnom"]);
$fechana = $_POST["txtfecha"];
$direccion = strtoupper($_POST["txtdir"]);
$nConCodigo = $_POST["txtdoc"];
$nrodni = $_POST["nrodoc"];
$nrotelefono = $_POST["celu"];
$mail = $_POST["mimail"];
$oper = $_POST["opertel"];
$cemail = $_POST["claemail"];
$apellidos = $_POST["txtape"];
$sql="Update persona set cPerApellido='$apellidos',cPerNombre='$nombres',dPerNacimiento='$fechana',CPerRnd=' ',nPerEstado='7',direccion='$direccion',nConCodigo='$nConCodigo',nrodni='$nrodni',nrotelefono='$nrotelefono',mail='$mail',oper='$oper',cemail='$cemail' where nPerCodigo='$cod'";
$result=mysqli_query($cn, $sql);
?>
Se ha actualizado la persona correctamente.