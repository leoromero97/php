<html lang="es">
   <head>
      <title>Consulta de noticias</title>
      <link href="estilo.css" rel="stylesheet" type="text/css">
      <link href="css/components.css" rel="stylesheet" type="text/css">
      <?PHP
         // Incluir bibliotecas de funciones
         include ("lib/fecha.php");
      ?>
   </head>
   <body>
      <hi>Consulta de Cursos</hi>
      <form NAME="selecciona" ACTION="consultacursos.php" METHOD="POST">
         <p>Mostrar materias del curso:</p>
         <div   div class="content-select">
            <select name = "categoria" class="select">
	         	<option value="0">Seleccione</option>
	         		<?php
	         		$mysqli = new mysqli('localhost', 'c1341491_prueba', 'zo54seLUka', 'c1341491_prueba');
	         		?>
	         		<?php
	         		$query = $mysqli -> query ("SELECT * FROM cursos");
	         		while ($valores = mysqli_fetch_array($query)) {
	         			echo '<option value="'.$valores[id].'">'.$valores[curso].'</option>';
	         		}
	         		?>
	         </select>
            <span></span>
         </div>
         <input TYPE="submit" NAME="actualizar" VALUE="Actualizar">
      </form>
      <?PHP
         // Conectar con el servidor de base de datos
         $conexion = mysql_connect ("localhost", "c1341491_prueba", "zo54seLUka")
         or die ("No se puede conectar con el servidor");
         // Seleccionar base de datos
         mysql_select_db ("c1341491_prueba")
            or die ("No se puede seleccionar la base de datos");
         // Enviar consulta
         $instruccion = "select * from materias inner join cursos";
         $actualizar = $_REQUEST['actualizar'];
         $categoria = $_REQUEST['categoria'];
         if (isset($actualizar) && $categoria != "0")
            $instruccion = $instruccion . " where idcurso='$categoria'";

         $instruccion = $instruccion . "order by idcurso desc";
         $consulta = mysql_query ($instruccion, $conexion)
            or die ("Fallo en la consulta");

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>Id</TH>\n");
         print ("<TH>Materias</TH>\n");
         print ("<TH>Id curso</TH>\n");
         print ("<TH>Id curso</TH>\n");
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado['id'] . "</TD>\n");
            print ("<TD>" . $resultado['materia'] . "</TD>\n");
            print ("<TD>" . $resultado['idcurso'] . "</TD>\n");
            print ("<TD>" . $resultado['curso'] . "</TD>\n");
               print ("<TD>&nbsp;</TD>\n");

            print ("</TR>\n");
         }

         print ("</TABLE>\n");
      }
      else
         print ("No hay materias disponibles para ese curso");

   // Cerrar conexi�n
   mysql_close ($conexion);
   ?>

   </body>
</html>
