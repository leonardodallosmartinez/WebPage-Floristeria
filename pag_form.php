
<html lang="es"> 

<?php
 
include ("encabezado.php");
include ("cabecera_redes.php");

$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();

session_start();


?>
<script>
				function TiempoActividad()
					{
						setTimeout("DestruirSesion()", 7000);
					}
					function DestruirSesion()
					{
						location.href = "salir.php";
					}
					// TiempoActividad();
</script>;
<link rel="STYLESHEET" type="text/css" href="estilo_menus.css"/>
<link rel="STYLESHEET" type="text/css" href="estilo_pagform.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<nav class="row" >
<table style="background-image:url(flores1.jpg)" border="5" bordercolor="blue" width="" height="40" >
<tr >
<td width="" class="col-sm-4">
<ul class="listamenu">
<li ><a href="">Inscripciones</a>
	<ul type="disc" >
					<li><a href="formulario_cliente.php">Cliente</a></li>
					<li><a href="formulario_empleado.php">Empleado</a></li>
					<li><a href="formulario_productos.php">Producto</a></li>
					<li><a href="formulario_proveedor.php">Proveedor</a></li>
					<li><a href="formulario_insumos.php">Insumos</a></li>				
				</ul></li>
</ul>
</td>

<?php 		
				// if (isset($_GET["usuario2"])=="si")
					if ($_SESSION['tipousuario']=='Usuario')
					{
				?> 
					
				<?php
					}
					else
					{
				?> 
					<?php 		
				// if (isset($_GET["usuario3"])=="si")
					if ($_SESSION['tipousuario']=='Usuario2')
					{
				?> 
					<td width="" class="col-sm-4">				
					<ul class="listamenu">				
					<li ><a href="">Consultas Generales</a>
					<ul type="disc" >									
					<li><a href="consultas_cliente.php">Cliente</a></li>
					<li><a href="consultas_empleado.php">Empleado</a></li>
					<li><a href="consultas_productos.php">Productos</a></li>
					<li><a href="consultas_proveedor.php">Proveedor</a></li>
					<li><a href="consultas_insumos.php">Insumos</a></li>				
					</ul></li>
					</ul>
					</td>
				<?php
					}
					else
					{
				?> 					
					<td width="" class="col-sm-4">				
					<ul class="listamenu">				
					<li ><a href="">Consultas Generales</a>
					<ul type="disc" >									
					<li><a href="consultas_cliente.php">Cliente</a></li>
					<li><a href="consultas_empleado.php">Empleado</a></li>
					<li><a href="consultas_productos.php">Productos</a></li>
					<li><a href="consultas_proveedor.php">Proveedor</a></li>
					<li><a href="consultas_insumos.php">Insumos</a></li>				
					</ul></li>
					</ul>
					</td>
					
					<td class="col-sm-4">
					<ul class="listamenu">
					<li ><a href="">Modificar/Eliminar</a>
					<ul type="disc" >									
					<li><a href="menu_modi_cliente.php">Cliente</a></li>
					<li><a href="menu_modi_empleado.php">Empleado</a></li>
					<li><a href="menu_modi_productos.php">Producto</a></li>
					<li><a href="menu_modi_proveedor.php">Proveedor</a></li>
					<li><a href="menu_modi_insumos.php">Insumos</a></li>				
					</ul></li>
					</ul>
					</td>					
				<?php 
					}}
				?>	

</tr>
</table>
</nav>

<button name="cerrar_sesion" value="Entrar" style="color: black;border-radius:5px;cursor: pointer;margin: 22px;border: 2px solid green;border-radius: 5px; width=20%"><a href="salir.php" style="margin: 22px;">Cerrar Sesion</a></button>


<body bgcolor="#ffffff" text="black" link="  #355743  " alink=" #e8ff00 ">
	
	<section>
		<div class="imagenes1" style="display:flex;" class="row">
			<div class="subimagenes1" class="col-sm-4">
			<img src="vivero_rosas_1.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes1" class="col-sm-4">
			<img src="vivero_rosas_2.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes1" class="col-sm-4">
			<img src="flores4.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>		
		</div>

		<div class="imagenes2" style="display:flex;">
			<div class="subimagenes2">
			<img src="flores5.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes2">
			<img src="flores6.jpg" alt="vivero rosas1" height="95%" style="width:100%">
			</div>
			<div class="subimagenes2">
			<img src="flores7.jpg" alt="vivero rosas1" height="95%" style="width:100%">
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
			<dl><dt class="subtitulo" align="center">Objetivos</dt>
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
	</br></br></br></br>
	<BUTTON name="validar" style="color: black;border-radius:5px;cursor: pointer;margin: 22px;border: 2px solid green;border-radius: 5px; width=20%"><a href="validacion_sesion.php">Comprobar la sesion</a></button>
	</br></br>
	<div style="color:gray">
	<h2><b>Realizado por</b></h1>	
	Leonardo Hernando Dallos Martínez - Cod:2090041
	</div>
	</br></br></br></br>	
	</footer>
</body>
</html>