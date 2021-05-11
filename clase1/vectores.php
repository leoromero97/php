<html>
  <head>
    <title>Clase 1 - vectores</title>
  </head>
  <body>
    <?php 
       $ciudad[] = "San cristobal";
       $ciudad[] = "Cucuta";
       $ciudad[] = "Maracaibo";
       $ciudad[] = "Caracas";
       $ciudad[] = "Buenos Aires";
       $n = count($ciudad);
    ?>
    <h1> <?php echo "Numero de ciudades " . $n ?></h1>
      <?php
        for($i = 0; $i < $n; $i++)
          echo "<br> Ciudad $i <h2> " . $ciudad[$i]. "</h2>";
      ?>
  </body>
</html>