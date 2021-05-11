<html>
  <head>
    <title>Calculadora PHP</title>
  </head>
  <body>
    <?
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $a + $b;
      $d = $a * $b;
      $e = $a - $b;
      echo "La suma de $a + $b es: " .$c . "<br>";
      echo "La multiplicación de $a * $b es: " .$d ."<br>";
      echo "La resta de $a - $b es: " .$e . "<br>";
    ?>
  </body>
</html>