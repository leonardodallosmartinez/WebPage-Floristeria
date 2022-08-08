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
$result=pg_query("SELECT *FROM tipoempleado")
?>
<script type="text/javascript" src="validacionform_empleado.js"></script>
<link rel="stylesheet" type="text/css" href="estilo_formularios.css">
<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>		
	
	<form method="post" action="formulario_empleadop.php" onsubmit="return validarFormulario()">
	<table border="3" bordercolor="black" cellpadding="8" cellspacing="" width="100%" height="300" class="tabla" valign="bottom">
		
			<tr class="renglon1">
				<td valign="middle" align="right" width="20%">
					Nombre: 
				</td>
				<td><input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" size="30" onKeyPress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue=false;"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					Documento identidad: 
				</td>
				<td><input id="nid" name="nid" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese su Documento de Identificacion"/></td>				
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Dirección: 
				</td>
				<td><input id="direccion" name="direccion" type="text" placeholder="Ingrese su direccion"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					E-mail: 
				</td>
				<td><input id="email" name="email" type="text" placeholder="Ingrese su e-mail"/></td>
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Telefono: 
				</td>
				<td><input id="tel" name="tel" type="text"  onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese su numero Telefono"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					Salario: 
				</td>
				<td><input id="salario" name="salario" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese el valor del salario mensual"/></td>
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					ARL: 
				</td>
				<td><input id="arl" name="arl" type="text" placeholder="Ingrese su ARL"/></td>
			</tr>
			
			<tr class="renglon2">
				<td valign="middle" align="right">
					Tipo de empleado: 
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
			
			<tr class="renglon1">
				<td valign="middle" align="right">
					RUT: 
				</td>
				<td><input id="rut" name="rut" type="text" placeholder="Ingrese su RUT"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					Fecha de vinculación: 
				</td>
				<td><input id="fechavinc" name="fechavinc" type="text" placeholder="Ingrese su fecha de vinculacion"/></td>
			</tr>
			
		
		</table>
		
		<INPUT TYPE="SUBMIT" VALUE="Enviar" />
		<INPUT TYPE="RESET" VALUE="Limpiar" />
		<BUTTON name="regresar"><a href="pag_form.php">Volver</a>
		</BUTTON>
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