<?php include("assets/db/conexion.php");
	  include("assets/php/funcionesAdmin.php");
	  	/* start the session */
	  session_start();
	  filtrarUsuarios();
	  include("assets/layout/menuAdmin.php");
?>
	 <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1>Listado de productos <span class="violet">Coleco</span></h1>
	            		<div class="col-sm-12 wow">
	            		<button type="button" class="btn btn-outline-primary">Crear<a href="ab.php?accion=1"></a></button>
	            			<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th>#</th>
								      <th>Nombre</th>
								      <th>Descripcion</th>
								      <th>Precio</th>
								      <th>Imagen1</th>
								      <th>editar</th>
								      <th>borrar</th>
								    </tr>
								  </thead>
								  <tbody>
								  <?php
								  	$resultado = listarProductos();
								  	while($valor = mysqli_fetch_array($resultado)){

								    echo '<tr>
								      <th scope="row">'.$valor['idProducto'].'</th>
								      <td>'.$valor['nombre'].'</td>
								      <td>'.$valor['descripcion'].'</td>
								      <td>'.$valor['precio'].'</td>
								      <td>'.$valor['imagen1'].'</td>
								      <td><a href="ab.php?id='.$valor['idProducto'].'&accion=2">Editar</a></td>
								      <td>X</td>
								    </tr>';
								    }
								?>
								  </tbody>
							</table>
	            		</div>
	            	</div>
            	</div>
        	</div>
        </div>
<?php
	include("assets/layout/footer.php");
?>