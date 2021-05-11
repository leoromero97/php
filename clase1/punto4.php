<html>
  <head>
    <title>Primer ejempo PHP</title>
  </head>
  <body>
    <?php
      $dia = date("d");
      if ($dia <= 10) {
        echo "Sitio web activo";
      } else {
        echo "Sitio fuera de servicio";
      }
    ?>
  </body>
</html>