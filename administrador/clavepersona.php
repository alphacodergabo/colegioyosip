<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$fecha=date("Y-m-d");
$codigo=$_POST['nPerCodigo'];
$rsclave="SELECT * from persona where nPerCodigo='$codigo'";
$clave=mysqli_query($cn, $rsclave);
$rsclave=mysqli_fetch_array($clave);

$pclasedoc=$rsclave["nConCodigo"];
$pcope=$rsclave["oper"];
$pemail=$rsclave["cemail"];
?>

<table id="formtablenuevo">
<input type="hidden" id="txtcodigo">
<tr>
    <td colspan="2" id="formccera">Modificar usuario</td>
</tr>
<tr id="grid">
    <td id="formnuevo" hidden>ID</td>
    <td id="formnuevo" hidden><input type="text" name="txtid" id="txtid" class="cajas" size="25" value="<?php echo $rsclave['nPerCodigo'] ?>"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Apellidos</td>
    <td id="formnuevo"><input type="text" name="txtapellido" id="txtapellido" class="cajas" size="25" value="<?php echo $rsclave['cPerApellido'] ?>"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Nombres</td>
    <td id="formnuevo"><input  type="text" name="txtnombre" id="txtnombre" class="cajas" size="25" value="<?php echo $rsclave['cPerNombre'] ?>"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Fecha de nacimiento</td>
    <td id="formnuevo"><input  type="date" id="txfechan" name="txtfechan" class="cajas" size="15" maxlength="15" value="<?php echo $rsclave['dPerNacimiento'] ?>"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Dirección</td>
    <td id="formnuevo"><input type="text" id="txtdir" name="txtdir" class="cajas" size="50" maxlength="50" value="<?php echo $rsclave['direccion'] ?>"></td>
</tr>
<tr id="grid">
    <td id="formnuevo">Documento</td>
            <?php            
                $cn=Conectarse();            
                $rslistar="select nConCodigo, cConDescripcion, cConValor from constante where nConClase=4 AND nConCodigo<>'$pclasedoc' order by nConcodigo asc";
                $listar=mysqli_query($cn,$rslistar);
            ?>
            <?php            
                $cn=Conectarse();            
                $rsl1="select nConCodigo, cConDescripcion, cConValor from constante where nConClase=4 AND nConCodigo='$pclasedoc' order by nConcodigo asc";
                $listo=mysqli_query($cn,$rsl1);
                $rsl1=mysqli_fetch_array($listo);
            ?>
    <td id="formnuevo">
        <select name="documento" id="documento" class="cajas">
            <option value="<?php echo $rsl1['nConCodigo'];?>" selected><?= $rsl1['cConDescripcion']?></option>
            <?php 
                while ($rslistar=mysqli_fetch_array($listar)){
            ?>
                <option value="<?php echo $rslistar['nConCodigo']; ?>"><?= $rslistar['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtdoc" name="txtdoc" class="cajas" size="15" maxlength="15" value="<?php echo $rsclave['nrodni'] ?>">
    </td>
</tr>
<tr id="grid">
    <td id="formnuevo">Telefono</td>
            <?php            
                $cn=Conectarse();            
                $rslistar1="select * from constante where nConClase=3 AND nConCodigo<>'$pcope' order by nConcodigo asc";
                $listar1=mysqli_query($cn,$rslistar1);
            ?>
            <?php            
                $cn=Conectarse();            
                $rsl2="select * from constante where nConClase=3 AND nConCodigo='$pcope' order by nConcodigo asc";
                $listo1=mysqli_query($cn,$rsl2);
                $rsl2=mysqli_fetch_array($listo1);
            ?>
    <td id="formnuevo">
        <select name="documento" id="celu" class="celu">
            <option value="<?php echo $rsl2['nConCodigo'];?>" selected><?= $rsl2['cConDescripcion']?></option>
            <?php 
                while ($rslistar1=mysqli_fetch_array($listar1)){
            ?>
                <option value="<?php echo $rslistar1['nConCodigo']; ?>"><?= $rslistar1['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtcel" name="txtcel" class="cajas" size="15" maxlength="15" value="<?php echo $rsclave['nrotelefono'] ?>">
    </td>
</tr>
<tr id="grid">
    <td id="formnuevo">Email</td>
            <?php            
                $cn=Conectarse();            
                $rslistar2="select * from constante where nConClase=1 AND nConCodigo<>'$pemail' order by nConcodigo asc";
                $listar2=mysqli_query($cn,$rslistar2);
            ?>
            <?php            
                $cn=Conectarse();            
                $rsl3="select * from constante where nConClase=1 AND nConCodigo='$pemail' order by nConcodigo asc";
                $listo2=mysqli_query($cn,$rsl3);
                $rsl3=mysqli_fetch_array($listo2);
            ?>
    <td id="formnuevo">
        <select name="documento" id="mail" class="mail">
            <option value="<?php echo $rsl3['nConCodigo'];?>" selected><?= $rsl3['cConDescripcion']?></option>
            <?php 
                while ($rslistar2=mysqli_fetch_array($listar2)){
            ?>
                <option value="<?php echo $rslistar2['nConCodigo']; ?>"><?= $rslistar2['cConDescripcion']?></option>
                <?php } ?>
        </select>
        <input  type="text" id="txtmail" name="txtmal" class="cajas" size="25" maxlength="25" value="<?php echo $rsclave['mail'] ?>">
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
            <input type="button" class="btn btn-outline-success" name="Actualizar" value="Actualizar" onclick="actualizapersona();">
            <input type="button" class="btn btn-outline-warning" name="Cancelar" value="Cancelar" onclick="cancelar()">             
        </td>
</tr>
</table>

</div>
