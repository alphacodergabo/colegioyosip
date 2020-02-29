<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$randomnumber=$_POST["randomnumber"];
$nPerCodigo=$_POST["nPerCodigo"];

$rsopcion="select nOpCodigo,cOpDescripcion from opcion where nOpDependencia=0";
$opcion = mysqli_query($cn, $rsopcion);
?>

<ul>
  <?php 
while ($rsopcion=mysqli_fetch_array($opcion)) { 
$nOpCodigo=$rsopcion["nOpCodigo"];

$rsverifica="select count(*) as total from persona_opcion where nOpCodigo='$nOpCodigo' and nPerCodigo='$nPerCodigo'";
$verifica = mysqli_query($cn, $rsverifica);
$rsverifica=mysqli_fetch_array($verifica);
$totalverifica=$rsverifica["total"];
?>
<li>
<?php if ($totalverifica==0){
?>
	<input type="checkbox" class="opciones" name="cboopcion" id="cboopcion" value="<?php echo ($rsopcion["nOpCodigo"]) ?>"> <?php echo ($rsopcion["cOpDescripcion"]) ?>
<?php }else{ ?>
	<input type="checkbox" class="opciones"  name="cboopcion" id="cboopcion" value="<?php echo ($rsopcion["nOpCodigo"]) ?>" checked="checked"> <?php echo ($rsopcion["cOpDescripcion"]) ?>
<?php } ?>
  
    
    <?php
$rsopcion1="select nOpCodigo,cOpDescripcion from opcion where nOpDependencia='$nOpCodigo'";
$opcion1 = mysqli_query($cn, $rsopcion1);
?>
    <ul>
      <?php 
	while ($rsopcion1=mysqli_fetch_array($opcion1)) { 
	$nOpCodigo1=$rsopcion1["nOpCodigo"];

	$rsverifica1="select count(*) as total from persona_opcion where nOpCodigo='$nOpCodigo1' and nPerCodigo='$nPerCodigo'";
	$verifica1 = mysqli_query($cn, $rsverifica1);
	$rsverifica1=mysqli_fetch_array($verifica1);
	$totalverifica1=$rsverifica1["total"];
	?>
      <li>
        <?php if ($totalverifica1==0){
?>
		<input type="checkbox" class="opciones"  name="cboopcion" id="cboopcion" value="<?php echo ($rsopcion1["nOpCodigo"]) ?>"> <?php echo ($rsopcion1["cOpDescripcion"]) ?>
		<?php }else{ ?>
			<input type="checkbox" class="opciones"  name="cboopcion" id="cboopcion" value="<?php echo ($rsopcion1["nOpCodigo"]) ?>" checked="checked"> <?php echo ($rsopcion1["cOpDescripcion"]) ?>
		<?php } ?>
        <?php } ?>
    </ul>
  </li>
  <?php } ?>
</ul>
<input type="button" id="botonform" value="Guardar Permisos" onclick="insertarpermisos('<?php echo $nPerCodigo?>');"/>
