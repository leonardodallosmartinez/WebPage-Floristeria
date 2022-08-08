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

$sql2="SELECT A.id, A.nombre, A.documento, A.direccion, A.email, A.telefono, A.rut, A.salario, A.arl, C.nombre, A.fechavinculo  
FROM empleado A
INNER JOIN tipoempleado C
ON (A.fk_id_tipoempleado=C.id)";
$result=pg_query($conexion,$sql2);
?>
<link rel="stylesheet" type="text/css" href="estilo_consultas.css">
	<body >
	<TABLE BORDER=2 align="center" class="tabla"> 
      <TR><TD align="center">&nbsp;&nbsp;Id&nbsp;</TD><TD align="center">Nombre </TD><TD align="center">Documento</TD><TD align="center"> Dirección</TD><TD align="center">E-mail</TD><TD align="center"> Telefono</TD><TD align="center">RUT</TD><TD align="center">&nbsp;ARL&nbsp;</TD><TD align="center">&nbsp;Tipo de empleo&nbsp;</TD><TD align="center">&nbsp;Salario&nbsp;</TD><TD align="center">&nbsp;Fecha de vinculación&nbsp;</TD></TR> 

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
		$salario=$registro["7"];
		$arl=$registro["8"];
		$templeo=$registro["9"];
		$fechavinculo=$registro["10"];
		
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
		echo "<td >";
		echo $arl;
		echo "</td>";
		echo "<td >";
		echo $templeo;
		echo "</td>";
		echo "<td >";
		echo $salario;
		echo "</td>";
		echo "<td >";
		echo $fechavinculo;
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
</body> 
</html> 

