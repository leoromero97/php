<?php

	require('../conexion.php');
	
	$query="SELECT * FROM obra_sociales";

	$resultado=$mysqli->query($query);
	
?>

<html>
  <head>
    <title>Lista de Obras Sociales</title>
		<link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="cuadro">
		<div class="titulo">
		<center><h1>Obras Sociales</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="titulosTabla">
					<td>Razón Social</td>
					<td>CUIT</td>
					<td>Domicilio</td>
					<td>Teléfono</td>
					<td>Email</td>
					<td>Horarios</td>
        </tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['razon_social'];?>
							</td>
							<td>
								<?php echo $row['cuit'];?>
							</td>
							<td>
								<?php echo $row['domicilio'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['mail'];?>
							</td>
							<td>
								<?php echo $row['horarios'];?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br>
		<div class=container-buttons>
			<a href="https://repartear.com/php/parcial1/bienvenida.php" class="button">Volver</a>
    	<br>
			<a href="../logout.php" class="button">Cerrar sesión</a>
		</div>
  </body>
</html>
