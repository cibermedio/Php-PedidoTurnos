<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting"><!-- InstanceBegin template="/Templates/principal.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Crear Contacto</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" style="color:#3CC; background-color:#000"/>
<style type="text/css" title=".manso">
<!--
body {
	background-color: #000;
	font-family: Comic Sans MS, cursive;
	font-size: 24px;
	color: #0CC;
	font-weight: bold;
}
.colorin {
	background-color:#333;
	color:#3CC
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:16px;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="167" height="170"><img src="/images/logo.jpg" width="167" height="170" alt="" /></td>
    <td width="82%">La mansa pagina! Version 1.2</td>
  </tr>
  <tr>
    <td height="100%" width="167" valign="top"><ul id="MenuBar1" class="MenuBarVertical">
      <li><a href="index.php">Inicio</a>        </li>
      <li><a class="menubaritemsubmenu" href="#">Crear un </a>        
        <ul>
        <li><a href="crea-cont.php">Contacto</a></li>
        <li><a href="crea-grup.php">Grupo</a></li>
        </ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">Contactos</a>
        <ul>
          <li><a href="todos.php">Mostrar todos</a></li>
          <li><a href="buscar.php">Buscar</a></li>
          <li><a href="filtro.php">Filtrar</a></li>
        </ul>
        </li>
       <li><a class="MenuBarItemSubmenu" href="#">Otros</a>
        <ul>
          <li><a href="cumples.php">Cumpleaños</a></li>
        </ul>
      </li>
      </ul>
      </td>
    <td valign="top"><!-- InstanceBeginEditable name="Show" -->
      <form id="form1" name="form1" method="post" action="insertar.php">
        <table width="95%" border="1">
          <tr>
            <td width="18%">Nombre</td>
            <td width="82%">
              <input type="text" name="nombre" id="nombre" />
            </td>
          </tr>
          <tr>
            <td>Apellido</td>
            <td><input type="text" name="apellido" id="apellido" /></td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td> <input type="text" name="telefono" id="telefono" />
            </td>
          </tr>
          <tr>
            <td>Celular</td>
            <td>
              <input type="text" name="celular" id="celular" />
            </td>
          </tr>
          <tr>
            <td>Fecha de Nacimiento</td>
            <td>
            <select name="dia">          
              <?php 
			  for ($dia=1 ; $dia <=31 ; $dia ++ ){
				  echo '<option value = '.$dia.'> '.$dia.'</option>';
			  }
			  ?> 
              </select> -
              <select name ="mes">
                <?php 
			  for ($mes=1 ; $mes <=12 ; $mes ++ ){
				  echo '<option value = '.$mes.'> '.$mes.'</option>';
			  }
			  ?>
              </select> - 
          <select name="anio">
          <?php 
			  for ($anio=1950 ; $anio <=2011 ; $anio ++ ){
				  echo '<option value = '.$anio.'> '.$anio.'</option>';
			  }
			  ?> 
      </select>
    </td>
          </tr>
          <tr>
            <td>Grupo</td>
            <td>
            <select name= "grupo">
            <option value="1"> Amigos </option>
            <option value="2"> Conocidos </option>
            <option value="3"> Familia </option>
            <option value="4"> Facu </option>
            </select>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="enviar" id="enviar" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" name="reset" id="reset"/></td>
          </tr>
        </table>
            </form>
            
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <!-- InstanceEndEditable --></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">Por ®RotseN-Shelvak® - 2011</td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
<!-- InstanceEnd --></html>