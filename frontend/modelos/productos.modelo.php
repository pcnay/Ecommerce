<?php
	require_once ("conexion.php");

	class ModeloProductos
	{
		// Se declara estatico porque se le envian parámetros.
		static public function mdlMostrarCategorias($tabla,$item,$valor)
		{
			if ($item != null)
			{
				// Se realiza para que sea generico el campoa buscar.
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
				$stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
				$stmt->execute();
				// Retorna un solo registro.
				$registros = $stmt->fetch();			
				// Cerrar la conexion de la instancia de la base de datos.
				$stmt->closeCursor();
				$stmt=null;
				return $registros;
			}
			else
			{
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
				$stmt->execute();
				$registros = $stmt->fetchAll();
				// Cerrar la conexion de la instancia de la base de datos.
				$stmt->closeCursor();
				$stmt=null;
				return $registros;
			}

		}

		// Se declara estatico porque se le envian parámetros.
		static public function mdlMostrarSubCategorias($tabla,$item,$valor)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
			$stmt->execute();
			$registros = $stmt->fetchAll();

			// Cerrar la conexion de la instancia de la base de datos.
			$stmt->closeCursor();
			$stmt=null;
			return $registros;
		}


	}
?>