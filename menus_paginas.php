<?php
session_start();
function hacer_menu()
{
	$menus="
	<link rel='STYLESHEET' type='text/css' href='estilo_menus.css'/>
<nav >
<table style='background-image:url(flores1.jpg)' border='5' bordercolor='blue' width='' height='40' >
<tr>
<td width=''>
<ul class='listamenu'>
<li ><a href=''>Inscripciones</a>
	<ul type='disc' >
					<li><a href='formulario_cliente.php'>Cliente</a></li>
					<li><a href='formulario_empleado.php'>Empleado</a></li>
					<li><a href='formulario_productos.php'>Producto</a></li>
					<li><a href='formulario_proveedor.php'>Proveedor</a></li>
					<li><a href='formulario_insumos.php'>Insumos</a></li>				
				</ul></li>
</ul>
</td>";

		
				
					if ($_SESSION['tipousuario']=='Usuario')
					{
				 $menus2="";
					
				
					}
					else
					{
				 
							
				
					if ($_SESSION['tipousuario']=='Usuario2')
					{
				 
				 $menus2="
					<td width=''>				
					<ul class='listamenu'>				
					<li ><a href=''>Consultas Generales</a>
					<ul type='disc' >									
					<li><a href='consultas_cliente.php'>Cliente</a></li>
					<li><a href='consultas_empleado.php'>Empleado</a></li>
					<li><a href='consultas_productos.php'>Productos</a></li>
					<li><a href='consultas_proveedor.php'>Proveedor</a></li>
					<li><a href='consultas_insumos.php'>Insumos</a></li>				
					</ul></li>
					</ul>
					</td>";
				
					}
					else
					{
				$menus2="					
					<td width=''>				
					<ul class='listamenu'>				
					<li ><a href=''>Consultas Generales</a>
					<ul type='disc' >									
					<li><a href='consultas_cliente.php'>Cliente</a></li>
					<li><a href='consultas_empleado.php'>Empleado</a></li>
					<li><a href='consultas_productos.php'>Productos</a></li>
					<li><a href='consultas_proveedor.php'>Proveedor</a></li>
					<li><a href='consultas_insumos.php'>Insumos</a></li>				
					</ul></li>
					</ul>
					</td>
					
					<td>
					<ul class='listamenu'>
					<li ><a href=''>Modificar/Eliminar</a>
					<ul type='disc' >									
					<li><a href='menu_modi_cliente.php'>Cliente</a></li>
					<li><a href='menu_modi_empleado.php'>Empleado</a></li>
					<li><a href='menu_modi_productos.php'>Producto</a></li>
					<li><a href='menu_modi_proveedor.php'>Proveedor</a></li>
					<li><a href='menu_modi_insumos.php'>Insumos</a></li>				
					</ul></li>
					</ul>
					</td>";					
				 
					}}
					
$menus3="
</tr>
</table>
</nav>";
		echo "$menus"."$menus2"."$menus3";				
}
?>