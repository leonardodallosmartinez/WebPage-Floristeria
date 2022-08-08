<?PHP
		include ("conexion.php");
		
		$nombre_insumo = $_POST["nombre"];        
		$precio_unitario = $_POST["precio_unid"]; 
        $descripcion = $_POST["descripcion"];
		
		
		
        echo "$nombre_insumo","<br>"; 
        echo "$precio_unitario","<br>"; 
		echo "$descripcion","<br>"; 
        		

		$conexion = conectarse();

		$sql3="insert into insumos (nombre, descripcion, preciounidad)
		values ('$nombre_insumo', '$descripcion', '$precio_unitario')";

		$result = pg_query($conexion, $sql3);
		if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}
?>