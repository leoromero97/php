function agregardatos(nombre,apellido,tipo_documento,cuit,numero_documento,telefono,mail){
	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&cuit=" + cuit +
			"&numero_documento=" + numero_documento +
			"&telefono=" + telefono +
			"&mail=" + mail;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('components/tabla.php');
				 $('#buscador').load('components/buscador.php');
				alertify.success("Profesor agregado con exito !");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#apellidou').val(d[2]);
	$('#tipo_documentou').val(d[3]);
	$('#cuitu').val(d[4]);
	$('#numero_documentou').val(d[5]);
	$('#telefonou').val(d[6]);
	$('#mailu').val(d[7]);
}

function actualizaDatos(){
	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	apellido=$('#apellidou').val();
	tipo_documento=$('#tipo_documentou').val();
	cuit=$('#cuitu').val();
	numero_documento=$('#numero_documentou').val();
	telefono=$('#telefonou').val();
	mail=$('#mailu').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&cuit=" + cuit +
			"&numero_documento=" + numero_documento +
			"&telefono=" + telefono +
			"&mail=" + mail;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('components/tabla.php');
				alertify.success("Datos actualizados con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Estás seguro de eliminar este registro?', 
		function(){ eliminarDatos(id) }
       , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){
	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('components/tabla.php');
					alertify.success("Registro eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
