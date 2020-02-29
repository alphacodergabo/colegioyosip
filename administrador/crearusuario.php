<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$fecha=date("Y-m-d");
$codigo=$_POST['nPerCodigo'];
$rsclave="SELECT 
per.cPerApellido,per.cPerNombre FROM persona per  where per.nPerCodigo='$codigo'";
$clave=mysqli_query($cn, $rsclave);
$rsclave=mysqli_fetch_array($clave);
$cPerApellido=$rsclave["cPerApellido"];
$cPerNombre=$rsclave["cPerNombre"];
?>

<table id="formtablenuevo">
<input type="hidden" id="txtcodigo" value="<?php echo $codigo?>">
<tr>
    <td colspan="2" id="formcabecera">CREAR USUARIO</td>
</tr>
<tr id="grid">
    <td id="formnuevo">Apellidos</td>
    <td id="formnuevo"><input value="<?php echo strtoupper($cPerApellido)?>" type="text" name="txtapellido" id="txtapellido" class="cajas" size="25" readonly="readonly" /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Nombres</td>
    <td id="formnuevo"><input value="<?php echo strtoupper($cPerNombre)?>" type="text" name="txtnombre" id="txtnombre" class="cajas" size="25" readonly="readonly"   /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Usuario</td>
    <td id="formnuevo"><input  type="text" id="txtusuario" name="txtusuario" class="cajas" size="15" maxlength="15" onKeyUp="javascript:this.value=this.value.toUpperCase();"  /><a href="#" id="opcabecera" onClick="disponible();">Comprobar Disponibilidad</a></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Clave</td>
    <td id="formnuevo"><input type="password" id="txtclave" name="txtclave" class="cajas" size="20" maxlength="20" /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Repetir Clave</td>
    <td id="formnuevo"><input type="password" id="txtrepite" name="txtrepite" class="cajas" size="20" maxlength="20" /></td>
</tr>
</table>
<div id="diaponibilidad">

</div>
