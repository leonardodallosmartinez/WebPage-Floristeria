function validarFormulario(){
 
		var txtNombre = document.getElementById('nombre').value;
		var txtDocumento = document.getElementById('nid').value;
		var txtDireccion = document.getElementById('direccion').value;
		var txtCorreo = document.getElementById('email').value;
		var txtTelefono = document.getElementById('tel').value;
		var txtRUT = document.getElementById('rut').value;
		
	
  
		//Test campo obligatorio
		if(txtNombre == null || txtNombre.length == 0 ){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
 
		
		if(txtDocumento == null || txtDocumento.length == 0 || isNaN(txtDocumento)){
			alert('ERROR: Debe ingresar una Documento valido');
			return false;
		}
 
		
		if(txtDireccion == null || txtDireccion.length == 0 || /^\s+$/.test(txtDireccion)){
			alert('ERROR: El campo Direccion no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
 
		//Test correo
		if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
			alert('ERROR: Debe escribir un correo válido');
			return false;
		}
		
		if(txtTelefono == null || txtTelefono.length == 0 || isNaN(txtTelefono)){
			alert('ERROR: Debe ingresar un telefono');
			return false;
		}
		
		if(txtRUT == null || txtRUT.length == 0){
			alert('ERROR: El campo RUT no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
		
		
 		
		return true;
	}
 