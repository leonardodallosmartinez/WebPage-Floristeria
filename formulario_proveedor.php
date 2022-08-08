<?php
include ("encabezado.php");
include ("cabecera_redes.php");
$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();
include ("menus_paginas.php");
hacer_menu();
?>
<script type="text/javascript" src="validacionform_proveedor.js"></script>
<link rel="stylesheet" type="text/css" href="estilo_formularios.css">
<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
	
	<section>
		<form method="post" action="formulario_proveedorp.php" onsubmit="return validarFormulario()">
		<table border="3" bordercolor="black" cellpadding="8" cellspacing="" width="100%" height="300" class="tabla" valign="bottom">
			
			
			<tr class="renglon1">
				<td valign="middle" align="right" width="20%">
					Nombre: 
				</td>
				<td><input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" size="30" onKeyPress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue=false;"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right" width="20%">
					Documento: 
				</td>
				<td><input id="nid" name="nid" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" size="30" placeholder="Ingrese su documento de identidad"/></td>
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
				<td><input id="email" name="email" type="text" placeholder="Ingrese su e-mail" placeholder="Ingrese su email"/></td>
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Telefono: 
				</td>
				<td><input id="tel" name="tel" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese su numero Telefono"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					RUT: 
				</td>
				<td><input id="rut" name="rut" type="text" placeholder="Ingrese el RUT"/></td>				
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