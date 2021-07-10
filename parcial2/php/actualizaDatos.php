<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$tD=$_POST['tipo_documento'];
	$c=$_POST['cuit'];
	$nD=$_POST['numero_documento'];
	$t=$_POST['telefono'];
	$m=$_POST['mail'];

	$sql="UPDATE profesores set nombre='$n',
								apellido='$a',
								tipo_documento='$tD',
								cuit='$c',
								numero_documento='$nD',
								telefono='$t',
								mail='$m'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>