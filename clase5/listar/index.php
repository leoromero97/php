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
		  	font-family: 'Montserrat', sans-serif;
			}
			
			body {
				width: 100%;
				padding: 20px;
				height: 100vh;
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
				text-align: center;
			}
			
			input {
				border: #d23557 2px solid;
				border-radius: 6px;
				background: #121212;
				color: #fff;
				padding: 10px;
				outline-style: none;
			}
				  .formulario {
				  border: 2px solid black;
				  border-radius: 10px;
				  background-color: #121212;
				  height: 600px;
				  width: 80%;
				  display: flex;
				  flex-direction: column;
				  align-items: center;
				  justify-content: space-evenly;
				  box-shadow: 0 0 10px #121212;
				}
			
				.button {
				  background-color: #d235575e;
				  width: 220px;
				  font-size: 18px;
				  font-weight: 600;
				  cursor: pointer;
					text-decoration: none;
				} 
			
				.button:hover {
				  background-color: #d23557;
				}
			
				/* Datagrid */
				table {
				  border-collapse: collapse;
				  width: 100%;
				}
				th, td {
				  padding: 0.25rem;
				  border: 1px solid #ccc;
				}
				tbody tr:nth-child(odd) {
				  background: #eee;
				}
				.centro{
				  padding: 0.5rem;
				  background: #484848 ;
				  color: white;
				  text-align: center;
				  font-size: 21px;
				}
			
				#cuadro{
					width: 90%;
					background: #F8F8F8 ;
					padding: 25px;
					margin: 5px auto;
					border: 3px solid #D8D8D8;
				}
			
				#titulo{
					width: 100%;
					background: #282828;
					color: white;
				}
			</style>
			</head>
	<body>
	<div id="cuadro">
		<div id="titulo">
		<center><h1>Profesores</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
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
	
