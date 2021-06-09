<?php

	require('../conexion.php');
	
	$query="SELECT * FROM medicos";

	$resultado=$mysqli->query($query);
	
?>

<html>
  <head>
    <title>Lista de Médicos</title>
		<link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="cuadro">
		<div class="titulo">
		<center><h1>Médicos</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="titulosTabla">
					<td>Nombre</td>
					<td>Apellido</td>
					<td>CUIT-CUIL</td>
					<td>Mátricula</td>
					<td>Especialidad</td>
					<td>Teléfono</td>
          <td>Email</td>
          <td>Obra social</td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['apellido'];?>
							</td>
							<td>
								<?php echo $row['cuit'];?>
							</td>
							<td>
								<?php echo $row['matricula'];?>
							</td>
							<td>
								<?php echo $row['especialidad'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['mail'];?>
							</td>
							<td>
								<?php echo $row['obra_social'];?>
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
