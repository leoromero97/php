<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$tD=$_POST['tipo_documento'];
	$nD=$_POST['numero_documento'];
	$d=$_POST['domicilio'];
	$t=$_POST['telefono'];
	$m=$_POST['mail'];
	$cantidad_hijos=$_POST['cantidad_hijos'];

	$sql="INSERT into padres (nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,cantidad_hijos)
								values ('$n','$a','$tD','$nD','$d','$t','$m','$cantidad_hijos')";
	echo $result=mysqli_query($conexion,$sql);

 ?>