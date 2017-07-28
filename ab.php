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
	            		<div class="col-sm-6 wow">
	            		<?php

	            		// PARA CREAR UN NUEVO PRODUCTO SE UTILIZA ESTE FORMULARIO

	            			if($_GET['accion'] == "1"){
	            				?>
	            				<form action="assets/php/crearProducto.php" method="post" enctype="multipart/form-data">
									  <div class="form-group">
										    <label for="Nombre">Nombre</label>
										    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto">
									  </div>
									  <div class="form-group">
										    <label for="Descripcion">Descripcion</label>
										    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion del producto">
									  </div>
									  <div class="form-group">
										    <label for="Nombre">Precio</label>
										    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio del producto" onkeypress="return soloNumeros(event);">
									  </div>
									  <div class="form-group">
										    <label for="exampleSelect2">Tipo</label>
										    <select class="form-control" name="tipo" id="tipoProducto">
										    <?php
										    $resultado = listarCategorias();
										    while($cat = mysqli_fetch_array($resultado)){
										    
										      echo '<option value="'.$cat['idtipo'].'">'.$cat['nombre'].'</option>';
										  	}
										      
										     ?>
										    </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 1</label>
									    <input type="file" name="file" class="form-control-file" id="file" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 2</label>
									    <input type="file" name="file1" class="form-control-file" id="file1" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 3</label>
									    <input type="file" name="file2" class="form-control-file" id="imagen2" aria-describedby="fileHelp">
									  </div>




									  <button type="submit" class="btn btn-primary">Enviar</button>
								</form>
								<?php


								// PARA EDITAR SE UTILIZA ESTE FORMULARIO
	            			}else if($_GET['accion']  == "2"){
	            				$id = $_GET['id'];
	            				$resultado = traerProducto($id);
	            				while($valor = mysqli_fetch_array($resultado)){
	            				?>
	            				<form action="assets/php/editarProducto.php" method="post" enctype="multipart/form-data">
									  <div class="form-group">
										    <label for="Nombre">Nombre</label>
										    <?php echo '<input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre" value="'.$valor["nombre"].'">'; ?>
									  </div>
									  <div class="form-group">
										    <label for="Descripcion">Descripcion</label>
										   <?php echo '<input type="text" class="form-control" id="descripcion" placeholder="Descripcion del producto" name="descripcion" value="'.$valor["descripcion"].'">'; ?>
									  </div>
									  <div class="form-group">
										    <label for="Nombre">Precio</label>
										    <?php echo '<input type="text" class="form-control" id="precio" placeholder="Precio del producto" onkeypress="return soloNumeros(event);" name="precio" value="'.$valor["precio"].'"">';?>
									  </div>
									  <div class="form-group">
										    <label for="exampleSelect2">Tipo</label>
										    <select class="form-control" name="tipo" id="tipoProducto">
										    <?php
										    $resultado = listarCategorias();
										    while($cat = mysqli_fetch_array($resultado)){
										    if($valor['idtipo'] == $cat['idtipo']){
										      echo '<option value="'.$cat['idtipo'].'" selected="selected">'.$cat['nombre'].'</option>';
										    }else{
										      echo '<option value="'.$cat['idtipo'].'">'.$cat['nombre'].'</option>';
										    }
										    
										  	}
										      
										     ?>
										     </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 1</label>
									    <?php echo '<input type="file" class="form-control-file" id="imagen1" aria-describedby="fileHelp" name="file" value="'.$valor["imagen1"].'">'; ?>
									  </div>
									  <?php echo '<input type="hidden" value="'.$valor["idProducto"].'" name="id"/>'; ?>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 2</label>
									    <input type="file" class="form-control-file" name="file1" id="imagen2" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 3</label>
									    <input type="file" class="form-control-file" name="file2" id="imagen3" aria-describedby="fileHelp">
									  </div>




									  <button type="submit" class="btn btn-primary">Enviar</button>
								</form>
	            				<?php
	            				}
	            			}
	            		?>
	            		</div>
	            	</div>
            	</div>
        	</div>
        </div>
<?php
	include("assets/layout/footer.php");
?>