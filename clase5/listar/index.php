<?php
	require('conexion.php');
	
	$query="SELECT * FROM profesores";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Listado de Profesores</title>
		<style type="text/css">
		  * {
		  	box-sizing: border-box;
		  	margin: 0;
		  	padding: 0;
				font-family: 'Nunito', sans-serif;
			}
			
			body {
				background-color: #FFECEE;
				color: #FFECEE;
				width: 100%;
				padding: 20px;
				height: 100vh;
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
				text-align: center;
			}
			
				.button {
  				border: 2px solid #1B6E7C;
  				border-radius: 6px;
  				height: 54px;
  				text-decoration: none;
  				width: 220px;
  				font-size: 18px;
  				font-weight: 600;
  				display: flex;
  				align-items: center;
  				justify-content: center;
  				cursor: pointer;
  				color: #3F3D56;
				}

				.button:hover {
				  background-color: #1B6E7C;
				  color: #c3c2c2;
				  transition: .6s;
				}

				/*Cuadrado */
				.cuadro {
					width: 90%;
					background: #E8F5F4;
					padding: 25px;
					margin: 5px auto;
					border: 3px solid #282828;
				}

				.titulo{
					width: 100%;
					background: #FFECEE;
					color: #282828;
				}

				.titulosTabla {
				  padding: 0.5rem;
				  background: #FFA4A8;
				  color: #282828;
				  text-align: center;
				  font-size: 21px;
				}
			
				/* Datagrid */
				table {
				  border-collapse: collapse;
				  width: 100%;
				}

				th,
				td {
					color: #282828;
				  padding: 0.25rem;
				  border: 1px solid #1B6E7C;
				}

				tbody tr:nth-child(odd) {
				  background: #FFECEE;
					color: #282828;
				}

			</style>
			</head>
	<body>
	<div class="cuadro">
		<div class="titulo">
		<center><h1>Profesores</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="titulosTabla">
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Tipo de documento</td>
					<td>CUIT/CUIL</td>
					<td>Número de documento</td>
					<td>Télefono</td>
					<td>Email</td>
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
								<?php echo $row['tipo_documento'];?>
							</td>
							<td>
								<?php echo $row['cuit'];?>
							</td>
							<td>
								<?php echo $row['numero_documento'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['mail'];?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br>
		<a href="https://repartear.com/php/clase5/" class="button">Volver</a>
		</body>
	</html>	
	
