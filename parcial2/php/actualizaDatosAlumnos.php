<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$legajo=$_POST['legajo'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$tD=$_POST['tipo_documento'];
	$nD=$_POST['numero_documento'];
	$d=$_POST['domicilio'];
	$t=$_POST['telefono'];
	$m=$_POST['mail'];
	$n=$_POST['nivel'];

	$sql="UPDATE alumnos set nombre='$n',
								apellido='$a',
								tipo_documento='$tD',
								numero_documento='$nD',
								domicilio='$d',
								telefono='$t',
								mail='$m',
								nivel='$n',
				where legajo='$legajo'";
	echo $result=mysqli_query($conexion,$sql);

 ?>