<?php
session_start(); 
if ($_SESSION['vusuariof']==""){
	header("Location: index.php");
}
?>
<table id="formtablenuevo">
	<tr>
        <td colspan="2" id="formcabecera">BUSCAR PERSONA</td>
    </tr>
	<tr id="grid">
    <td id="formnuevo">Ingresar Apellidos</td>
        <td id="formnuevo">
        	<input type="text" name="txtapellido" id="txtapellido" class="cajas" size="40" onkeypress="searchpersonakp();" onKeyUp="javascript:this.value=this.value.toUpperCase();" />&nbsp;&nbsp;&nbsp;
            <input type="button" id="botonform" value="Buscar Persona" onclick="searchpersona();"/>
        </td>
    </tr>
    <tr id="grid">
        <td></td>
        <td>
            <div id="kp">

            </div>
        </td>
    </tr>
</table>
<br />