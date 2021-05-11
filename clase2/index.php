<html>
  <head>
    <title>Estructuras repetitivas PHP</title>
  </head>
  <body>
    <?php
      echo "<h1> Estructuras repetitivas </h1>";
      echo "<br>";
      echo "<br>";
      echo "**************************";
      echo "<h2> Problemas </h2>";
      echo "<br>";
      echo "Tabla de multiplicar del 2 hasta 20";
      echo "<h3> For </h3>";
      echo "<br>";
      for ($t=2; $t < 20; $t + 2) {
        echo $t;
        echo "--";
      }
      echo "<br>";
      echo "<h3> While </h3>";
      echo "<br>";
      echo "Tabla de multiplicar del 3 hasta 30";
      $valorInicial = 3;
      $valorTope = 30;
      while ( $valorInicial <= $valorTope) {
        echo $valorInicial;
        echo "<br>";
        $valorInicial + 3;
      }
      echo "<br>";
      echo "<h3> Do while </h3>";
      echo "<br>";
      echo "Tabla de multiplicar del 2 hasta 20";
      $valorInicial = 2;
      $valorTope = 20;
      do {
        echo $valorInicial;
        echo "<br>";
        $valorInicial + 2;
      } while ( $valorInicial <= $valorTope);
    
      ?>
  </body>
</html>