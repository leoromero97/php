<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$tD=$_POST['tipo_documento'];
	$nD=$_POST['numero_documento'];
	$d=$_POST['domicilio'];
	$t=$_POST['telefono'];
	$m=$_POST['mail'];
	$cantidad_hijos=$_POST['cantidad_hijos'];

	$sql="UPDATE padres set nombre='$n',
								apellido='$a',
								tipo_documento='$tD',
								numero_documento='$nD',
								domicilio='$d',
								telefono='$t',
								mail='$m',
								cantidad_hijos='$cantidad_hijos',
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>