<?php
	// Se vuelve aagregar los archivos ya que se carga en un segundo plano.
	// Solo lo requiere Javascript, por lo que trabaja en segundo plano, por lo que se vuelve a requerir.
	require_once "../controladores/plantilla.controlador.php";
	require_once "../modelos/plantilla.modelo.php";

	class AjaxPlantilla
	{
		public function ajaxEstiloPlantilla()
		{
			$respuesta = ControladorPlantilla::ctrEstiloPlantilla();
			// El contenido de este arreglo es mostrado en la parte de "Console" del navegador.
			//var_dump($respuesta);
			
			// Se tiene que pasar de un objeto arreglo aun String.
			// Se utiliza "echo" para mandarlo al Ajax, desde donde se llamo (plantilla.js)
			echo json_encode($respuesta);
		}

	} // class AjaxPlantilla
	
	// Instanciando la clase
	$objeto = new AjaxPlantilla();
	$objeto->ajaxEstiloPlantilla();
	
?>
