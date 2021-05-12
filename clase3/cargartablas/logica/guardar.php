<?php
 require 'conexion.php';
  
 
 $nombre  = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $email  = $_POST['email'];
 $telefono  = $_POST['telefono'];


$insertar = "INSERT INTO base VALUES ('','$nombre','$apellido','$email','$telefono') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}






?>