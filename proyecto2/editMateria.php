<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de la materia</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link href="css/margins.css" rel="stylesheet">
	<link href="css/aligns.css" rel="stylesheet">
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
			<h2>Datos de la Materia &raquo; Editar datos</h2>
			<hr />
			<?php
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM materias WHERE id='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: dashboard.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$materia = mysqli_real_escape_string($con,(strip_tags($_POST["materia"],ENT_QUOTES)));
				echo "<meta http-equiv='refresh' content='0'>";
				$update = mysqli_query($con, "UPDATE materias SET materia='$materia' WHERE id='$id'") or die(mysqli_error());
				if($update){
					header("Location: editMateria.php?id=".$id."&pesan=sukses");
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
					<label class="col-sm-3 control-label">Materia</label>
					<div class="col-sm-4">
						<input type="text" name="materia" value="<?php echo $row ['materia']; ?>" class="form-control" placeholder="Materia" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<a href="verMaterias.php" class="btn btn-secondary center">
							<img src="img/ic_arrow-left.svg" alt="Volver icono" class="mr-4" />
							Volver a materias
						</a>
						<input type="submit" name="save" class="btn btn-primary" value="Guardar datos">
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>