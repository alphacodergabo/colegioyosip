<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
?>
<h2>Mantenimiento > Usuarios</h2>
<hr />
<img src="imagenes/carga.gif" width="10" height="10" /> <a href="#" id="opcabecera" onClick="nuevousuario();">Nuevo Usuario</a>
<br /><br />
<div id="buscarpersona">
</div><script>nuevousuario();</script>