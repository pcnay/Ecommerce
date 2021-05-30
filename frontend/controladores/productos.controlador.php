<?php
	class ControladorProductos
	{
		// "Static" porque se envia parámetro.
		static public function ctrMostrarCategorias($item,$valor)
		{
			$tabla = "t_Categoria";
			$respuesta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);

			return $respuesta;
		}

		// "Static" porque se envia parámetro.
		static public function ctrMostrarSubCategorias($item,$valor)
		{
			$tabla = "t_Subcategoria";
			$respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$item,$valor);
			return $respuesta;
		}

	}
?>
