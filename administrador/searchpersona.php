<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$apellido=$_POST["apellido"]; 
$rslistacorreo="SELECT per.nPerCodigo,per.cPerApellido,per.cPerNombre FROM persona per WHERE per.cPerApellido LIKE  '$apellido%' and per.nPerEstado=7 order by per.cPerApellido";
$listarcorreo = mysqli_query($cn, $rslistacorreo);
?><title>Listado de Correos</title>
<table id="formtablenuevo">
	<tr>
    	<td id="formcabecera">APELLIDOS</td>
        <td id="formcabecera">NOMBRES</td>
        <td id="formcabecera">Acciones</td>	
    </tr>
    <?php 
	while ($rslistacorreo=mysqli_fetch_array($listarcorreo)) { 
	$total=$rslistacorreo["total"];
	?>
    <tr id="grid">
        <td id="formnuevo"><?php echo strtoupper($rslistacorreo["cPerApellido"]) ?></td>
        <td id="formnuevo"><?php echo strtoupper($rslistacorreo["cPerNombre"]) ?></td>
		
        <td id="formnuevo"><img src="imagenes/editar.png" width="10" height="10" /> <a title="EDITAR USUARIO" href="#" id="opcabecera" onClick="editarpersona('<?php echo $rslistacorreo["nPerCodigo"]?>');">Editar persona</a></td>
		
		
    </tr>
    <?php } ?>
</table>