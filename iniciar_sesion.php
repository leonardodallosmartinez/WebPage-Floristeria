<?php 
include ("encabezado.php");
include ("cabecera_redes.php");
extract($_POST);

echo $cedula,"<br>";
echo $clave,"<br>";

session_start();


include("conexion.php");
$conexion=conectarse();

$sql1="Select * from usuario  where cedula='".$cedula."' and clave ='".$clave."'";
$result=pg_query($conexion,$sql1);
$numrows5 = pg_numrows($result);
	
				if ($numrows5==0) 
				{
				header("Location: pag_form_ini.php?errorusuario=si");
				}
				else 
				{
				$row1 = pg_fetch_array($result);
				$tipo_usuario1 = $row1["tipo_usuario"];
				$nombre1 = $row1["nombre"];				
				
				$_SESSION['cedula'] =$cedula;				
				$_SESSION['clave']=$clave;
				$_SESSION['nombre']=$nombre1;
				$_SESSION['tipousuario']=$tipo_usuario1;
				
									
				
				/*La función PHP header nos permite enviar encabezados sin formato al cliente (robot, navegador…). Es una manera de forzar dicho envío antes de que se lean los encabezados de la propia página*/
				echo $tipo_usuario1;
				if ($tipo_usuario1=='Administrador')
				{
				header("Location: pag_form.php");
					exit(); 	
				}
				if ($tipo_usuario1=='Usuario')
				{
				header("Location:  pag_form.php?usuario2=si");
				exit(); 
				
				}
				if ($tipo_usuario1=='Usuario2')
				{
				header("Location:  pag_form.php?usuario3=si");
				exit();
				}
				}


				
?>