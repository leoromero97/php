<html>
  <head>
    <title>Cuarto ejempo PHP</title>
  </head>
  <body>
    <?php
      $valor = rand(1, 10);
      echo "<h2> Ejemplos </h2>";
      echo "El valor sorteado es $valor<br>";
      if ($valor <= 5) {
      echo "Es menor o igual a 5";
      } else {
      echo "Es mayor a 5";
      }
      echo "<br>";
      echo "**************************";
      echo "<br>";
      $valorEjemplo2 = rand(1, 100);
      echo "El valor sorteado es $valorEjemplo2<br>";
      if ($valorEjemplo2 <= 9) {
      echo "Tiene un dígito";
      } else if ($valorEjemplo2 < 100) {
      echo "Tiene 2 dígitos";
      } else {
      echo "Tiene 3 dígitos";
      }
      echo "<br>";
      echo "<br>";
      echo "**************************";
      echo "<h3> Problema propuesto </h3>";
      echo "<br>";
      $valorProblema = rand(1,3);
      if ($valorProblema == 1) {
        echo "El valor es uno";
      } else if ($valorProblema == 2) {
        echo "El valor es dos";
      } else {
        echo "El valor es tres";
      }
    ?>
  </body>
</html>