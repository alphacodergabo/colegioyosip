<?php
// Inicializa de la sesion.
session_start();
// Destruye todas las variables de la sesi&oacute;n
session_unset();
// Finalmente, destruye la sesion
session_destroy();
?>
<html>
<head>
<title>Sistema de Administracion</title>
<link rel="stylesheet" type="text/css" href="css/campus.css">
<script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../js/funciones.js"></script>
</head>
<body>
<div id="principal">
  <div id="cabecera">
    <div id="logo"></div>
    <div id="publicidad"><br />
      <br />
      <br />
      <a href="#" id="opcabecera">Portal Web</a> | <a href="#" id="opcabecera">Correo Corporativo</a> | <a href="#" id="opcabecera">Mapa del Sitio</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </div>
  </div>
  <div id="contenido">
    <div id="letras">
      <table id="tableletras">
        <tr>
          <td>Bienvenidos al<br /><span id="letrastitulo">Administrador Web</span><br /><br />El Campus Virtual muestra información dinámica y acceso a diversos servicios en línea que brinda a los miembros de la comunidad.</td>
        </tr>
        </table>
    </div>
    <div id="botones">
      <div id="linea0"></div>
      <div id="opboton">
        <table id="tableopciones">
        <tr>
          <td>Clientes</td>
        </tr>
        </table>
      </div>
      <div id="linea1"></div>
      <div id="opboton">
      <table id="tableopciones">
        <tr>
          <td>Proveedores</td>
        </tr>
        </table>
      </div>
      <div id="linea1"></div>
      <div id="opboton">
      <table id="tableopciones">
        <tr>
          <td>Procesos</td>
        </tr>
        </table>
      </div>
    </div>
  </div>
  <div id="login">
    <table id="tablelogin">
      <tr>
        <td id="bordeleft"></td>
        <td id="bordecentro">
          <table>
            <tr>
              <td id="servicios">
                <b>Aquí podrás..</b>
                <ul>
                  <li>Actualizar datos</li>
                    <li>Ingresar datos</li>
                    <li>Consultar ...</li>
                    <li>Usuario, roles</li>
                    <li>Y mas..</li>
                </ul>
                </td>
                <td id="flecha"></td>
                <td>
                  <table id="formulario">
                    <tr><td colspan="2"><span id="servicios"><b>Usuarios Registrados</b></span><br /><br /></td></tr>
                    <tr>
                      <td>Usuario:</td>
                        <td><input type="text"  name="usuario" class="cajas" id="usuario" maxlength="15"/></td>
                    </tr>
                    <tr>
                      <td>Clave:</td>
                        <td><input type="password"  name="clave" class="cajas" id="clave" maxlength="15"/></td>
                    </tr>
                    <tr><td colspan="2"><input type="button" id="botonform" value="Ingresar" onclick="verificausuario();" /></td></tr>
                    </table>
                    
                </td>
            </tr>
            </table>
        </td>
        <td id="borderight"></td>
      </tr>
    </table>
  </div>
  <div id="footer"><br />2017 Todos los derechos reservados <br />
  Se Recomienda <strong>Mozilla FireFox</strong> para una mejor visualización
  </div>
</div>
</body>
</html>
