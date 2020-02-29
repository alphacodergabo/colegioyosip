<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$fecha=date("Y-m-d");

?>

<table id="formtablenuevo">
<input type="hidden" id="txtcodigo">
<tr>
    <td colspan="2" id="formccera">CREAR USUARIO</td>
</tr>
<tr id="grid">
    <td id="formnuevo">Apellidos</td>
    <td id="formnuevo"><input type="text" name="txtapellido" id="txtapellido" class="cajas" size="25"  /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Nombres</td>
    <td id="formnuevo"><input  type="text" name="txtnombre" id="txtnombre" class="cajas" size="25" /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Fecha de nacimiento</td>
    <td id="formnuevo"><input  type="date" id="txfechan" name="txtfechan" class="cajas" size="15" maxlength="15"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Dirección</td>
    <td id="formnuevo"><input type="text" id="txtdir" name="txtdir" class="cajas" size="50" maxlength="50" /></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Documento</td>
            <?php            
                $cn=Conectarse();            
                $rslistar="select nConCodigo, cConDescripcion, cConValor from constante where nConClase=4 order by nConcodigo asc";
                $listar=mysqli_query($cn,$rslistar);
            ?>
    <td id="formnuevo">
        <select name="documento" id="documento" class="cajas">
            <?php 
                while ($rslistar=mysqli_fetch_array($listar)){
            ?>
                <option value="<?php echo $rslistar['nConCodigo']; ?>"><?= $rslistar['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtdoc" name="txtdoc" class="cajas" size="15" maxlength="15">
    </td>
</tr>
<tr id="grid">
    <td id="formnuevo">Telefono</td>
            <?php            
                $cn=Conectarse();            
                $rslistar1="select * from constante where nConClase=3";
                $listar1=mysqli_query($cn,$rslistar1);
            ?>
    <td id="formnuevo">
        <select name="documento" id="celu" class="celu">
            <?php 
                while ($rslistar1=mysqli_fetch_array($listar1)){
            ?>
                <option value="<?php echo $rslistar1['nConCodigo']; ?>"><?= $rslistar1['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtcel" name="txtcel" class="cajas" size="15" maxlength="15">
    </td>
</tr>
<tr id="grid">
    <td id="formnuevo">Email</td>
            <?php            
                $cn=Conectarse();            
                $rslistar2="select * from constante where nConClase=1";
                $listar2=mysqli_query($cn,$rslistar2);
            ?>
    <td id="formnuevo">
        <select name="documento" id="mail" class="mail">
            <?php 
                while ($rslistar2=mysqli_fetch_array($listar2)){
            ?>
                <option value="<?php echo $rslistar2['nConCodigo']; ?>"><?= $rslistar2['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtmail" name="txtmal" class="cajas" size="25" maxlength="25">
    </td>
</tr>
<tr>
    <td>

    </td>
</tr>
<tr>
    <td>
        
    </td>
</tr>
<tr id="grid">
        <td colspan="2" align="center">
            <input type="button" class="btn btn-outline-success" name="Register" value="Register" onclick="guardapersona();">
            <input type="button" class="btn btn-outline-warning" name="Consultar" value="Consultar" onclick="actualizaficha()">             
        </td>
</tr>
</table>
<div id="diaponibilidad">

</div>
