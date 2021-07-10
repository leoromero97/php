<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 ?>
<div class="row">
	<div class="col-sm-12">
  <h2 class="titulo1 margen-inferior2">Tabla de padres</h2>
		<table class="table table-condensed table-bordered">
		<caption>
	  	<button class="boton-primario margen-inferior2" data-toggle="modal" data-target="#modalNuevo">
				Agregar padre  
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td class="tituloTabla">Nombre</td>
				<td class="tituloTabla">Apellido</td>
				<td class="tituloTabla">Tipo de documento</td>
				<td class="tituloTabla">Numero de documento</td>
        <td class="tituloTabla">Domicilio</td>
				<td class="tituloTabla">Telefono</td>
				<td class="tituloTabla">Email</td>
				<td class="tituloTabla">Cantidad de hijos</td>
        <td class="tituloTabla">Editar</td>
				<td class="tituloTabla">Eliminar</td>
			</tr>

			<?php 
				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,cantidad_hijos 
						from padres where id='$idp'";
					}else{
						$sql="SELECT id,nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,cantidad_hijos 
						from padres";
					}
				}else{
					$sql="SELECT id,nombre,apellido,tipo_documento,numero_documento,domicilio,telefono,mail,cantidad_hijos 
						from padres";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						  $ver[1]."||".
						  $ver[2]."||".
						  $ver[3]."||".
							$ver[4]."||".
						  $ver[5]."||".
						  $ver[6]."||".
              $ver[7]."||".
              $ver[8]."||"
			 ?>

			<tr>
				<td class="textoTabla"><?php echo $ver[1] ?></td>
				<td class="textoTabla"><?php echo $ver[2] ?></td>
				<td class="textoTabla"><?php echo $ver[3] ?></td>
				<td class="textoTabla"><?php echo $ver[4] ?></td>
				<td class="textoTabla"><?php echo $ver[5] ?></td>
				<td class="textoTabla"><?php echo $ver[6] ?></td>
				<td class="textoTabla"><?php echo $ver[7] ?></td>
        <td class="textoTabla"><?php echo $ver[8] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>
