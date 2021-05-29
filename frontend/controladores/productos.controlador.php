<?php
	class ControladorProductos
	{
		public function ctrMostrarCategorias()
		{
			$tabla = "t_Categoria";
			$respuesta = ModeloProductos::mdlMostrarCategorias($tabla);

			return $respuesta;
		}

		// "Static" porque se envia parámetro.
		static public function ctrMostrarSubCategorias($id_categoria)
		{
			$tabla = "t_Subcategoria";
			$respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$id_categoria);

			return $respuesta;
		}

	}
?>
