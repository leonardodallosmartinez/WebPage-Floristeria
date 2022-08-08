<link rel="stylesheet" type="text/css" href="estilo_elimin_modif.css">
<?PHP
extract($_POST);
include ("cabecera_redes.php");
include ("conexion.php");
hacer_cabecera();
$conexion=conectarse();
echo $datoe3;
 $sql1= "DELETE FROM ".$datoe1." WHERE ".$datoe2."='".$datoe3."'";
	$result1 = pg_query($conexion,$sql1);
	
	
if($result1=== false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> ELIMNINAR DATOS </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pag_form.php' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS NO SE ELIMINARON CORECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar' class='butact/'></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
else
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> ELIMNINAR DATOS</TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pag_form.php' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS SE ELIMINARON CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar' class='butact'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
?>