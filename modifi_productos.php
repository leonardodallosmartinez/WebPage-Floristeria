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
$result=pg_query("SELECT *FROM color"); 
	
		$sql="SELECT A.id, A.nombre, A.descripcion, A.preciounidad, A.unidadesdisp, C.nombre  
				FROM productos A
				INNER JOIN color C
				ON (A.fk_id_color=C.id)
				WHERE A.id='".$id."'";
				$result1 = pg_query($conexion,$sql);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{						
									
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PRODUCTO</TITLE>";
							?>
							 <form name="form_modif" method="post" action="modificar_productosp.php">
							 <TABLE BORDER=2 align="center" class="tabla"> 
							 <TR><TD align="center">ID </TD><TD align="center">Nombre </TD><TD align="center"> Descripcion</TD><TD align="center">Precio unidad</TD><TD align="center">Unidades disponibles</TD><TD align="center">&nbsp;Color&nbsp;</TD></TR> 
						 
							<?PHP
							
							
							if  ($registro = pg_fetch_array($result1))		
									{
									$id=$registro["0"];			
									$nombre=$registro["1"];
									$descripcion=$registro["2"];
									$preciounidad=$registro["3"];
									$unidadesdisp=$registro["4"];
									$color=$registro["5"];
									$id_ini=$id;
									
											
									echo "<tr>";
									echo "<td >";
									echo "<input type='text' name='id' disabled='disabled' value=".$id." >";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='nombre' value=".$nombre." >";
									echo "</td>";
									echo "<td >";
									echo "<textarea type='text' name='descripcion' value=".$descripcion." ></textarea>";;
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='preciounidad' value=".$preciounidad." onkeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;'>";
									echo "</td>";
									echo "<td >";
									echo "<input type='text' name='unidadesdisp' value=".$unidadesdisp." onkeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;'>";
									echo "</td>";									
									echo "<td><SELECT id='combo' name='color'>";
				
									while($row = pg_fetch_array($result)) {
									$id = $row["id"] ; 
									$nombre = $row["nombre"]; 
									echo "<option value=".$id.">".$id." - ".$nombre."</option>"; 
									};
				
								echo "</SELECT>";
								echo "</td>";
									echo "</tr>";	 
									}
									pg_free_result($result1); 
									pg_close($conexion); 
								echo "</table>";
								$dato_eliminacion1="productos";
								$dato_eliminacion2="id";
								echo "<input  type='hidden'  name='datomod1'  value=".$dato_eliminacion1.">";
								echo "<input  type='hidden'  name='id'  value=".$id_ini.">";
								
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
							    <input  type="hidden"  name="datoe3"  value=<?PHP echo $id_ini;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Eliminar' />";
								echo "</td>";
								echo "</FORM>";	
								
								echo "<td align='center' >";
								echo "<FORM ACTION='menu_modi_productos.php' METHOD='POST'>";
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
							echo "<FORM ACTION='menu_modi_productos.php' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE PRODUCTO PARA ESTE NUMERO ID:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>