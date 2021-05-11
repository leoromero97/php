<html>
  <head>
    <title>Primer ejempo PHP</title>
  </head>
  <body>
    <?php
      $num = rand(1, 100);
      echo $num;
      echo "<br>";
      if ($num <= 50) {
        echo "El número random es menor o igual a 50";
      } else {
        echo "El número random es mayor a 50";
      }
    ?>
  </body>
</html>