<?php
	// Realizo la Conexion de la Base de Datos
	include("conexion.php"); 
	$cn = Conectarse();
	// Recibo la Variable id que ha sido enviado por la pagina anterior
	$id=$_POST["id"];
	// Creo el RecordSource
	$rsnoticia="select * from noticia where id='$id'";
	$noticia = mysqli_query($cn,$rsnoticia); //ejecuto la consulta
	$rsnoticia=mysqli_fetch_array($noticia);
?>	
<?php echo $rsnoticia["cuerpo"] ?></div>
<tr height="5"><td></td></tr>
<tr height="1"><td bgcolor="#CCCCCC" colspan="2"></td></tr>
<tr height="5"><td></td></tr>
<tr>
	<td align="center" colspan="2">
	<div><a href="noti03.php"  class="menuven"title="Regresar a Pagina Principal">Inicio</a> &nbsp;
	<a href="javascript:imprimir();" title="Imprimir" class="menuven">Imprimir</a></div>
	</td>
</tr>