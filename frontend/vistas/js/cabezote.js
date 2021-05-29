/*=============================================
CABEZOTE
=============================================*/
$("#btnCategorias").click(function(){

	// Punto de Quiebre, desde JavaScript
	if(window.matchMedia("(max-width:767px)").matches){
		// Cuando se oprime el Boton de Categorias, se mostrara todas las "Categorias" de forma rapida.
		// Un click Muestra y Otro click Desaparece.  
		// Desplegara el menu de categorias despues del boton de "Categorias Icono de Libros"
		//
		$("#btnCategorias").after($("#categorias").slideToggle("fast"))
		
	}else{
		// Desplegara el menu de categorias despues del "cabezote"
		$("#cabezote").after($("#categorias").slideToggle("fast"))
		
	}

		
})