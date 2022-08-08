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

$sql2="SELECT * FROM insumos";
$result=pg_query($conexion,$sql2);
?>
<link rel="stylesheet" type="text/css" href="estilo_consultas.css">
   <TABLE BORDER=2 align="center" class="tabla"> 
      <TR><TD align="center">&nbsp;Id&nbsp;</TD><TD align="center">Nombre </TD><TD align="center">&nbsp; Descripcion&nbsp;</TD><TD align="center">&nbsp;Precio unidad&nbsp;</TD></TR> 
 
<?PHP     
	while ($registro=pg_fetch_array($result)) 
		{
		$id=$registro["0"];			
		$nombre=$registro["1"];
		$descripcion=$registro["2"];
		$preciounidad=$registro["3"];	
				
		
		
		echo "<tr>";
		echo "<td >";
		echo $id;
		echo "</td>";
		echo "<td >";
		echo $nombre;
		echo "</td>";		
		echo "<td >";
		echo $descripcion;
		echo "</td>";
		echo "<td >";
		echo $preciounidad;
		echo "</td>";		
		
		echo "</tr>";	 
		}   
  pg_free_result($result); 
  pg_close($conexion); 
?> 
</table> 
<br><br><br>
<p align="center"><BUTTON name="regresar"><a href="pag_form.php">Volver</a></p>
</body> 
</html> 

