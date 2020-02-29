<?php
// Realizo la Conexion de la Base de Datos
include("conexion.php"); 
$cn = Conectarse();
// Recibo la Variable id que ha sido enviado por la pagina anterior
$id=$_POST["id"];
// Creo el RecordSource
$rsevento="select * from eventos where id='$id'";
$evento = mysqli_query($cn, $rsevento); //ejecuto la consulta
$rsevento=mysqli_fetch_array($evento);
echo $rsevento["cuerpo"] ?>
<br><br>
<a href="index.php"  class="menuven"title="Regresar a Pagina Principal">Inicio</a> &nbsp;
<a href="javascript:imprimir();" title="Imprimir" class="menuven">Imprimir</a>