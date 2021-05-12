<html>
  <head>
    <title>Profesores</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-color: #c3c2c2;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        color: #a0a0a0;
        color: #d23557;
        color: #121212;
      }
    
      body {
        width: 100%;
        padding: 20px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        text-align: center;
      }
    
      input {
        border: #d23557 2px solid;
        border-radius: 6px;
        background: #121212;
        color: #fff;
        padding: 10px;
        outline-style: none;
      }
        .formulario {
        border: 2px solid black;
        border-radius: 10px;
        background-color: #121212;
        height: 600px;
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        box-shadow: 0 0 10px #121212;
      }
    
      .button {
        background-color: #d235575e;
        border: 2px solid #d23557;
        border-radius: 6px;
        height: 54px;
        text-decoration: none;
        width: 220px;
        font-size: 18px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      } 
    
      .button:hover {
        background-color: #d23557;
      }
    </style>
  </head>
  <body>
    <?php
    $conexion=mysqli_connect("localhost","c1950135_datosC3","doneraBU68","c1950135_datosC3") or
        die("Problemas con la conexión");
  
    mysqli_query($conexion,"insert into profesores(nombre,apellido,tipo_documento,cuit,numero_documento,telefono,mail) values 
                           ('$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[tipo_documento],'$_REQUEST[cuit]','$_REQUEST[numero_documento]','$_REQUEST[telefono]',$_REQUEST[mail])")
      or die("Problemas en el select".mysqli_error($conexion));
  
    mysqli_close($conexion);
  
    echo "El producto fue dado de alta.";
  
    ?>
    <a href="https://repartear.com/php/clase5/" class="button">Volver</a>
  </body>
</html>