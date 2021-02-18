<?php
	class ControladorPlantilla
	{
		// Llama la plantilla
		public function plantilla()
		{
			include "vistas/plantilla.php";
		}

		// Estilos dinamicos de la plantilla
		public function ctrEstiloPlantilla()
		{
			$tabla = "t_Plantilla";
			$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
			return $respuesta;
		}
	}
?>
