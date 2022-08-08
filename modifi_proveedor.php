<link rel="stylesheet" type="text/css" href="estilo_elimin_modif.css">
<?PHP
ini_set('display_errors', 'On');
ini_set('display_errors', 1);

include ("encabezado.php");
include ("cabecera_redes.php");
include ("conexion.php");

hacer_cabecera();
include ("menus_paginas.php");
hacer_menu();

extract($_POST);
 
$conexion=conectarse(); 
	
		$sql="SELECT * FROM proveedor
				WHERE documento='".$documento."'";
				$result1 = pg_query($conexion,$sql);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{						
									
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PROVEEDOR </TITLE>";
							?>
							<form name="form_modif" method="post" action="modificar_proveedorp.php">
							<TABLE BORDER=2 align="center" class="tabla"> 
							<TR><TD align="center">&nbsp;Id&nbsp;</TD><TD align="center">Nombre </TD><TD align="center">Documento</TD><TD align="center"> Dirección</TD><TD align="center">E-mail</TD><TD align="center"> Telefono</TD><TD align="center">&nbsp;RUT&nbsp;</TD></TR> 
 
							<?PHP
							
							
							if  ($registro = pg_fetch_array($result1))		
									{
									$id=$registro["0"];			
									$nombre=$registro["1"];
									$documento=$registro["2"];
									$direccion=$registro["3"];
									$email=$registro["4"];
									$telefono=$registro["5"];
									$rut=$registro["6"];
									
									echo "<tr>";
									echo "<td >";
									echo "<input type='text' name='id' disabled='disabled' value=".$id." >";
									echo "</td>";		
									echo "<td >";
									echo "<input type='text' name='nombre' value=".$nombre." onKeyPress='if (event.keyCode > 45 && event.keyCode < 57) event.returnValue=false;'>";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='documento' value=".$documento." onkeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;' >";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='direccion' value=".$direccion." >";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='email' value=".$email." >";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='telefono' value=".$telefono." onkeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;'>";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='rut' value=".$rut." >";
									echo "</td>";		
									echo "</tr>";	 
									} 
									pg_free_result($result1); 
									pg_close($conexion); 
								echo "</table>";
								$dato_eliminacion1="proveedor";
								$dato_eliminacion2="documento";
								echo "<input  type='hidden'  name='datomod1'  value=".$dato_eliminacion1.">";
								echo "<input  type='hidden'  name='id'  value=".$id.">";
								
								echo "<table width='70%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								echo "<input type='submit' value='Actualizar informacion'>";
								echo "</form>";
								echo "</td>";
								echo "<td align='center' >";
								?>
								<FORM ACTION='eliminar.php' METHOD='POST'>
								<input  type="hidden"  name="datoe1"  value=<?PHP echo $dato_eliminacion1;?> >
								<input  type="hidden"  name="datoe2"  value=<?PHP echo $dato_eliminacion2;?> >
							    <input  type="hidden"  name="datoe3"  value=<?PHP echo $documento;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Eliminar' />";
								echo "</td>";
								echo "</FORM>";	
								
								echo "<td align='center' >";
								echo "<FORM ACTION='menu_modifi_proveedor.php' METHOD='POST'>";
								echo "<INPUT TYPE='submit' VALUE='Retornar'/>";
								echo "</td>";
								echo "</tr>";
								echo "</table>";
								echo "</FORM>";	
								echo "</BODY>";
								echo "</html>";
								}
					else 
					{
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL ESTUDIANTE </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='menu_elimina_proveedor.php' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE CLIENTE PARA ESTE DOCUMENTO:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>