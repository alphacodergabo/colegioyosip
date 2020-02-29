<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$fecha=date("Y-m-d");
$codigo=$_POST['txtusuario'];
$rsclave="SELECT count(*) as total FROM usuario where cPerUsuCodigo='$codigo'";
$clave=mysqli_query($cn, $rsclave);
$rsclave=mysqli_fetch_array($clave);
$total=$rsclave["total"];
if ($total==0){
?>
<input type="button" id="botonform" value="Crear Usuario" onclick="guardausuario();"/>
<?php }else{?>
<span id="obligatorio">El Usuario ingresado ya est&aacute; siendo utilizado por otra persona</span>
<?php }?>