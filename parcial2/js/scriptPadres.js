function agregardatos(nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,cantidad_hijos){
	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&numero_documento=" + numero_documento +
			"&domicilio=" + domicilio +
      "&telefono=" + telefono +
			"&mail=" + mail +
      "&cantidad_hijos=" + cantidad_hijos;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosPadres.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablaPadres').load('components/tablaPadres.php');
				 $('#buscadorPadres').load('components/buscadorPadres.php');
				alertify.success("Alumno agregado con exito !");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}

function agregaform(datos){

	d=datos.split('||');

	$('#idPadre').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#apellidoU').val(d[2]);
	$('#tipo_documentoU').val(d[3]);
	$('#numero_documentoU').val(d[4]);
	$('#domicilioU').val(d[5]);
	$('#telefonoU').val(d[6]);
	$('#mailU').val(d[7]);
  $('#cantidad_hijosU').val(d[8]);
}

function actualizaDatos(){
	id=$('#idPadre').val();
	nombre=$('#nombreU').val();
	apellido=$('#apellidoU').val();
	tipo_documento=$('#tipo_documentoU').val();
	numero_documento=$('#numero_documentoU').val();
  domicilio=$('#domicilioU').val();
	telefono=$('#telefonoU').val();
	mail=$('#mailU').val();
  cantidad_hijos=$('#cantidad_hijosU').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&numero_documento=" + numero_documento +
      "&domicilio=" + domicilio +
			"&telefono=" + telefono +
			"&mail=" + mail +
      "&cantidad_hijos=" + cantidad_hijos;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatosPadres.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('components/tablaPadres.php');
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
			url:"php/eliminarDatosPadres.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablaPadres').load('components/tablaPadres.php');
					alertify.success("Registro eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
