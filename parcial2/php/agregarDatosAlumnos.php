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
	$n=$_POST['nivel'];

	$sql="INSERT into alumnos (nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,nivel)
								values ('$n','$a','$tD','$nD','$d','$t','$m','$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>