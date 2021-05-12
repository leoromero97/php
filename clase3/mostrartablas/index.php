<?php 
	$conexion=mysqli_connect('localhost','c1950135_datosC3','doneraBU68','c1950135_datosC3');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
	<br>
	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>domicilio</td>
			<td>telefono</td>	
		</tr>

		<?php 
		$sql="SELECT * from t_persona";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['domicilio'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>