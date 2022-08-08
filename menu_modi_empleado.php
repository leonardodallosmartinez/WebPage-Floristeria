<?php
 
include ("encabezado.php");
include ("cabecera_redes.php");

$titulo="Optimun Flower Colombia";
hacer_encabezado($titulo);
hacer_cabecera();
include ("menus_paginas.php");
hacer_menu();




?>
<link rel="stylesheet" type="text/css" href="estilo_elimin_modif.css">
<HEAD>
<script language="javascript" type="text/javascript">  
 
function vacio(q) {  
        for ( i = 0; i < q.length; i++ ) {  
                if ( q.charAt(i) != " " ) {  
                        return true  
                }  
        }  
        return false  
}  
  
 
function valida(F) {  
          
        if( vacio(F.documento.value) == false ) {  
                alert("El campo esta vacio debe llenarlo.")  
                return false  
        } else {  
                
				form.submit()				
        }  
          
}  
 </script>  
</HEAD>
<body>

<TITLE>Consultar Empleado</TITLE>
	<H1 align="center"><FONT color="#000099"> Modificar-Eliminar - Empleado</H1>
<TABLE align="center" border="2" class="tabla">
	<form method="POST" action="modifi_empleado.php" onSubmit="return valida(this);">
	<TR>
		<TD colspan=2>
			<div align=" left"><strong>CONSULTAR EMPLEADO </strong></div>
		</TD>
	</tr>
	<TR>
		<TD colspan=2> 
			<FONT color="Black">
			<br>
			
				 DOCUMENTO EMPLEADO: <input type="text" name="documento"  maxlength="10" size="25"onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
			<br>
		</TD>
	</tr>
	<tr>
		<TD align="center">
			<input type="SUBMIT" value="Consultar">
		</td>
		<td align="center"><BUTTON name="regresar"><a href="pag_form.php"  />Volver</a></BUTTON>
		</td>
	</TR>
	</form>
</table>
</body>
</html>