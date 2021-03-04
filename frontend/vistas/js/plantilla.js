
// PLANTILLA

$.ajax({

	url:"ajax/plantilla.ajax.php",
	success:function(respuesta){
		// Para convertirlo a un formato de String a Objeto de Datos JSon.
		// El objeto se estructura de manera que las campos de la tabla es el acceso al cotenido del campo es decir "Clave => Valor "
		// Obtiene el valor del campo "colorFondo".
		// console.log(JSON.parse(respuesta).colorFondo);

		
		var colorFondo = JSON.parse(respuesta).colorFondo;
		console.log(colorFondo);

		// Estas son las variables utilizadas para cambiar los estilos y colores de la plantilla inicial.
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;

		// Aplicando el estilo a las clases definidas en la etiquetas
		
		$(".backColor, .backColor a").css({"background": colorFondo,"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior,"color": textoSuperior})


	}


})