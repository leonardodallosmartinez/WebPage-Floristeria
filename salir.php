<?PHP
     session_start();
     session_destroy();
	 include ("cabecera_redes.php");
	 hacer_cabecera();
?>
<html>
    <head>  <title>Fin de Sesion</title>  </head>

 <body style="background-image: url('flores10.jpg');color:white;font-size:15px;font-family:cursive">
  Gracias por tu acceso  
  <br><br>
  La sesion ha finalizado
  <br><br>
  <a href="pag_form_ini.php">Ir a la Pagina de Inicio</a>

 </body>

</html>
