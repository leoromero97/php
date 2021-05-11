<html>
<head>
    <title>Vectores parte 2 PHP</title>
    <style type="text/css">
      .button {
				background-color: #8CC449;
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
			  background-color: #60971E;
			}
    </style>
  </head>
  <body>
    <h3>Escriba 9 números para calcular la suma</h3>
    <form action="vectores2.php" method="post">
      <?php
        $n = 8;
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
        $vector = $_POST['vec']; $n = count($vector); $suma = 0;
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
