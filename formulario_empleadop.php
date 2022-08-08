<?PHP
		include("conexion.php");

         $nombre_empleado = $_POST["nombre"]; 
         $doc_empleado = $_POST["nid"]; 
		 $dir_empleado = $_POST["direccion"]; 
         $emai1_empleado = $_POST["email"];
		 $tel_empleado = $_POST["tel"];
		 $salario = $_POST["salario"]; 
         $arl_empleado = $_POST["arl"];
		 $rut_empleado = $_POST["rut"];
		 $tipo_empleo = $_POST["combo"];
		 $fecha_vinculo = $_POST["fechavinc"];
		 
         echo $nombre_empleado,"\n","<br>" ; 
         echo $doc_empleado,"\n","<br>" ;  
		 echo $dir_empleado,"\n","<br>" ;  
         echo $emai1_empleado,"\n","<br>" ; 
		 echo $tel_empleado,"\n" ,"<br>" ;
		 echo $salario,"\n","<br>"  ; 
         echo $arl_empleado,"\n","<br>" ;
		 echo $tipo_empleo, "<br>";
		 echo $rut_empleado, "<br>";
		 echo $fecha_vinculo;
		 
		 $conexion = conectarse(); 

		$sql3="insert into empleado (nombre, documento, direccion, email, telefono, rut, salario, arl, fk_id_tipoempleado, fechavinculo)
		values ('$nombre_empleado', '$doc_empleado' ,'$dir_empleado','$emai1_empleado','$tel_empleado', '$rut_empleado', '$salario', '$arl_empleado', '$tipo_empleo', $fecha_vinculo)";

		$result = pg_query($conexion, $sql3);
		 
		 if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}
		




?>