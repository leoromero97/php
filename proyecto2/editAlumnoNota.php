<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos del alumno</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link href="css/margins.css" rel="stylesheet">
	<link href="css/aligns.css" rel="stylesheet">
	<link href="css/components.css" rel="stylesheet">
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
			<h2>Datos del alumno &raquo; Calificar</h2>
			<hr />
			<?php
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			$idcurso = mysqli_real_escape_string($con,(strip_tags($_GET["idcurso"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM alumnos WHERE id='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: dashboard.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			
			if(isset($_POST['save'])){
				$apellido		 = mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
				$nombre	 	 = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
				$dni		 = mysqli_real_escape_string($con,(strip_tags($_POST["dni"],ENT_QUOTES)));
				$telefono	     = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES))); 
				$idcurso	     = mysqli_real_escape_string($con,(strip_tags($_POST["idcurso"],ENT_QUOTES)));
				$idmaterias = mysqli_real_escape_string($con,(strip_tags($_POST["materias"],ENT_QUOTES)));
				$idnota = mysqli_real_escape_string($con,(strip_tags($_POST["nota"],ENT_QUOTES)));
				echo "<meta http-equiv='refresh' content='0'>";
				$update = mysqli_query($con, " INSERT notas SET alumno ='$id', curso='$idcurso',profesor='0',materia ='$idmaterias',fecha =CURDATE(), nota='$idnota'") or die(mysqli_error());
				if($update){
					header("Location: editAlumnoNota.php?id=".$id."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido</label>
					<div class="col-sm-4">
						<input type="text" name="apellido" value="<?php echo $row ['apellido']; ?>" class="form-control" placeholder="Apellido" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" value="<?php echo $row ['nombre']; ?>" class="form-control" placeholder="Nombre" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DNI</label>
					<div class="col-sm-4">
						<input type="text" name="dni" value="<?php echo $row ['dni']; ?>" class="form-control" placeholder="DNI" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-3">
					<input type="text" name="telefono" value="<?php echo $row ['telefono']; ?>" class="form-control" placeholder="Telefono" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Curso</label>
					<div class="col-sm-3">
					<input type="text" name="idcurso" value="<?php echo $row ['idcurso']; ?>" class="form-control" placeholder="Id Curso" disabled>
					<?php $idcurso=$row['idcurso']; ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Materias</label>
					<div class="col-sm-4">
						<div class="content-select">
							<select name = "materias" class="select">
								<option value="0">Seleccione</option>
									<?php
									$mysqli = new mysqli('localhost', 'c1341491_prueba', 'zo54seLUka', 'c1341491_prueba');
									?>
									<?php
									$query = $mysqli -> query ("SELECT * FROM materias where idcursos = $idcurso ");
									while ($valores = mysqli_fetch_array($query)) {
										echo '<option value="'.$valores[id].'">'.$valores[materia].'</option>';
									}
									?>
							</select>
							<span></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Notas</label>
					<div class="col-sm-4">
						<input type="text" name="nota" class="form-control" placeholder="Notas" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<a href="altaNotas.php" class="btn btn-secondary center">
							<img src="img/ic_arrow-left.svg" alt="Volver icono" class="mr-4" />
							Volver a notas
						</a>
						<input type="submit" name="save" class="btn btn-primary" value="Guardar datos">
						<a href="dashboard.php" class="btn btn-tertiary">
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>