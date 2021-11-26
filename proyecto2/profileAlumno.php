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
			<h2>Datos del alumno &raquo; Editar</h2>
			<hr />
			<?php
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
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
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">ID</th>
					<td><?php echo $row['id']; ?></td>
				</tr>
				<tr>
					<th>Apellido</th>
					<td><?php echo $row['apellido']; ?></td>
				</tr>
				<tr>
					<th>Nombre</th>
					<td><?php echo $row['nombre']; ?></td>
				</tr>
				<tr>
					<th>Dni</th>
					<td><?php echo $row['dni']; ?></td>
				</tr>
				<tr>
					<th>Telefono</th>
					<td><?php echo $row['telefono']; ?></td>
				</tr>
				<tr>
					<th>Id Curso</th>
					<td><?php echo $row['idcurso']; ?></td>
				</tr>
			</table>
			
			<a href="verAlumnos.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>Volver</a>
			<a href="editAlumno.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar datos</a>
			<a href="profileAlumno.php?aksi=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar los datos <?php echo $row['nombre']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>