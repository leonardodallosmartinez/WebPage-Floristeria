
<html lang="es"> 
<?php
include ("cabecera_redes.php");
include ("conexion.php");


// include ("encabezado.php");

// $titulo="Optimun Flower Colombia";
// hacer_encabezado($titulo);
hacer_cabecera();
include ("menus_paginas.php");
hacer_menu();

$conexion=conectarse();
$result=pg_query("SELECT *FROM ciudad")
?>
<head>
<meta charset="UTF-8">
<title>Optimun Flower Colombia</title>
<link rel="stylesheet" type="text/css" href="estilo_formularios.css">

<script type="text/javascript" src="validacionform_cliente.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>


<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
		
	<section>
		<form name="formulario" method="post" action="formulario_clientep.php" onsubmit="return validarFormulario()">
		<table border="3" bordercolor="black" cellpadding="8" cellspacing="" width="100%" height="300" valign="bottom" class="tabla">
		
			<tr class="renglon1">
				<td  valign="middle" align="right" width="20%">
					Nombre: 
				</td>
				<td><input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" size="30" onKeyPress="if (event.keyCode > 45 && event.keyCode < 57) event.returnValue=false;"/></td>
			</tr>
			<tr class="renglon2">
				<td valign="middle" align="right">
					Documento identidad: 
				</td>
				<td><input id="Nid" type="text" name="Nid"  onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;" placeholder="Ingrese su Documento de Identificacion"/></td>				
			</tr>
			<tr class="renglon1">
				<td valign="middle" align="right">
					Dirección: 
				</td>
				<td><input id="direccion" name="Direccion" type="text" placeholder="Ingrese su direccion"/></td>
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
					RUT: 
				</td>
				<td><input id="rut" name="rut" type="text" placeholder="Ingrese su RUT"/></td>
			</tr>
			
			
			<tr class="renglon1">
				<td valign="middle" align="right">
					Ciudad: 
				</td>
				<td><SELECT id="ciudad" name="combo">
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
		<INPUT TYPE="SUBMIT" VALUE="Enviar"  />
		<INPUT TYPE="RESET" VALUE="Limpiar" />
		<BUTTON name="regresar"><a href="pag_form.php"  >Volver</a>
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