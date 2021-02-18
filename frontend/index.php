<?php
	require_once "controladores/plantilla.controlador.php";
	require_once "modelos/plantilla.modelo.php";

	// Para utililzar el MVC, se utilizaran objetos.
	// Con este objeto se vincula el controlador con la vista.
	$plantilla = new ControladorPlantilla();
	$plantilla->plantilla();
?>
