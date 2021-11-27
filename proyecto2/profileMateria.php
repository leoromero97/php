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
			<h2>Datos de la materia &raquo; Editar</h2>
			<hr />
			<?php
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM materias WHERE id='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: dashboard.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM materias WHERE id='$id'");
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
					<th>Materia</th>
					<td><?php echo $row['materia']; ?></td>
				</tr>
			</table>
			<a href="verMaterias.php" class="btn btn-secondary center">
				<img src="img/ic_arrow-left.svg" alt="Volver icono" class="mr-4" />
				Volver
			</a>
			<a href="editMateria.php?id=<?php echo $row['id']; ?>" class="btn btn-primary center">
				<img src="img/ic_edit.svg" alt="Editar icono" class="mr-4" />
				Editar datos
			</a>
			<a href="profileMateria.php?aksi=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger center" onclick="return confirm('¿Estás seguro de borrar los datos de la materia <?php echo $row['materia']; ?> ?')">
				<img src="img/ic_trash.svg" alt="Eliminar icono" class="mr-4" />
				Eliminar
			</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>