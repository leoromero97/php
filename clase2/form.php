<html>
<head>
  <title>Captura de datos del formulario</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <?php
    echo "<h1>Datos del formulario</h1>";
    echo "El nombre ingresado es: ";
    echo $_REQUEST['name'];
    echo "<br>";
    echo "La edad ingresada es: ";
    echo $_REQUEST['age'];
    echo "<br>";
    echo "<br>";
    if($_REQUEST['age'] >= 18) {
      echo "La persona es mayor de edad";
    } else {
      echo "La persona no es mayor de edad";
    }
    echo "<br>";
  ?>
</body>
</html>