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
			// var_dump($respuesta);
			// Se tiene que pasar de un objeto arreglo aun String.
			echo json_encode($respuesta);


		}
	}
	
	// Instanciando la clase
	$objeto = new AjaxPlantilla();
	$objeto->ajaxEstiloPlantilla();
	
?>
