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

$sql2="SELECT * FROM proveedor";
$result=pg_query($conexion,$sql2);
?>
<link rel="stylesheet" type="text/css" href="estilo_consultas.css">
   <TABLE BORDER=2 align="center" class="tabla"> 
      <TR><TD align="center">&nbsp;Id&nbsp;</TD><TD align="center">Nombre </TD><TD align="center">Documento</TD><TD align="center"> Dirección</TD><TD align="center">E-mail</TD><TD align="center"> Telefono</TD><TD align="center">&nbsp;RUT&nbsp;</TD></TR> 
 
<?PHP     
	while ($registro=pg_fetch_array($result)) 
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
		echo $id;
		echo "</td>";		
		echo "<td >";
		echo $nombre;
		echo "</td>";
		echo "<td >";
		echo $documento;
		echo "</td>";
		echo "<td >";
		echo $direccion;
		echo "</td>";
		echo "<td >";
		echo $email;
		echo "</td>";
		echo "<td >";
		echo $telefono;
		echo "</td>";
		echo "<td >";
		echo $rut;
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
