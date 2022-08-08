
<html lang="es"> 
<?php 		
				if (isset($_GET["errorusuario"])=="si")
					{
				?> 
					<h1 align="right" style="color:white;font-size:20; margin:8px"><b>Datos erroneos-inicie sesion correctamente</b></h1> 
				<?php
					}
					else
					{
				?> 
					<h1 align="right" style="color:white;font-size:20; margin:8px"><b>Introduca sus datos de acceso</b></h1> 
				<?php 
					}
				?>
<?php
include ("encabezado.php");
include ("cabecera_redes.php");
$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();
?>

<link rel="STYLESHEET" type="text/css" href="estilo_pagform.css">

<form name="formulario_sesion" method="POST" action="iniciar_sesion.php">
<table border="3" bordercolor="black" style="background-color:#4a7786;border-radius: 10px;margin: 22px; color:white" align="">
<th>Iniciar sesion</th>
<tr>
<td>Cedula</td><td><input name="cedula" type="text" size="30%" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;"/></td>
</tr>
<tr>
<td>Contraseña</td><td><input name="clave" type="password" size="30%" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue=false;"/></td>
</tr>
</table>
<input type="SUBMIT" value="Entrar" style="color: black;border-radius:5px;cursor: pointer;margin: 22px;border: 2px solid green;border-radius: 5px; width=20%">
</form>

<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
	
	<section>
		<div class="imagenes1" style="display:flex;">
			<div class="subimagenes1">
			<img src="vivero_rosas_1.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes1">
			<img src="vivero_rosas_2.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes1">
			<img src="vivero_rosas_1.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>		
		</div>

		<div class="imagenes2" style="display:flex;">
			<div class="subimagenes2">
			<img src="vivero_rosas_1.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes2">
			<img src="vivero_rosas_2.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes2">
			<img src="vivero_rosas_1.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>		
		</div>	
		
		<div class="mision">
			<div class="submision1">
			<dl><dt class="subtitulo">Misión</dt>
			</br><dd>Ofrecer a los clientes una atención profesional con responsabilidad, amabilidad y honestidad una gran variedad de productos florales para abastecimiento y diversos diseños de arreglos florales; todo esto en cumplimiento con los más altos estándares de calidad y en compromiso con el medio ambiente haciendo así correcto de los recursos naturales satisfaciendo las respectivas solicitudes del cliente.
			</dd></dl>
			</div>
			<div class="submision2">
			<dl><dt class="subtitulo">Vision</dt>
			</br><dd>Ser una florería situada en el ámbito competitivo en cuanto a abastecimiento floral y diseño de arreglos florales tanto a nivel nacional como internacional siendo reconocida por su experiencia y calidad de productos. Mantener innovación y eficiencia constante fortaleciendo los estándares de calidad.
			</dd></dl>
			</div>
			<div class="submision3">
			<dl><dt class="subtitulo">Objetivos</dt>
			</br><dd>
				<ul>
					<li><b style="font-size:35">1.</b> Abastecer de flores (principalmente rosas) al cliente de acuerdo a las demandas de este sin importar su ubicación.</li></br>
					<li><b style="font-size:35">2.</b> Ofrecer distintos arreglos florales para todo tipo de evento y ocasión.</li></br>
					<li><b style="font-size:35">3.</b> Dar a conocer la empresa en el ámbito competitivo.</li></br>
					<li><b style="font-size:35">4.</b> Aprovechar los avances logísticos y estratégicos para cada día brindar un mejor servicio.</li></br>
				</ul>
			</dd></dl>
			</div>
		</div>	
			
	</section>	
	<aside >
		
	</aside>
	
	<footer id="feed">
	</br></br></br></br></br></br>
	<h2><b>Realizado por</b></h1>
	Leonardo Hernando Dallos Martínez - Cod:2090041
		
	</footer>
</body>
</html>