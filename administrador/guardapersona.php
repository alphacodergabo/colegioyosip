<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
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
$sql="insert into persona(cPerApellido,cPerNombre,dPerNacimiento,CPerRnd,nPerEstado,direccion,nConCodigo,nrodni,nrotelefono,mail,oper,cemail) values('$apellidos','$nombres','$fechana','','7','$direccion','$nConCodigo','$nrodni','$nrotelefono','$mail','$oper',$cemail)";
$result=mysqli_query($cn, $sql);
?>
Se ha registrado la persona correctamente.