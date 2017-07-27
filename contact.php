<?php include("assets/layout/menu.php");?>
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contactate /</h1>
                        <p>Aquí podrás encontrar como comunicarte con nosotros</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                    <p>
	                    	Trabajamos de 9 a 18Hs, comunicate con nosotros en ese horario o deja un mensaje y lo responderemos lo antes posible.
	                    </p>
	                    <form role="form" action="assets/sendmail.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Nombre</label>
	                        	<input type="text" name="name" placeholder="Tu Nombre..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Tu Email..." class="contact-email" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Asunto</label>
	                        	<input type="text" name="subject" placeholder="Asunto..." class="contact-subject" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Mensaje</label>
	                        	<textarea name="message" placeholder="Tu mensaje..." class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Enviar</button>
	                    </form>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                    <h3>Estamos aquí</h3>
	                    <div class="map"></div>
	                    <h3>Address</h3>
	                    <p>Juan florio 318<br> Villa Luzuriaga, La Matanza</p>
	                    <p>Telefono: 4659-6973</p>
	                </div>
	            </div>
	        </div>
        </div>

<?php include("assets/layout/footer.php");?>