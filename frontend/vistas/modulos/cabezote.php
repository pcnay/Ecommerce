
<!-- Se comienza agragar el archivo HTML del Ecommerce --> 
<!-- TOP --> 
<div class="container-fluid barraSuperior" id="top">
	<div class = "container">
		<div class="row">
			<!--  Sección para Redes Sociales 
				SE aplica Responsive en las pantallas, varios tamaños
			-->
			<div class = "col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				<ul>
		
					<li>
						<a href="http://facebook.com/" target="_blank">
							<!-- Se utiliza fontaweson para los iconos de la redes sociales --> 
							<i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://youtube.com/" target="_blank">
							<i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://twitter.com/" target="_blank">
							<i class="fa fa-twitter redSocial twitterBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://google.com/" target="_blank">
							<i class="fa fa-google-plus redSocial googleBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://instagram.com/" target="_blank">
							<i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
						</a>
					</li>

				</ul>

			</div>

			<!-- Seccion Para Registro de Usuario -->
			<div class = "col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				<ul>
				
					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>

		</div> <!-- <div class="row"> -->

	</div> <!-- <div class = "container"> -->

</div> <!-- class="container-fluid" id="top"> -->
	
<!-- Header -->
<header class= "container-fluid">
	<div class = "container">
		<div class="row" id="cabezote">

			<!-- LOGOTIPO-->
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">				
				<a href="#">						
					<img src="http://162.0.238.251/ecommerce/backend/vistas/img/plantilla/logo.png" class="img-responsive">
				</a>				
			</div> <!-- <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo"> -->

			<!-- Categorias y Buscador -->
			<!-- Se dividen las 12 columnas que tiene asignado "Categorias"[4 Columnas-col-lg-4], "Buscador" [12 Columnas-col-lg-8] --> 
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
				
				<!-- Boton de Categorias -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">					
					<p>CATEGORÍAS
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>					
					</p>
				</div> <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias"> -->

				<!-- Estos INPUT se obtienen de BootStrap, en la página de https://www.w3schools.com --> 
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	
						<span class="input-group-btn">
							<a href="#">
								<button class="btn btn-default backColor" type="submit">	
								<i class="fa fa-search"></i>
								</button>
							</a>
						</span>
				</div><!-- <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador"> -->

			</div> <!-- <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12"> -->

			<!-- Seccion de Carrito de Compras-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				<a href="#">
					<button class="btn btn-default pull-left backColor"> 							
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>						
					</button>
				</a>

				<p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>	

			</div><!-- <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito"> -->

		</div> <!-- <div class="row"> id="cabezote"-->

		<!-- Seccion de Categorias --> 
		<!-- Se separan para manejar en los diferentes tipos de pantallas -->
		<div class="col-xs-12 backColor" id="categorias">
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4>
					<a href="#" class="pixelCategorias">Categorias 1</a>
				</h4>
				<hr>
				<ul>					
					<li><a href="#" class="pixelSubCategorias">Categoria 1</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 2</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 3</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 4</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 5</a></li>								
				</ul>

			</div><!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12"> -->

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4>
					<a href="#" class="pixelCategorias">Categorias 2</a>
				</h4>
				<hr>
				<ul>					
					<li><a href="#" class="pixelSubCategorias">Categoria 1</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 2</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 3</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 4</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 5</a></li>								
				</ul>

			</div><!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12"> -->

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4>
					<a href="#" class="pixelCategorias">Categorias 3</a>
				</h4>
				<hr>
				<ul>					
					<li><a href="#" class="pixelSubCategorias">Categoria 1</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 2</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 3</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 4</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 5</a></li>								
				</ul>

			</div><!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12"> -->

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4>
					<a href="#" class="pixelCategorias">Categorias 4</a>
				</h4>
				<hr>
				<ul>					
					<li><a href="#" class="pixelSubCategorias">Categoria 1</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 2</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 3</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 4</a></li>
					<li><a href="#" class="pixelSubCategorias">Categoria 5</a></li>								
				</ul>

			</div><!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12"> -->


		</div><!-- <div class="col-xs-12 backColor" id="categorias"> -->

	</div> <!-- <div class = "container"> -->

</header>
