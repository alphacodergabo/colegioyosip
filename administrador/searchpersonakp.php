<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	

if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
$apellido=$_POST["apellido"]; 
$rslistacorreo="SELECT per.nPerCodigo,per.cPerApellido,per.cPerNombre FROM persona per WHERE per.cPerApellido LIKE  '%$apellido%' and per.nPerEstado=7 order by per.cPerApellido";
$listarcorreo = mysqli_query($cn, $rslistacorreo);

	while ($rslistacorreo=mysqli_fetch_array($listarcorreo)) { ?>
	<script>verperfil('2');</script>
	
    <a href="#" onClick="editarpersona('<?php echo $rslistacorreo["nPerCodigo"]?>')"; ><?=strtoupper($rslistacorreo["cPerApellido"]);?></a><br>
    
        
		
    
  <?php  } ?>
