<?php
	require_once ("conexion.php");

	class ModeloProductos
	{
		// Se declara estatico porque se le envian parámetros.
		static public function mdlMostrarCategorias($tabla)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
			$registros = $stmt->fetchAll();

			// Cerrar la conexion de la instancia de la base de datos.
			$stmt->closeCursor();
			$stmt=null;
			return $registros;
		}

		// Se declara estatico porque se le envian parámetros.
		static public function mdlMostrarSubCategorias($tabla,$id_categoria)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id_categoria ");
			$stmt->bindParam(":id_categoria",$id_categoria,PDO::PARAM_INT);
			$stmt->execute();
			$registros = $stmt->fetchAll();

			// Cerrar la conexion de la instancia de la base de datos.
			$stmt->closeCursor();
			$stmt=null;
			return $registros;
		}


	}
?>