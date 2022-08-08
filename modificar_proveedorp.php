<link rel="stylesheet" type="text/css" href="estilo_elimin_modif.css">
<?PHP

ini_set('display_errors', 'On');
ini_set('display_errors', 1);

 extract($_POST);
	
include ("cabecera_redes.php");
include ("conexion.php");
hacer_cabecera();
$conexion=conectarse();; 

 // $codigo; 
 // $nombre; 
 // $apellido; 

$sql1= "UPDATE ".$datomod1." SET  nombre='".$nombre."',documento='".$documento."',direccion='".$direccion."',email='".$email."',telefono='".$telefono."',rut='".$rut."' where id='".$id."'";
 $result1 = pg_query($conexion,$sql1);
	

if($result1===false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> MODIFICAR - DATOS </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pag_form.php' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS NO SE PUDIERON MODIFICAR CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar' class='butact'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
else
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> MODIFICAR - DATOS </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pag_form.php' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS SE MODIFICARON CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar' class='butact'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
?>