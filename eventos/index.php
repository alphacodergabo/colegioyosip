<!-- Manual de PHP --> 
<html> 
<head> 
   <title>Ejemplo de PHP</title> 
<script type="text/javascript" src="../js/funciones.js"></script>   
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
//Record source que muestroa el evento principal
$rsevento="select * from eventos where principal=1 and mostrar=1 limit 1";
$evento = mysqli_query($cn, $rsevento); ///ejecuto la consulta
$rsevento=mysqli_fetch_array($evento);

//Record source que muestra los demas eventos(secundarias)
$rsevento1="select * from eventos where principal=0 and mostrar=1 order by id desc";
$evento1 = mysqli_query($cn, $rsevento1); ///ejecuto la consulta 
?>
<table width="500" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td valign="top">
		<table width="100%" cellspacing="2" cellpadding="2" border="0">
			<tr>
				<td colspan="2" class="titulomenu">EVENTO PRINCIPAL</td>
			</tr>
			<tr>
				<td width="111" valign="top"><div align="center"><img src="../administrador/eventos/subidos/<?php echo $rsevento["imagen"] ?>" width="58" height="58" align="top"></div></td>
				<td width="260" valign="top" class="titulonoticia"><b><?php echo $rsevento["titulo"] ?></b> </td>
			</tr>
			<tr>
				<td colspan="2" class="pres">
				<div align="justify" id="detallep">
				<?php echo substr($rsevento["cuerpo"],0,50) ?>
				<a href="#" onclick="verdetalle(<?php echo $rsevento['id']?>,'0');" title="Ver en detalle <?php echo $rsevento["id"] ?>"><img src="../administrador/eventos/subidos/flecha.gif" border="0"></a>
				</div>
			  </td>
			</tr>
			<tr height="1" bgcolor="#000033"><td colspan="2"></td></tr>			
	  </table>
	</td>
	<td valign="top">
		<table width="100%" cellpadding="2" cellspacing="2" border="0">
			<tr>
				<td class="titulomenu1">EVENTOS SECUNDARIOS</td>
			</tr>
			<?php	// Empieza el while para mostrar los eventos secundarias
				$i=1;
				while ($rsevento1=mysqli_fetch_array($evento1)) {?>
			<tr>
				<td width="260" colspan="2" class="titulonoticia"><b><?php echo $rsevento1["titulo"] ?></b> </td>
			</tr>
			<tr>
				<td colspan="2" class="pres">
				<div align="justify" id="detallep<?php echo $i ?>">
				<?php echo substr($rsevento1["cuerpo"],0,70) ?>
				<a href="#" onclick="verdetalle(<?php echo $rsevento1['id']?>,<?php echo $i ?>);" title="Ver en detalle <?php echo $rsevento1["id"] ?>"><img src="../administrador/eventos/subidos/flecha.gif" border="0"></a>
				</div>
			  </td>
			</tr>
			<tr height="1" bgcolor="#000033"><td colspan="2"></td></tr>
			<?php 
			$i=$i+1;
			} ?>		
	  </table>
	</td>
</tr>
</table>
<script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
</body>
</html>
