<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Registro de Datos del Instituto">
  <meta name="keywords" content="Sistema | Registro | Alumnos | Datos">
  <meta name="author" content="Leonardo G. Romero - Leonardo Martínez - Renato Navia">
  <meta property="og:type" content="Website">
  <meta content="modificar con el link" property="og:url">
  <link rel="shortcut icon" href="./img/icon.svg" type="image/x-icon">
  <title>Datos dinámicos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>
	<div>
    <div id="buscador"></div>
    <div class="contenedorTablaProfesores">
      <div id="tabla" class="tableProfesores"></div>
    </div>

	</div>

	<!-- Modal para registros nuevos -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo profesor</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellido" class="form-control input-sm">
        	<label>Tipo de documento</label>
        	<input type="text" name="" id="tipo_documento" class="form-control input-sm">
          <label>CUIT</label>
        	<input type="text" name="" id="cuit" class="form-control input-sm">
          <label>Número de documento</label>
        	<input type="numeric" name="" id="numero_documento" class="form-control input-sm">
        	<label>Teléfono</label>
        	<input type="phone" name="" id="telefono" class="form-control input-sm">
          <label>Email</label>
        	<input type="text" name="" id="mail" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del profesor</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellidou" class="form-control input-sm">
        	<label>Tipo de documento</label>
        	<input type="text" name="" id="tipo_documentou" class="form-control input-sm">
          <label>CUIT</label>
        	<input type="text" name="" id="cuitu" class="form-control input-sm">
          <label>Número de documento</label>
        	<input type="numeric" name="" id="numero_documentou" class="form-control input-sm">
        	<label>Teléfono</label>
        	<input type="phone" name="" id="telefonou" class="form-control input-sm">
          <label>Email</label>
        	<input type="text" name="" id="mailu" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('components/tabla.php');
    $('#buscador').load('components/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          tipo_documento=$('#tipo_documento').val();
          cuit=$('#cuit').val();
          numero_documento=$('#numero_documento').val();
          telefono=$('#telefono').val();
          mail=$('#mail').val();
          agregardatos(nombre,apellido,tipo_documento,cuit,numero_documento,telefono,mail);
        });

        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>
