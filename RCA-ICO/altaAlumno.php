<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Registro de Calificaciones de Alumnos - ICO">
	<meta name="keywords" content="Sistema | Registro | Alumnos | Calificaciones">
  <meta name="author" content="Leonardo G. Romero ">
	<link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
	<title>RCA - ICO | Alta de Alumno</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/components.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h1 class="titulo1">Alta de nuevo alumno</h1>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$id = mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
				$apellido		     = mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES))); 
				$nombre	 = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
				$dni	 = mysqli_real_escape_string($con,(strip_tags($_POST["dni"],ENT_QUOTES)));
				$telefono = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
				$idcurso = mysqli_real_escape_string($con,(strip_tags($_POST["cursos"],ENT_QUOTES)));

				$cek = mysqli_query($con, "SELECT * FROM alumnos WHERE id='$id'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO alumnos(id, apellido, nombre, dni,telefono,idcurso)
															VALUES('$id','$apellido', '$nombre', '$dni', '$telefono','$idcurso')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Excelente ! Se guardaron los datos con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, ocurrió un error ! No se pudieron guardar los datos, intente más tarde</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. El alumno que intenta ingresar ya esta registrado!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido</label>
					<div class="col-sm-4">
						<input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DNI</label>
					<div class="col-sm-4">
						<input type="text" name="dni" class="form-control" placeholder="DNI" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-4">
						<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Curso</label>
					<div class="col-sm-4">
						<div class="content-select">
							<select name = "cursos" class="select">
								<option value="0">Seleccione</option>
								<?php
								$mysqli = new mysqli('localhost', 'c2340800_php', 'PUbotu05ko', 'c2340800_php');
								?>
								<?php
								$query = $mysqli -> query ("SELECT * FROM cursos");
								while ($valores = mysqli_fetch_array($query)) {
									echo '<option value="'.$valores[id].'">'.$valores[curso].'</option>';
								}
								?>
							</select>
							<span></span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="Registrar alumno">
						<a href="dashboard.php" class="btn btn-tertiary">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
