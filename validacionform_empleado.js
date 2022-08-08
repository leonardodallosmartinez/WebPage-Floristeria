function validarFormulario(){

		var txtNombre = document.getElementById('nombre').value;		 
		var txtDocumento = document.getElementById('nid').value;		
		var txtDireccion = document.getElementById('direccion').value;
		var txtCorreo = document.getElementById('email').value;
		var txtTelefono = document.getElementById('tel').value;
		var txtSalario = document.getElementById('salario').value;
		var txtARL = document.getElementById('arl').value;
		var selTipoEmpleado = document.getElementById('combo');
		var txtRUT = document.getElementById('rut').value;
		var txtFechaVinc = document.getElementById('fechavinc').value;
	
  
  
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
		if(txtSalario == null || txtSalario.length == 0 || isNaN(txtSalario)){
			alert('ERROR: Debe ingresar una Salario valido');
			return false;
		}
		if(txARL == null || txtARL.length == 0){
			alert('ERROR: El campo ARL no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
		
		if(selTipoEmpleado == null || selTipoEmpleado == 0){
			alert('ERROR: Debe seleccionar una opcion de los tipo de empleado disponibles');
			return false;
		}
		
		if(txtRUT == null || txtRUT.length == 0){
			alert('ERROR: El campo RUT no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
		if(!isNaN(txtFechaVinc)){
			alert('ERROR: Debe elegir una fecha');
			return false;
		}
		
 		
		return true;
	}
 