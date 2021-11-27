<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Alumno</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Alta de nuevo alumno</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$id		     = mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
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
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
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
					<label class="col-sm-3 control-label">Dni</label>
					<div class="col-sm-4">
						<input type="text" name="dni" class="form-control" placeholder="Dni" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Curso</label>
					<div class="col-sm-4">
						<select name = "cursos">
							<option value="0">Seleccione</option>
							<?php
							$mysqli = new mysqli('localhost', 'c1341491_prueba', 'zo54seLUka', 'c1341491_prueba');
							?>
							<?php
							$query = $mysqli -> query ("SELECT * FROM cursos");
							while ($valores = mysqli_fetch_array($query)) {
								echo '<option value="'.$valores[id].'">'.$valores[curso].'</option>';
							}
							?>
						</select>
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
