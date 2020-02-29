<?php
include('conexion.php');
session_start(); 
$cn = Conectarse();	
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
?>
<h2>Mantenimiento > Persona</h2>
<hr />
<div>
    <table>
        <tr>
            <td><img src="imagenes/carga.gif" width="10" height="10" /> <a href="#" id="opcabecera" onClick="nuevapersona();">Buscar Persona</a></td>
            
            <td><p>|</p></td>
            <td><img src="imagenes/carga.gif" width="10" height="10" /> <a href="#" id="opcabecera" onClick="regpersona();">Ingresar Persona</a></td>
        </tr>
    </table>
<div>
<br /><br />
<div id="buscarpersona">
</div><script>nuevapersona();</script>