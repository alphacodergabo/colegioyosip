<!-- Manual de PHP --> 
<html> 
<head> 
   <title>Ejemplo de PHP</title> 
<script type="text/javascript" src="funciones.js"></script>   
<link rel="stylesheet" type="text/css" href="estilo.css">
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
//Record source que muestra la noticia principal
$rsnoti="select * from noticia where principal=1 limit 1";
$noti = mysqli_query($cn,$rsnoti); ///ejecuto la consulta
$rsnoti=mysqli_fetch_array($noti);
//Record source que muestra las demas noticias(secundarias)
$rsnoticia="select * from noticia where principal=0 order by id desc limit 2";
$noticia = mysqli_query($cn,$rsnoticia); ///ejecuto la consulta 
?>
<table width="320">
<tr>
	<td width="111" valign="top"><div align="center"><img src="img/<?php echo $rsnoti["imagen"] ?>" width="58" height="58" align="top"></div></td>
	<td width="260" class="titulomenu"><b><?php echo $rsnoti["titulo"] ?></b> </td>
</tr>
<tr>
	<td colspan="2">
	<div class="pres" id="detallep">
	<?php echo substr($rsnoti["cuerpo"],0,50) ?>
	<a href="#" onclick="verdetallenot1(<?php echo $rsnoti['id']?>,'0');" title="Ver en detalle <?php echo $rsnoti["id"] ?>"><img src="img/flecha.gif" border="0"></a>
	</div>
	</td>
</tr>
<tr height="1" bgcolor="#000033"><td colspan="2"></td></tr>
<?php	// Empieza el while para mostrar las noticias secundarias
	$i=1; // variable para concatenar con el nombre del div
	while ($rsnoticia=mysqli_fetch_array($noticia)) {?>
<tr>
	<td width="260" colspan="2" class="titulomenu"><b><?php echo $rsnoticia["titulo"] ?></b> </td>
</tr>
<tr>
	<td colspan="2" class="pres">
	<div id="detallep<?php echo $i ?>">
	<?php echo substr($rsnoticia["cuerpo"],0,70) ?>
	<a href="#" onclick="verdetallenot1(<?php echo $rsnoticia['id']?>,<?php echo $i ?>);" title="Ver en detalle <?php echo $rsnoticia["id"] ?>"><img src="img/flecha.gif" border="0"></a>
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
