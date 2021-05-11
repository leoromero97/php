<html>
<head>
    <title>Vectores parte 3 en PHP</title>
    <style type="text/css">
      .button {
				background-color: #12405F;
        border-style: none;
				border-radius: 16px;
        color: #fff;
        height: 40px;
        width: 160px;
				font-size: 15px;
				font-weight: 600;
				cursor: pointer;
        text-align: center;
				text-decoration: none;
			} 
			
			.button:hover {
			  background-color: #122E41 ;
			}
    </style>
  </head>
  <body>
    <h3>Ingrese la cantidad de números que desea mostrar para calcular la suma</h3>
    <form action="vectores3.php" method="get">
      <h4>Número de elementos que desea mostrar:</h4>
      <input type="text" name="n" size="5">
      <input type="submit" value="Aceptar" class="button">
    </form>
    <br>
    <br>
    <form action="vectores3.php" method="post">
      <?php
      if (isset( $_GET['n']))
        {
          $n = $_GET['n'] - 1;
        }
        else {
          $n = 3;
        }
        for ($i=0; $i<=$n; $i++)
        {
          echo "Posición $i "; 
          echo "<input type='text' name='vec[]' size='10'>";
          echo "<br>";
        }
      ?>
      <br>
      <input type="submit" class="button">
    </form>
    <?php
      if ( isset( $_POST['vec']) )
      {
        $vector = $_POST['vec']; 
        $n = count($vector);
        $suma = 0;
        echo " El vector tiene $n elementos <br>";
        for ( $i=0; $i<$n; $i++)
        {
          echo "$i = $vector[$i] <br>";
          $suma = $suma + $vector[$i];
        }
        echo "La suma es $suma <br>";
      }
    ?>
  </body>
</html>
