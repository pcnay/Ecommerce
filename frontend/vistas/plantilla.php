<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
			<meta name="title" content="Tienda Virtual">
			<meta name="descripcion" content="Curso Ecommerce">
			<meta name="keyword" content = "Este curso es para aprender a realizar un Ecommerce Basico">
			<title>Tienda Virtual</title>
			<?php
				$icono = ControladorPlantilla::ctrEstiloPlantilla();
				echo '	<link rel="icon" href="https://www.miportalweb.org/ecommerce/backend/'.$icono["icono"].'">';

				// Mantener la ruta Fija del Proyecto.
				// para que mantenga fija la ruta de la URL, en los casos de que se envie parametros.
				//$ruta = new Ruta();
				//$valor = $ruta->ctrRuta();
				$url = Ruta::ctrRuta();
				//print_r($ruta);
				//var_dump($ruta)

			?>

			<!-- Para colocar el icono en la pestana de la aplicacion 
			<link rel="icon" href="https://www.miportalweb.org/ecommerce/backend/vistas/img/plantilla/icono.png"> -->

			<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
			<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

			<!-- Font Ubuntu : https://fonts.google.com/ -->
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

			<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
			<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">				

			<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
			<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

		</head>
		<body>
			<!-- CABEZOTE-->
			<?php
				include"modulos/cabezote.php";
				$rutas = array();
				$ruta = null;
				// Donde se agrega las rutas (lista blanca) de las paginas a mostrar.
				// Determina si existe la variable Global "$_GET"
				
				//print_r("valor del -ruta = ".$_GET["ruta"]);

				if (isset($_GET["ruta"]))
				{ 
					
					//Separa el contenido del la URL en indexes de un arreglo, el separador es "/". 					
					$rutas = explode("/",$_GET["ruta"]);
					// var_dump($rutas);
					//  Contiene la ruta real : bolso/valor1/valor2/valor3
					// $rutas[0] = bolso, 
					
					
					//var_dump($rutas[0]);
					$item = "ruta";
					$valorRuta = $rutas[0];
					//var_dump($valorRuta);
					$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item,$valorRuta);
				
					//var_dump($rutaCategorias["ruta"]);

					// URL lista blanca de Categorias
					if ($valorRuta == $rutaCategorias["ruta"])
					{
						$ruta = $valorRuta;						
					}

					// URL amigables de Subcategorias.
					$item = "ruta";
					$valorRuta = $rutas[0];
					$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item,$valorRuta);
					// var_dump ($rutaSubCategorias);
					// Como devuelve un arreglo aun sea un solo elmento, ya que se retorno en el modelo como "fetchAll"
					foreach ($rutaSubCategorias as $key => $value)
					{
						if ($valorRuta == $value["ruta"])
						{
							$ruta = $valorRuta;						
						}	
					}

					if ($ruta != null)
					{
						include "modulos/productos.php";					
					}
					else
					{
						include "modulos/error404.php";
					
					}
				}
				
			?>
			<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
			<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>

		</body>
	</html>
	