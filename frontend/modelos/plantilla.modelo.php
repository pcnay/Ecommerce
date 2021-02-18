<?php
	require_once "conexion.php";
	class ModeloPlantilla
	{
		// Se coloca "static" porque se recibe parametros
		static public function mdlEstiloPlantilla($tabla)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
			return $stmt->fetch(); 
			$stmt->close();
		}
	}
?>
