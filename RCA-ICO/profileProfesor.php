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
	<title>RCA - ICO | Datos del profesor</title>
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
			<h1 class="titulo1">Datos del profesor seleccionado</h1>
			<hr />
			<?php
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM profesores WHERE id='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: dashboard.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM profesores WHERE id='$id'");
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
					<th>DNI</th>
					<td><?php echo $row['dni']; ?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php echo $row['telefono']; ?></td>
				</tr>
			</table>
			
			<a href="verProfesor.php" class="btn btn-secondary center">
			<img src="img/ic_arrow-left.svg" alt="Volver icono" class="mr-4" />
				Volver
			</a>
			<a href="editProfesor.php?id=<?php echo $row['id']; ?>" class="btn btn-primary center">
				<img src="img/ic_edit.svg" alt="Editar icono" class="mr-4" />
				Editar datos
			</a>
			<a href="profileProfesor.php?aksi=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger center" onclick="return confirm('¿Estás seguro de borrar los datos de <?php echo $row['nombre']; ?> ?')">
				<img src="img/ic_trash.svg" alt="Eliminar icono" class="mr-4" />
				Eliminar
			</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>