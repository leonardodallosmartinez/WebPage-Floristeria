<?php 
include ("encabezado.php");
include ("cabecera_redes.php");
$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();

session_start(); 
if ( isset ( $_SESSION['nombre'] ) ) {
	echo "Usuario: ".$_SESSION['nombre'];
	echo "<br>";
	echo "Tipo de usuario: ".$_SESSION['tipousuario'];
}
else 
{ 
 print 'desconocido';
}
?>
<body style="background-image:url('flores8.jpg');font-weight: bold;color:white;font-family:cursive"></body>
<br><br><br>
<BUTTON name="regresar"><a href="pag_form.php">Volver</a>
</body>