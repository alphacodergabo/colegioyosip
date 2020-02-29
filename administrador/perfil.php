<?php
include('conexion.php');
session_start();
$cn = Conectarse();	//

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
} 
$persona=$_SESSION['nPerCodigo'];
$activo=$_GET["activo"];

$administrador = mysqli_query($cn, "SELECT op.cOpDescripcion,op.cOpRecurso FROM persona per inner join persona_opcion po on per.nPerCodigo=po.nPerCodigo inner join opcion op on po.nOpCodigo=op.nOpCodigo WHERE per.nPerEstado=7 and op.nOpEstado=7 and po.nPerOpEstado=7 and per.nPerCodigo='$persona'"); 
$resp = mysqli_num_rows($administrador); 

?>
<span id="perfil">Usted tiene acceso a los siguientes perfiles <img src="imagenes/flechaperfil.png" width="14" height="8" />
<?php  if ($resp>0){?> |
    <?php  if ($activo=="2"){ // quiere decir que se le ha dado clic a la opcion?>
             &nbsp;&nbsp;<span id="opcabeceraactiva">ADMINISTRATIVO</span>&nbsp;&nbsp;
    <?php  }else{ ?>
     &nbsp;&nbsp;<a href="#" onclick="vermenu('2');verperfil('2');" id="opcabecera">ADMINISTRADOR</a>&nbsp;&nbsp;
	<?php  } ?>
<?php  } ?>
</span>