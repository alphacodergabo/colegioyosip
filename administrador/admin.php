<?php
session_start(); 
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../js/funciones.js"></script>
</head>
<body>
<div id="general">
  <div id="campus">
    <div id="cabeceracampus"><div id="logo"></div><div id="datosp"><br /><br /><b>BIENVENIDO:</b> <?php echo $_SESSION['cPerNombre']?><br /><b>USUARIO:</b><?php echo $_SESSION['vusuariof']?><br /><a href="cerrar.php" id="opcabecera">CERRAR SESI&Oacute;N</a></div></div>
    <div id="menucampus"><script>verperfil('2');</script></div>
    <div id="cuerpocampus">
      <div id="menu2campus"><script>vermenu('2');</script></div>
      <div id="contenidocampus">
      <table id="tablecont"><tr><td><div id="contenidotable"></div></td></tr></table>
      </div>
    </div>
  </div>
  <div id="publicidad"></div>
</div>
<div id="abajo"><br />2017 Todos los derechos reservados - <b>TrujilloHosting.Net</b></div>
</body>
</html>
