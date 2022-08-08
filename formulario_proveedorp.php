<?PHP
		include ("conexion.php");
         $nombre_proveedor = $_POST["nombre"];
		 $doc_proveedor = $_POST["nid"];
         $rut_proveedor = $_POST["rut"]; 
		 $dir_proveedor = $_POST["direccion"]; 
         $emai1_proveedor = $_POST["email"];
		 $tel_proveedor = $_POST["tel"];
		 
		 echo $nombre_proveedor,"<br>";
         echo $doc_proveedor,"<br>"; 
         echo $rut_proveedor,"<br>"; 
		 echo $dir_proveedor,"<br>"; 
         echo $emai1_proveedor,"<br>";
		 echo $tel_proveedor;
		 
		$conexion = conectarse(); 

		$sql3="insert into proveedor (nombre, documento, direccion, email, telefono, rut)
		values ('$nombre_proveedor', '$doc_proveedor' ,'$dir_proveedor','$emai1_proveedor','$tel_proveedor', '$rut_proveedor')";

		$result = pg_query($conexion, $sql3);

		 if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}

if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}


?>