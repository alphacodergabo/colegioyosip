<!-- Manual de PHP --> 
<html> 
<head> 
<title>Ejemplo de PHP</title> 
<!-- Llamo al archivo estilo.css -->
<link rel="stylesheet" type="text/css" href="estilo.css">
<script type="text/javascript" src="../js/funciones.js"></script>  
<!-- Scrip para Imprimir el contenido de una Pagina -->
<SCRIPT LANGUAGE="JavaScript">
  function imprimir() {
    version = parseInt(navigator.appVersion);
    if (version >= 4)
      window.print();
  }
</SCRIPT>
</head> 
<body> 
<?php
	include("conexion.php"); 
	$cn = Conectarse();
	
	$rsnoticia="select * from noticia order by id desc";
	$noticia = mysqli_query($cn,$rsnoticia); ///ejecuto la consulta 
?>
<table width="320">
<?php
	$i=1;
	while ($rsnoticia=mysqli_fetch_array($noticia)) {
?>
	<tr>
		<td width="111" valign="top">
		<div align="center">
			<img src="img/<?php echo $rsnoticia["imagen"] ?>" width="58" height="58" align="top">
		</div>
		</td>
		<td width="260"><b><?php echo $rsnoticia["titulo"] ?></b> </td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="pres" id="detalle<?php echo $i ?>">
				<?php echo substr($rsnoticia["cuerpo"],0,50) ?>
				<a href="#" onclick="verdetallenot(<?php echo $rsnoticia['id']?>,<?php echo $i ?>);" title="Ver en detalle <?php echo $rsnoticia["id"] ?>"><img src="img/flecha.gif" border="0"></a>
			</div>
		</td>
	</tr>
	<tr height="1" bgcolor="#000033"><td colspan="2"></td></tr>
<?php 
$i=$i+1;
} ?>
</table>
<script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
</body>
</html>