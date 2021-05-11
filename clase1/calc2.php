<html>
  <head>
    <title>Calculadora PHP Avanzada</title>
    <style type="text/css">
      .button {
				background-color: #8CC449;
        border-style: none;
				border-radius: 16px;
        color: #fff;
        height: 40px;
        width: 120px;
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
    <?php
      $a = $_POST['a'];
      $b = $_POST['b'];
      if( isset ($_POST['btsuma'])) {
        $c = $a + $b; echo " $a + $b es ".$c;
      }
      if( isset ($_POST['btresta'])) {
        $c = $a - $b; echo " $a - $b es ".$c;
      }
      if( isset ($_POST['btmult'])) {
        $c = $a * $b; echo " $a * $b es ".$c;
      }
      if( isset ($_POST['btdiv'])) {
        if ($b != 0) $c = $a / $b;
        else $c = 0;
        echo " $a / $b es ".$c;
      }
    ?>
    <h3>Ingrese dos números enteros</h3>
      A: <input type="text" name="a" size="10" value="<? echo $a; ?>">
      B: <input type="text" name="b" size="10" value="<? echo $b; ?>">
      <br>
      <br>
      <div></div>
    <form name="calc" action="calc2.php" method="post">
      <input type="submit" name="btsuma" value="Suma" class="button">
      <input type="submit" name="btresta" value="Resta" class="button">
      <input type="submit" name="btmult" value="Multiplicación" class="button">
      <input type="submit" name="btdiv" value="División" class="button">
    </form>
    <br>
  </body>
</html>