<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consulta</title>
</head>

<body>

  <?php
  $mysql = new mysqli("localhost", "c1391655_base1", "ZEzivi88ru", "c1391655_base1");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

  if ($reg = $registros->fetch_array())
    echo 'La descripción del rubro es:' . $reg['descripcion'];
  else
    echo 'No existe un rubro con dicho código';

  $mysql->close();

  ?>
</body>

</html>