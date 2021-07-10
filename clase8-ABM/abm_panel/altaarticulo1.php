<!doctype html>
<html>
<head>
  <title>Alta de artículo</title>
</head>  
<body>
  <form method="post" action="altaarticulo2.php">
  Ingrese descripcion del artículo:
  <input type="text" name="descripcion" required>
  <br>
  Ingrese precio:
  <input type="text" name="precio" required>
  <br>
  Seleccione rubro:
  <select name="codigorubro">
  <?php
	$mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
	  die("Problemas con la conexión a la base de datos");
  
    $registros=$mysql->query("select codigo,descripcion from rubros") or
      die($mysql->error);
	while ($reg=$registros->fetch_array())
    {
	   echo "<option value=\"".$reg['codigo']."\">".$reg['descripcion']."</option>";
    }		
  ?>  
  </select>
  <br>
  <input type="submit" value="confirmar">
  </form>
</body>
</html>