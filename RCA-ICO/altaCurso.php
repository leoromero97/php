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
	<title>RCA - ICO | Alta de curso</title>
	<link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
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
			<h1 class="titulo1">Alta de nuevo curso</h1>
			<hr />
			<?php
			if(isset($_POST['add'])){
				$id	 = mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
				$curso = mysqli_real_escape_string($con,(strip_tags($_POST["curso"],ENT_QUOTES))); 

				$cek = mysqli_query($con, "SELECT * FROM cursos WHERE id='$id'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO cursos(id, curso)
															VALUES('$id','$curso')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. El curso que intenta ingresar ya esta registrado!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Curso</label>
					<div class="col-sm-4">
						<input type="text" name="curso" class="form-control" placeholder="Curso" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="Registrar Curso">
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
