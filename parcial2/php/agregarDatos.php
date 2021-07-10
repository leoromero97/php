<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$tD=$_POST['tipo_documento'];
	$c=$_POST['cuit'];
	$nD=$_POST['numero_documento'];
	$t=$_POST['telefono'];
	$m=$_POST['mail'];

	$sql="INSERT into profesores (nombre,apellido,tipo_documento,cuit,numero_documento,telefono,mail)
								values ('$n','$a','$tD','$c','$nD','$t','$m')";
	echo $result=mysqli_query($conexion,$sql);

 ?>