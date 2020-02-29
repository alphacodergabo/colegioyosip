<?php include('conexion.php'); 
session_start(); 
$cn = Conectarse();	
$vusuariof=$_POST["usuario"];
$vclavef=$_POST["clave"];
$sql="select per.nPerCodigo,per.cPerApellido,per.cPerNombre from usuario usu inner join persona per on usu.nPerCodigo=per.nPerCodigo  where usu.cPerUsuCodigo='$vusuariof' and usu.cPerUsuClave='$vclavef' and usu.nUsuEstado=7 and per.nPerEstado=7";
$result = mysqli_query($cn, $sql); ///ejecuto la consulta
//echo $sql;
?>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/campus.css">
<?php
if ($q= mysqli_fetch_array($result)){
	$fecha= date('d/m/Y');
	$hora= date('H:i:s');
	if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '' ){
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	$_SESSION['nPerCodigo']=$rsvusuario["nPerCodigo"];
	$_SESSION['cPerApellido']=$rsvusuario["cPerApellido"];
	$_SESSION['cPerNombre']=$rsvusuario["cPerNombre"];
	$_SESSION['vusuariof']=strtoupper($vusuariof);
	$nombrecompleto=$rsvusuario["cPerNombre"]." ".$rsvusuario["cPerApellido"];
	$nombre=$rsvusuario["cPerNombre"];
	$u=strtoupper($vusuariof);
	
	$sql  = "insert into bitacora(usuario,fecha,hora,ip,nOpeCodigo,descripcion) values('$u','$fecha','$hora','$ip','1','Ingreso al Sistema')";
	$result = mysqli_query($cn, $sql); 
	echo "<script>admin();</script>";
	}
	
else{ ?><div id="cabecera">
	<div id="tableletras">
		<strong>Usuario o Clave incorrectos</strong>, si contin&uacute;a este inconveniente, comunicarse con el Administrador del sistema. <br>
		<br><a href='index.php' id="opcabecera">Regresar</a>
  </div>	
</div>
<?php }?>
