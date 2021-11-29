<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vista de profesores</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Profesores</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM profesores WHERE id='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM profesores WHERE id='$id'");
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
					<input name="buscar" class="form-control" placeholder="Ingrese apellido del profesor">
					<?php $buscar = (isset($_GET['buscar']) ? strtolower($_GET['buscar']) : NULL); ?>
					<input type="submit" class="btn btn-primary" value="Buscar">
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>ID</th>
					<th>Apellido</th>
					<th>Nombre</th>
                    <th>Dni</th>
                    <th>Telefono</th>
				</tr>
				<?php
				if($buscar){
					$sql = mysqli_query($con, "SELECT * FROM profesores WHERE apellido LIKE '%$buscar%' ORDER BY id ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM profesores ORDER BY id ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td><a href="profileProfesor.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'.$row['id'].'</a></td>
							<td>'.$row['apellido'].'</td>
							<td>'.$row['nombre'].'</td>
                            <td>'.$row['dni'].'</td>
							<td>'.$row['telefono'].'</td>
						</tr>';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
