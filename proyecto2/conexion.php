<?php
/*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "c1341491_prueba";
$db_pass = "zo54seLUka";
$db_name = "c1341491_prueba";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>