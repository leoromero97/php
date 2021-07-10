<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="c1950135_datosC3";
			$password="doneraBU68";
			$bd="c1950135_datosC3";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>