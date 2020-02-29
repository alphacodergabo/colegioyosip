<?php
session_start(); 
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
?>
<table id="formtablenuevo">
	<tr>
        <td colspan="2" id="formcabecera">EDITAR DATOS PERSONA</td>
    </tr>
	<tr id="grid">
    	<td id="formnuevo">Apellidos</td>
        <td id="formnuevo">
        	<input type="text" name="txtapellido" id="txtapellido" class="cajas" size="40">&nbsp;&nbsp;&nbsp;
        </td>
    </tr>
    <tr id="grid">
    	<td id="formnuevo">Nombres</td>
        <td id="formnuevo">
        	<input type="text" name="txtnombres" id="txtnombres" class="cajas" size="40">&nbsp;&nbsp;&nbsp;
        </td>
    </tr>
</table>
<br />