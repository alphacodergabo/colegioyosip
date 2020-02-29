<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$apellido=$_POST["apellido"]; 
$rslistacorreo="SELECT per.nPerCodigo,per.cPerApellido,per.cPerNombre, (select count(*)  from usuario  usu where usu.nPerCodigo=per.nPerCodigo) as total FROM persona per WHERE per.cPerApellido LIKE  '$apellido%' and per.nPerEstado=7 order by per.cPerApellido";
$listarcorreo = mysqli_query($cn, $rslistacorreo);
?><title>Listado de Correos</title>
<table id="formtablenuevo">
	<tr>
    	
        <td id="formcabecera">APELLIDOS</td>
        <td id="formcabecera">NOMBRES</td>
        <td id="formcabecera">CREAR USUARIO</td>
		<td id="formcabecera">EDITAR USUARIO</td>
		<td id="formcabecera">PERMISOS</td>
    </tr>
    <?php 
	while ($rslistacorreo=mysqli_fetch_array($listarcorreo)) { 
	$total=$rslistacorreo["total"];
	?>
    <tr id="grid">
        <td id="formnuevo"><?php echo strtoupper($rslistacorreo["cPerApellido"]) ?></td>
        <td id="formnuevo"><?php echo strtoupper($rslistacorreo["cPerNombre"]) ?></td>
		<?php if ($total==0){?>
		<td id="formnuevo"><img src="imagenes/editar.png" width="10" height="10" /> <a title="CREAR USUARIO" href="#" id="opcabecera" onClick="crearusuario('<?php echo $rslistacorreo["nPerCodigo"]?>');">Crear Usuario</a></td><td></td>
		<?php } ?>
		<?php if ($total==1){?>
        <td></td><td id="formnuevo"><img src="imagenes/editar.png" width="10" height="10" /> <a title="EDITAR USUARIO" href="#" id="opcabecera" onClick="editarusuario('<?php echo $rslistacorreo["nPerCodigo"]?>');">Editar Usuario</a></td>
		<?php } ?>
		<td id="formnuevo"><img src="imagenes/editar.png" width="10" height="10" /> <a title="VER PERMISOS" href="#" id="opcabecera" onClick="verpermisos('<?php echo $rslistacorreo["nPerCodigo"]?>');">Ver Permisos</a></td>
    </tr>
    <?php } ?>
</table>