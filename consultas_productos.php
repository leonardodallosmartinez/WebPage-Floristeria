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

$sql2="SELECT A.id, A.nombre, A.descripcion, A.preciounidad, A.unidadesdisp, C.nombre  
FROM productos A
INNER JOIN color C
ON (A.fk_id_color=C.id)";
$result=pg_query($conexion,$sql2);
?><link rel="stylesheet" type="text/css" href="estilo_consultas.css">
   <TABLE BORDER=2 align="center" class="tabla"> 
      <TR><TD align="center">Id </TD><TD align="center">Nombre </TD><TD align="center"> Descripcion</TD><TD align="center">Precio unidad</TD><TD align="center">Unidades disponibles</TD><TD align="center">&nbsp;Color&nbsp;</TD></TR> 
 
<?PHP     
	while ($registro=pg_fetch_array($result)) 
		{
		$id=$registro["0"];			
		$nombre=$registro["1"];
		$descripcion=$registro["2"];
		$preciounidad=$registro["3"];
		$unidadesdisp=$registro["4"];
		$color=$registro["5"];		
		
				
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
		echo "<td >";
		echo $unidadesdisp;
		echo "</td>";		
		echo "<td >";
		echo $color;
		echo "</td>";		
		echo "</tr>";	 
		}   
  pg_free_result($result); 
  pg_close($conexion); 
?> 
</table> 
</body>
<br><br><br>
<p align="center"><BUTTON name="regresar"><a href="pag_form.php">Volver</a></p> 
</html> 