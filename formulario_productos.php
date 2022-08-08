<html lang="es"> 
<?php
include ("encabezado.php");
include ("cabecera_redes.php");
include ("conexion.php");

$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();
include ("menus_paginas.php");
hacer_menu();
$conexion=conectarse();
$result=pg_query("SELECT *FROM color")
?>
<script type="text/javascript" src="validacionform_productos.js"></script>
<link rel="stylesheet" type="text/css" href="estilo_formularios.css">
<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>		
	<section>
	<form method="post" action="formulario_productosp.php" onsubmit="return validarFormulario()">
		<table border="3" bordercolor="black" cellpadding="8" cellspacing="" width="100%" height="300" class="tabla" valign="bottom">
		
			
			<tr class="renglon1">
				<td valign="middle" align="right" width="20%">
					Nombre: 
				</td>
				<td><input id="nombre" name="nombre" type="text" placeholder="Ingrese nombre del producto" size="30"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					Descripcion: 
				</td>
				<td><textarea id="descripcion" name="descripcion" type="text" placeholder="Ingrese su direccion" rows="2" cols="30"></textarea></td>
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Precio de unidad: 
				</td>
				<td><input id="precio_unid" name="precio_unid" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese nel precio de la unidad"/></td>				
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right" width="20%">
					Unidades disponibles: 
				</td>
				<td><input id="u_disp" name="u_disp" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" size="5" placeholder="Ingresenumero de unidades disponibles"/></td>
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Color: 
				</td>
				<td><SELECT id="combo" name="combo">
				<?PHP
					while($row = pg_fetch_array($result)) {
					$id = $row["id"] ; 
					$nombre = $row["nombre"]; 
					echo "<option value=".$id.">".$id." - ".$nombre."</option>"; 
					}
				?>
				</SELECT>
				</td>
			</tr>
			
							
		
		</table>
		<INPUT TYPE="SUBMIT" VALUE="Enviar" />
		<INPUT TYPE="RESET" VALUE="Limpiar" />
		<BUTTON name="regresar"><a href="pag_form.php">Volver</a>
		</form>
				
	</section>
	
	
	<aside>
		
	</aside>
	
	<footer>
	<h2><b>Realizado por</b></h1>
	Leonardo Hernando Dallos Martínez - Cod:2090041
		
	</footer>
</body>
</html>