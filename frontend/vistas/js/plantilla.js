
// PLANTILLA
// Se utiliza Ajax para comunicarse a la Base De Datos MySql desde JavaScript
$.ajax({
	url:"ajax/plantilla.ajax.php",
	success:function(respuesta){
		//console.log(respuesta);
		
		// Para convertirlo a un formato de String a Objeto de Datos JSon.
		//console.log(JSON.parse(respuesta));
		// El objeto se estructura de manera que las campos de la tabla es el acceso al cotenido del campo es decir "Clave => Valor "
		
		// Obtiene el valor del campo "colorFondo".
		// console.log(JSON.parse(respuesta).colorFondo);

		
		var colorFondo = JSON.parse(respuesta).colorFondo;
		//console.log(colorFondo);

		// Estas son las variables utilizadas para cambiar los estilos y colores de la plantilla inicial.
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;

		// Aplicando el estilo a las clases definidas en la etiquetas
		// Se utiliza TQuery para aplicar los estilos.		
		$(".backColor, .backColor a").css({"background": colorFondo,"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior,"color": textoSuperior})
		
	}


})