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
	<title>RCA - ICO | Notas del alumno</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/margins.css" rel="stylesheet">
	<link href="css/aligns.css" rel="stylesheet">
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
			<?php
				$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
				//$id = "23";
				$sql = mysqli_query($con, "SELECT * FROM alumnos WHERE id='$id'");
				if(mysqli_num_rows($sql) == 0){
					header("Location: dashboard.php");
				}else{
					$row = mysqli_fetch_assoc($sql);
				}

				if(isset($_GET['aksi']) == 'delete'){
					$delete = mysqli_query($con, "DELETE FROM alumnos WHERE id='$id'");
					if($delete){
						echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Datos eliminados con éxito</div>';
					}else{
						echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>No se pudieron eliminar los datos</div>';
					}
				}
			?>
			<div class="content">
				<h1 class="titulo1">Notas de <?php echo $row['nombre']; ?></h1>
				<hr />
				<?php
				if(isset($_GET['aksi']) == 'delete'){
					// escaping, additionally removing everything that could be (html/javascript-) code
					$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
					$cek = mysqli_query($con, "SELECT * FROM notas WHERE alumno='$id'");
					if(mysqli_num_rows($cek) == 0){
						echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
					}else{
						$delete = mysqli_query($con, "DELETE FROM notas WHERE alumno='$id'");
						if($delete){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
						}
					}
				}
				?>
				<form class="form-inline" method="get">
					<div class="form-group">
						<input name="buscar" class="form-control search mb-20" placeholder="Ingrese id de materia">
						<?php $buscar = (isset($_GET['buscar']) ? strtolower($_GET['buscar']) : NULL); ?>
						<input type="submit" class="btn btn-primary mb-20" value="Buscar">
					</div>
				</form>
				<br />
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>Id Alumno</th>
							<th>Id Curso</th>
							<th>Materia</th>
							<th>Fecha</th>
      		   	<th>Nota</th>
							<th>Observaciones</th>
						</tr>
						<?php
						if($buscar){
							$sql = mysqli_query($con, "SELECT * FROM notas WHERE materia LIKE '%$buscar%' ORDER BY id ASC");
						}else{
							//$sql = mysqli_query($con, "select alumnos.*,cursos.* from alumnos,cursos where alumnos.idcurso = cursos.id");
							$sql = mysqli_query($con, "SELECT * FROM notas where alumno= $id ORDER BY id ASC");
						}
					
						if(mysqli_num_rows($sql) == 0){
							echo '<tr><td colspan="8">No hay datos.</td></tr>';
						}else{
							$no = 1;
							while($row = mysqli_fetch_assoc($sql)){
								echo '
								<tr>
									<td>'.$row['alumno'].'</td>
									<td>'.$row['curso'].'</td>
									<td>'.$row['materia'].'</td>
									<td>'.$row['fecha'].'</td>
      		        <td>'.$row['nota'].'</td>
									<td>'.$row['obs'].'</td>
								</tr>';
								$no++;
							}
						}
						?>
					</table>
				</div>
			</div>
			<a href="verNotas.php" class="btn btn-secondary center">
				<img src="img/ic_arrow-left.svg" alt="Volver icono" class="mr-4" />
				Volver a cursos
			</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>