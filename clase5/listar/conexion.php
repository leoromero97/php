<?php
	$mysqli=new mysqli("localhost","c1950135_datosC3","doneraBU68","c1950135_datosC3"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
