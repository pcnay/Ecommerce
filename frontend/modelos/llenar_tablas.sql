USE bd_ecommerce;

INSERT INTO t_Plantilla (id_plantilla,barraSuperior,textoSuperior,logo,icono,colorFondo,colorTexto,redesSociales,fecha) VALUES
  (0,'#000000','#ffffff','vistas/img/plantilla/logo.png','vistas/img/plantilla/icono.png','#47bac1','#ffffff','[{
		"red":"fa-facebook",
		"estilo":"facebookBlanco",
		"url":"https://facebook.com/"
	},{
		"red":"fa-youtube",
		"estilo":"youtubeBlanco",
		"url":"https://youtube.com/"
	},{
		"red":"fa-twitter",
		"estilo":"twitterBlanco",
		"url":"https://twitter.com/"
	},{
		"red":"fa-google-plus",
		"estilo":"googleBlanco",
		"url":"https://google.com/"
	},{
		"red":"fa-instagram",
		"estilo":"instagramBlanco",
		"url":"https://instagram.com/"
	}
]',CURRENT_TIMESTAMP);

INSERT INTO t_Categoria(id_categoria,categoria,ruta,fecha) 
	VALUES (0,'ROPA','ropa',CURRENT_TIMESTAMP),
	(0,'CALZADO','calzado',CURRENT_TIMESTAMP),
	(0,'ACCESORIOS','accesorios',CURRENT_TIMESTAMP),
	(0,'TECNOLOGIA','tecnologia',CURRENT_TIMESTAMP),
	(0,'CURSOS','cursos',CURRENT_TIMESTAMP);

INSERT INTO t_Subcategoria(id_subcategoria,id_categoria,subcategoria,ruta,fecha) 
	VALUES (0,1,'Ropa Para Dama','ropa-dama',CURRENT_TIMESTAMP),	
	(0,1,'Ropa Para Hombre','ropa-hombre',CURRENT_TIMESTAMP),
	(0,1,'Ropa Deportiva','ropa-deportiva',CURRENT_TIMESTAMP),
	(0,1,'Ropa Infantil','ropa-infantil',CURRENT_TIMESTAMP),
	(0,2,'Calzado para Dama','calzado-dama',CURRENT_TIMESTAMP),
	(0,2,'Calzado para Hombre','calzado-hombre',CURRENT_TIMESTAMP),
	(0,2,'Calzado Deportivo','calzado-deportivo',CURRENT_TIMESTAMP),
	(0,2,'Calzado Infantil','calzado-infantil',CURRENT_TIMESTAMP),
	(0,3,'Bolsos','bolsos',CURRENT_TIMESTAMP),
	(0,3,'Relojes','relojes',CURRENT_TIMESTAMP),
	(0,3,'Pulseras','pulseras',CURRENT_TIMESTAMP),
	(0,3,'Collares','collares',CURRENT_TIMESTAMP),
	(0,3,'Gafas De Sol','gafas-sol',CURRENT_TIMESTAMP),
	(0,4,'Telefonos moviles','tel-movil',CURRENT_TIMESTAMP),
	(0,4,'Tabletas Electronicas','tabletas-elect',CURRENT_TIMESTAMP),
	(0,4,'Computadoras','computadoras',CURRENT_TIMESTAMP),
	(0,4,'Auriculares','auriculares',CURRENT_TIMESTAMP),
	(0,5,'Desarrollo Web','desarrollo-web',CURRENT_TIMESTAMP),
	(0,5,'Aplicaciones Moviles','aplicacionesmovil',CURRENT_TIMESTAMP),
	(0,5,'Diseño Grafico','disenograf',CURRENT_TIMESTAMP),
	(0,5,'Marketing Digital','marketing-dig',CURRENT_TIMESTAMP);