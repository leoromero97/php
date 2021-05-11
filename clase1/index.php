<html>
<head>
<title>Clase 1</title>
</head>
<body>
  <?php
    // strings
    echo "Hola Mundo!";
    echo "Estoy" . " " . "aprendiendo" . " " . "PHP";
    // variables
    $miNombre = "Leo";
    $miEdad = 24;
    echo "Mi nombre es" . " " . $miNombre . ", " . "y tengo" . " " . $miEdad . " " . "años\n";
    // IF
    $nota = 9;
    $notaApobrado = 7;
    if ($nota >= $notaApobrado) {
      echo "Aprobaste el parcial\n";
    } else {
      echo "Desaprobaste el parcial\n";
    }
    // FOR
    $i = 0;
    echo "<table align='center' border 1>";
    for($i=0; $i<10; $i++) {
      echo "<tr><td>"."Mi correo es leonardo@gmail.com </td></tr>";
    }
    echo "</table";
  ?>
  </body>
</html>