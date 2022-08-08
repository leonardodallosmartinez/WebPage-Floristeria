<?PHP
		include("conexion.php");
		
       
		$nombre1 = $_POST["nombre"];        
		$precio_unitario = $_POST["precio_unid"]; 
        $descripcion = $_POST["descripcion"];
		$unidadesdisp = $_POST["u_disp"];
		$color = $_POST["combo"];
		
		 
        echo "$nombre1","<br>"; 
        echo "$precio_unitario","<br>"; 
		echo "$descripcion","<br>"; 
		echo "$unidadesdisp","<br>";
        echo "$color";	

		$conexion = conectarse(); 

		$sql3="insert into Productos ( nombre, descripcion, preciounidad, unidadesdisp, fk_id_color) values ('$nombre1', '$descripcion','$precio_unitario','$unidadesdisp', $color)";

		$result = pg_query($conexion, $sql3);		
if(!($result)){
			echo"<p><br><br>Los datos NO han sido correctamente insertados</p>";
		}
		else{
			echo"<p> Los datos han sido correctamente insertados</p>,</br>";
		}

?>