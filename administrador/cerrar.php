<?php include('conexion.php'); 
session_start(); 
$cn = Conectarse();
$fecha= date('d/m/Y');
$hora= date('H:i:s');
if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '' ){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
	$ip=$_SERVER['REMOTE_ADDR'];
}
$u=strtoupper($_SESSION['vusuariof']);
$sql  = "insert into bitacora(usuario,fecha,hora,ip,nOpeCodigo,descripcion) values('$u','$fecha','$hora','$ip','14','Salio del Campus Virtual')";
$result = mysqli_query($cn, $sql);
$_SESSION['nPerCodigo']="";
$_SESSION['cPerApellido']="";
$_SESSION['cPerNombre']="";
$_SESSION['vusuariof']="";
header("location:index.php");
?>