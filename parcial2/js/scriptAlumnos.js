function agregardatos(nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,nivel){
	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&numero_documento=" + numero_documento +
			"&domicilio=" + domicilio +
      "&telefono=" + telefono +
			"&mail=" + mail +
      "&nivel=" + nivel;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosAlumnos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablaAlumnos').load('components/tablaAlumnos.php');
				 $('#buscadorAlumnos').load('components/buscadorAlumnos.php');
				alertify.success("Alumno agregado con exito !");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}

function agregaform(datos){

	d=datos.split('||');

	$('#legajoAlumno').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#apellidoU').val(d[2]);
	$('#tipo_documentoU').val(d[3]);
	$('#numero_documentoU').val(d[4]);
	$('#domicilioU').val(d[5]);
	$('#telefonoU').val(d[6]);
	$('#mailU').val(d[7]);
  $('#nivelU').val(d[8]);
}

function actualizaDatos(){
	legajo=$('#legajoAlumno').val();
	nombre=$('#nombreU').val();
	apellido=$('#apellidoU').val();
	tipo_documento=$('#tipo_documentoU').val();
	numero_documento=$('#numero_documentoU').val();
  domicilio=$('#domicilioU').val();
	telefono=$('#telefonoU').val();
	mail=$('#mailU').val();
  nivel=$('#nivelU').val();

	cadena= "legajo=" + legajo +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&tipo_documento=" + tipo_documento +
			"&numero_documento=" + numero_documento +
      "&domicilio=" + domicilio +
			"&telefono=" + telefono +
			"&mail=" + mail +
      "&nivel=" + nivel;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatosAlumnos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('components/tablaAlumnos.php');
				alertify.success("Datos actualizados con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(legajo){
	alertify.confirm('Eliminar Datos', '¿Estás seguro de eliminar este registro?', 
		function(){ eliminarDatos(legajo) }
       , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(legajo){
	cadena="legajo=" + legajo;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatosAlumnos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablaAlumnos').load('components/tablaAlumnos.php');
					alertify.success("Registro eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
