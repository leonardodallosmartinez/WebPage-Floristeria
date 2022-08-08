<?PHP
		include ("conexion.php");
		
		
		$nombre1 = $_POST["nombre"]; 
        $documento1 = $_POST["Nid"]; 
		$dir_cliente = $_POST["Direccion"]; 
        $email_cliente = $_POST["email"];
		$tel_cliente = $_POST["tel"];
		$rut_cliente = $_POST["rut"];
		$ciudad_cliente = $_POST["combo"];
		 
		 
        echo $nombre1,"<br>"; 
        echo $documento1,"<br>"; 
		echo $dir_cliente,"<br>"; 
        echo $email_cliente,"<br>";
		echo $tel_cliente, "<br>";
		echo $rut_cliente, "<br>";
		echo $ciudad_cliente; 
		
		$conexion = conectarse(); 

		$sql="insert into cliente (nombre, documento, direccion, email, telefono, rut, fk_id_ciudad)
		values ('$nombre1', '$documento1' ,'$dir_cliente','$email_cliente','$tel_cliente', '$rut_cliente', '$ciudad_cliente')";

		$result = pg_query($conexion, $sql);
		
		
		 
		if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}

		 




?>