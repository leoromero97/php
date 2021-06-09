<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)

if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: index.html");
    # Y salimos del script
    exit();
  }
?>

<html>
  <head>
    <title>Bienvenida en al Sistema</title>
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <h1 class="title2">Te damos la bienvenida al Sistema</h1>
    <h2 class="subtitle">
      ¿Qué deseas ver?
    </h2>
    <div class=container-buttons>
      <a href="https://repartear.com/php/parcial1/listaPacientes/" class="button">
        Ver Pacientes
      </a>
      <a href="https://repartear.com/php/parcial1/listaMedicos/" class="button">
        Ver Médicos
      </a>
      <a href="https://repartear.com/php/parcial1/listaObrasSociales/" class="button">
        Ver Obras Sociales
      </a>
    </div>
    <a href="logout.php" class="button">Cerrar sesión</a>
  </body>
</html>
