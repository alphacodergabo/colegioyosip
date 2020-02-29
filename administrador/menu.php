<?php
include('conexion.php');
session_start();
$cn = Conectarse();	// 
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$perfil=$_GET["perfil"];
$persona=$_SESSION['nPerCodigo'];
$usuariochat=$_SESSION['vusuariof'];
?>
<?php 
if ($perfil=="2"){
//PERFIL ADMINISTRATIVO
$rsprimernivel="select op.nOpCodigo,op.cOpDescripcion,op.cOpRecurso from opcion op inner join persona_opcion po on op.nOpCodigo=po.nOpCodigo where po.nPerCodigo='$persona' and po.nPerOpEstado=7 and op.nOpEstado=7 and nApCodigo=2 and op.nOpDependencia=0";
$primernivel = mysqli_query($cn, $rsprimernivel);
?>
<H2>ADMINISTRATIVO</H2>
<div>
  <ul id="navmenu">
    <?php while ($rsprimernivel=mysqli_fetch_array($primernivel)) { ?>
    <?php 
		$codigo=$rsprimernivel["nOpCodigo"];
		$rssegundonivel="select op.nOpCodigo,op.cOpDescripcion,op.cOpRecurso from opcion op inner join persona_opcion po on op.nOpCodigo=po.nOpCodigo where po.nPerCodigo='$persona' and po.nPerOpEstado=7 and op.nOpEstado=7 and nApCodigo=2 and op.nOpDependencia='$codigo'";
		$segundonivel = mysqli_query($cn, $rssegundonivel);
	?>
    <li  ><a href="#" onclick="<?php echo $rsprimernivel["cOpRecurso"] ?>"> <img src="imagenes/ico_arrow.png" border="0">  <?php echo $rsprimernivel["cOpDescripcion"] ?></a>
         <ul>
         	<?php while ($rssegundonivel=mysqli_fetch_array($segundonivel)) { ?>
         	<li><a href="#" onclick="<?php echo $rssegundonivel["cOpRecurso"] ?>"> <img src="imagenes/ico_arrow.png" border="0"> <?php echo $rssegundonivel["cOpDescripcion"] ?></a></li>
            <?php } ?>
         </ul>
    </li>
    <?php } ?>
	
  </ul>
  
</div>

<?php } ?>