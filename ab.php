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
	            		<?php

	            		// PARA CREAR UN NUEVO PRODUCTO SE UTILIZA ESTE FORMULARIO
	            		
	            			if($_GET['accion'] == "1"){
	            				?>
	            				<form>
									  <div class="form-group">
										    <label for="Nombre">Nombre</label>
										    <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
									  </div>
									  <div class="form-group">
										    <label for="Descripcion">Descripcion</label>
										    <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del producto">
									  </div>
									  <div class="form-group">
										    <label for="Nombre">Precio</label>
										    <input type="text" class="form-control" id="precio" placeholder="Precio del producto">
									  </div>
									  <div class="form-group">
										    <label for="exampleSelect2">Tipo</label>
										    <select class="form-control" id="tipoProducto">
										      <option value="">1</option>
										      <option value="">2</option>
										      <option value="">3</option>
										      <option value="">4</option>
										      <option value="">5</option>
										    </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 1</label>
									    <input type="file" class="form-control-file" id="imagen1" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 2</label>
									    <input type="file" class="form-control-file" id="imagen2" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 3</label>
									    <input type="file" class="form-control-file" id="imagen3" aria-describedby="fileHelp">
									  </div>




									  <button type="submit" class="btn btn-primary">Enviar</button>
								</form>
								<?php


								// PARA EDITAR SE UTILIZA ESTE FORMULARIO
	            			}else if($_GET['accion']  == "2"){
	            				?>
	            				<form>
									  <div class="form-group">
										    <label for="Nombre">Nombre</label>
										    <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
									  </div>
									  <div class="form-group">
										    <label for="Descripcion">Descripcion</label>
										    <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del producto">
									  </div>
									  <div class="form-group">
										    <label for="Nombre">Precio</label>
										    <input type="text" class="form-control" id="precio" placeholder="Precio del producto">
									  </div>
									  <div class="form-group">
										    <label for="exampleSelect2">Tipo</label>
										    <select class="form-control" id="tipoProducto">
										      <option value="">1</option>
										      <option value="">2</option>
										      <option value="">3</option>
										      <option value="">4</option>
										      <option value="">5</option>
										    </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 1</label>
									    <input type="file" class="form-control-file" id="imagen1" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 2</label>
									    <input type="file" class="form-control-file" id="imagen2" aria-describedby="fileHelp">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputFile">Imagen 3</label>
									    <input type="file" class="form-control-file" id="imagen3" aria-describedby="fileHelp">
									  </div>




									  <button type="submit" class="btn btn-primary">Enviar</button>
								</form>
	            				<?php
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