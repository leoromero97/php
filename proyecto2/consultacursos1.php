<HTML LANG="es">

<HEAD>
   <TITLE>Consulta de noticias</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

<SCRIPT LANGUAGE='JavaScript'>
<!--
// Funci�n que actualiza la p�gina al cambiar la categor�a de noticia
   function actualizaPagina ()
   {
      i = document.forms.selecciona.categoria.selectedIndex;
      categoria = document.forms.selecciona.categoria.options[i].value;
      window.location = 'consulta_noticias4.php?categoria=' + categoria;
   }
// -->
</SCRIPT>

<?PHP
// Incluir bibliotecas de funciones
   include ("lib/fecha.php");
?>

</HEAD>

<BODY>

<H1>Consulta de cursos/materias</H1>

<?PHP

   // Conectar con el servidor de base de datos
      $conexion = mysql_connect ("localhost", "c1341491_prueba", "zo54seLUka")
         or die ("No se puede conectar con el servidor");

   // Seleccionar base de datos
      mysql_select_db ("c1341491_prueba")
         or die ("No se puede seleccionar la base de datos");

   // Mostrar formulario con elemento SELECT para seleccionar curso
      print ("<FORM NAME='selecciona' ACTION='consulta_noticias4.php' METHOD='POST'>\n");
      print ("<P>Mostrar cursos/materia:\n");
      print ("<SELECT NAME='categoria' ONCHANGE='actualizaPagina()'>\n");

   // Obtener los valores del tipo enumerado
      $instruccion = "SHOW columns FROM naterias LIKE 'idcurso'";
      $consulta = mysql_query ($instruccion, $conexion);
      $row = mysql_fetch_array ($consulta);

   // Pasar los valores a una tabla y a�adir el valor "Todas" al principio
      $lis = strstr ($row[1], "(");
      $lis = ltrim ($lis, "(");
      $lis = rtrim ($lis, ")");
      $lis = "'Todas'," . $lis;
      $lista = explode (",", $lis);

   // Mostrar cada valor en un elemento OPTION
      $categoria = $_REQUEST['idcurso'];
      if (isset($categoria))
         $selected = $categoria;
      else
         $selected = "Todas";
      for ($i=0; $i<count($lista); $i++)
      {
         $cad = trim ($lista[$i], "'");
         if ($cad == $selected)
            print ("   <OPTION VALUE='$cad' SELECTED>$cad\n");
         else
            print ("   <OPTION VALUE='$cad'>$cad\n");
      }

      print ("</SELECT></P>\n");
      print ("</FORM>\n");

   // Enviar consulta
      $instruccion = "select * from materias";

      if (isset($categoria) && $categoria != "Todas")
         $instruccion = $instruccion . " where idcurso='$categoria'";

      $instruccion = $instruccion . " order by idcurso desc";
      $consulta = mysql_query ($instruccion, $conexion)
         or die ("Fallo en la consulta");

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>ID</TH>\n");
         print ("<TH>Materia</TH>\n");
         print ("<TH>Idcurso</TH>\n");
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado['id'] . "</TD>\n");
            print ("<TD>" . $resultado['materia'] . "</TD>\n");
            print ("<TD>" . $resultado['idcurso'] . "</TD>\n");
            

            if ($resultado['imagen'] != "")
               print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
                      "'><IMG BORDER='0' SRC='img/ico-fichero.gif' ALT='Imagen asociada'></A></TD>\n");
            else
               print ("<TD>&nbsp;</TD>\n");

            print ("</TR>\n");
         }

         print ("</TABLE>\n");
      }
      else
         print ("No hay noticias disponibles");

// Cerrar conexi�n
   mysql_close ($conexion);

?>

</BODY>
</HTML>
