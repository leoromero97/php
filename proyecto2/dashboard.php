<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Registro de Calificaciones de Alumnos - ICO">
  <meta name="keywords" content="Sistema | Registro | Alumnos | Calificaciones">
  <meta name="author" content="Leonardo G. Romero - Nahuel Pastene - Matias Loviscovo - Leonardo Martínez">
  <meta property="og:type" content="Website">
  <meta content="modificar con el link" property="og:url">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <title>RCA - ICO</title>
  <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav.php');?>
	</nav>
	<div class="dashboard_contenedor">
    <h1 class="titulo1 margen-inferior2">Te damos la bienvenida al Sistema</h1>
    <h2 class="subtitulo1 margen-inferior2">
      ¿Qué deseas realizar?
    </h2>
    <div class="dashboard_contenedor_cards">
      <a href="verAlumnos.php" class="card1 margen-inferior1">
        <img src="./img/ic_usuario.png" alt="icono usuario" class="icono-card1">
        <p class="texto-card1">Ver Alumnos</p>
      </a>
			<a href="altaAlumno.php" class="card1 margen-inferior1">
        <img src="./img/ic_usuario.png" alt="icono usuario" class="icono-card1">
        <p class="texto-card1">Ingresar Alumno</p>
      </a>
			<a href="verProfesor.php" class="card1 margen-inferior1">
        <img src="./img/ic_usuario.png" alt="icono usuario" class="icono-card1">
        <p class="texto-card1">Ver Profesores</p>
      </a>
			<a href="altaProfesor.php" class="card1 margen-inferior1">
        <img src="./img/ic_usuario.png" alt="icono usuario" class="icono-card1">
        <p class="texto-card1">Ingresar Profesor</p>
      </a>
      <a href="verCursos.php" class="card1 margen-inferior1">
        <img src="./img/ic_cursos.png" alt="Cursos" class="icono-card1">
        <p class="texto-card1">Ver Cursos</p>
      </a>
			<a href="altaCurso.php" class="card1 margen-inferior1">
        <img src="./img/ic_cursos.png" alt="Cursos" class="icono-card1">
        <p class="texto-card1">Ingresar Curso</p>
      </a>
      <a href="verMaterias.php" class="card1 margen-inferior1">
        <img src="./img/ic_materia.png" alt="materia" class="icono-card1">
        <p class="texto-card1">Ver materias</p>
      </a>
			<a href="altaMateria.php" class="card1 margen-inferior1">
        <img src="./img/ic_materia.png" alt="materia" class="icono-card1">
        <p class="texto-card1">Alta materia</p>
      </a>
			<a href="verNotas.php" class="card1 margen-inferior1">
        <img src="./img/ic_notas.png" alt="Notas" class="icono-card1">
        <p class="texto-card1">Ver Notas</p> 
      </a>
      <a href="altaNotas.php" class="card1 margen-inferior1">
        <img src="./img/ic_notas.png" alt="Notas" class="icono-card1">
        <p class="texto-card1">Altas Notas</p> 
      </a>
    </div>
  </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
