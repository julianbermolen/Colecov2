<?php include("assets/layout/menu.php");

	  include("assets/php/funciones.php");?>
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-camera"></i>
                        <h1>Trabajos /</h1>
                        <p>Aquí, algunos de nuestros trabajos</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">Todo</a> / 
	            	</div>
	            </div>
	            <div class="row">
	            <div class="col-sm-12 portfolio-masonry">
	            <?php 
			        $resultado = listarProductos();
			        while($valor = mysqli_fetch_array($resultado)){ ?>
			            	
				               <?php echo '<div class="portfolio-box">'; ?>
				                	<div class="portfolio-box-container">
					                	<?php echo '<img src="assets/img/portfolio/'.$valor['imagen1'].'" alt="" data-at2x="assets/img/portfolio/work1.jpg">'; ?>
					                	
					                	
					                	<div class="portfolio-box-text">
					                		<?php echo '<h3>'.$valor['nombre'].'</h3>
					                		<p>'.$valor['descripcion'].'</p>
					                		<p>Precio: '.$valor['precio'].'</p>'; ?>
					                	</div>
					                </div>
				                </div>
				                <?php 

				            		} 

				                ?>
		               
	                </div>
	            </div>
	        </div>
        </div>

 <?php include("assets/layout/footer.php");?>