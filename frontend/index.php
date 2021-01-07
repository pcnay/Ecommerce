<?php
	require_once "controladores/plantilla.controlador.php";

	// Para utililzar el MVC, se utilizaran objetos.
	// Con este objeto se vincula el controlador con la vista.
	$plantilla = new ControladorPlantilla();
	$plantilla->plantilla();
?>
