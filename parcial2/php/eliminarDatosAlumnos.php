<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$legajo=$_POST['legajo'];

	$sql="DELETE from alumnos where legajo='$legajo'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
 