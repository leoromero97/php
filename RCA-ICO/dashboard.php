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
  <meta name="author" content="Leonardo G. Romero ">
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
        <img src="./img/ic_users.svg" alt="Alumnos" class="icono-card1">
        <p class="texto-card1">Ver Alumnos</p>
      </a>
			<a href="altaAlumno.php" class="card1 margen-inferior1">
        <img src="./img/ic_agregar-user.svg" alt="Agregar alumno" class="icono-card1">
        <p class="texto-card1">Ingresar Alumno</p>
      </a>
			<a href="verProfesor.php" class="card1 margen-inferior1">
        <img src="./img/ic_users.svg" alt="Profesores" class="icono-card1">
        <p class="texto-card1">Ver Profesores</p>
      </a>
			<a href="altaProfesor.php" class="card1 margen-inferior1">
        <img src="./img/ic_agregar-user.svg" alt="Agregar usuario" class="icono-card1">
        <p class="texto-card1">Ingresar Profesor</p>
      </a>
      <a href="verCursos.php" class="card1 margen-inferior1">
        <img src="./img/ic_cursos.svg" alt="Cursos" class="icono-card1">
        <p class="texto-card1">Ver Cursos</p>
      </a>
			<a href="altaCurso.php" class="card1 margen-inferior1">
        <img src="./img/ic_agregar-curso.svg" alt="Agregar curso" class="icono-card1">
        <p class="texto-card1">Ingresar Curso</p>
      </a>
      <a href="verMaterias.php" class="card1 margen-inferior1">
        <img src="./img/ic_materias.svg" alt="Materias" class="icono-card1">
        <p class="texto-card1">Ver materias</p>
      </a>
			<a href="altaMateria.php" class="card1 margen-inferior1">
        <img src="./img/ic_agregar-materia.svg" alt="Agregar materia" class="icono-card1">
        <p class="texto-card1">Alta materia</p>
      </a>
			<a href="verNotas.php" class="card1 margen-inferior1">
        <img src="./img/ic_notas.svg" alt="Notas" class="icono-card1">
        <p class="texto-card1">Ver Notas</p> 
      </a>
      <a href="altaNotas.php" class="card1 margen-inferior1">
        <img src="./img/ic_agregar-nota.svg" alt="Agregar notas" class="icono-card1">
        <p class="texto-card1">Altas Notas</p> 
      </a>
    </div>
  </div>
  <footer class="footer">
    <div class="container-footer">
    <div class="content-footer">
      <h4 class="title-footer">Nuestra web</h4>
      <a href="https://cristoobrero.com.ar/" target="blank" rel="noopener noreferrer" class="link-external-footer">
        <img src="./img/ic_arrow-up-right.svg" alt="external link icon" class="icon-footer" />
        Instituto Cristo Obrero
      </a>
    </div>
    <div class="content-footer">
      <h4 class="title-footer">Seguinos</h4>
      <a href="https://www.instagram.com/cristoobrerosoldati/" target="blank" rel="noopener noreferrer" class="link-external-footer">
        <img src="./img/ic_arrow-up-right.svg" alt="external link icon" class="icon-footer" />
        Instagram
      </a>
      <a href="https://www.instagram.com/terciario.cristoobrero/" target="blank" rel="noopener noreferrer" class="link-external-footer">
       <img src="./img/ic_arrow-up-right.svg" alt="external link icon" class="icon-footer" />
        Instagram Terciario
      </a>
    </div>
    <div class="content-footer">
      <h4 class="title-footer">Sobre nosotros</h4>
      <p class="text-footer">Instituo Cristo Obrero es una comunidad dedicada a la ayuda y la educación de los más necesitados</p>
      <a href="https://goo.gl/maps/qg5f6yKhKitcupGv6" target="blank" rel="noopener noreferrer" class="link-external-footer">
        <img src="./img/ic_map.svg" alt="external link icon" class="icon-footer" />
        Avenida Lafuente 3228, Villa Soldati, CABA
      </a> 
    </div>
    </div>
    <a href="https://www.linkedin.com/in/leonardogerbacioromero/" target="blank" rel="noopener noreferrer" class="link-external-footer description-footer">
      Desarrollado por Leonardo Gerbacio Romero
    </a>
    <p class="description-footer">Copyright 2021 &#169; Instituto Cristo Obrero</p>
  </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
