function validarFormulario(){

		var txtNombre = document.getElementById('nombre').value;				
		var txtDescripcion = document.getElementById('descripcion').value;		
		var txtPreciou = document.getElementById('precio_unid').value;
		
	
  
  
		//Test campo obligatorio
		if(txtNombre == null || txtNombre.length == 0 ){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
 						
		if(txtPreciou == null || txtPreciou.length == 0 || isNaN(txtPreciou)){
			alert('ERROR: Debe ingresar un precio de unidad');
			return false;
		}
		
		
 		
		return true;
	}
 