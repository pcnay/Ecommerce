/*
-- Ejecutarlo desde una terminal de Mysql 
-- Cuando sea la PRIMERA VEZ que se esta generando la base de datos, se debe enttrar como root en la computadora y accesar a "mysql"
		mysql -u root -p

-- Se debe accesar al directorio donde se encuentra el "script.sql" y ejecutar el comenado "mysql" desde una terminal
-- $ mysql -u nom-usr -p NombreBaseDatos < script.sql
-- Otra Forma :
--    mysql -u usuario -p NombreBaseDatos
--    source script.sql ó \. script.sql
		
			Borrar tabla: DROP TABLE <nombre Tabla>
			
*/

/* 
Mostrar todos los usuarios 
  select user from mysql.user;
Para borrar un usuario, se tiene que ejecutar los dos comandos 
Para borrar un usuario para todos los hosts:
	drop user ventas-pos;
Para borrar un usuario en especifico
	delete from mysql.user where user = ‘ventas-pos’

Para borrar mas de un usuario en el host
	drop user ‘ventas-pos’@’localhost’;
	
	flush privileges;

*/

/* Tabla de Datos */
/* Se ocupa los 9 espacios, no se desperdicia espacio.*/
  /* CHAR(X) = cuando se define de algun tamaño pero no se utiliza, se despedicia espacio, por ejemplo
  CHAR(30), pero el valor de "title" es de 20, se desperdicio 60 espacios.
  VARCHAR(80) se adapta al tamaño del titulo.
  En la base de datos se puede guardar, videos, documentos en formato binario, pero creceria mucho.
  Se sube el video, documento, solo se graba la URL en el campo de la base de datos.
	
	estado INTEGER UNSIGNED DEFAULT 0,

	Tipos De Datos que maneja MySQL, MariaDb
	https://www.anerbarrena.com/tipos-dato-mysql-5024/

  */

/* DROP DATABASE IF EXISTS bd_responsivas; */


CREATE DATABASE IF NOT EXISTS bd_ecommerce;
 /* SET time_zone = 'America/Tijuana';  */

USE bd_ecommerce;


/* Solo se ejecuta la primera vez. 
CREATE USER 'usuario_ecommerce'@'localhost' IDENTIFIED BY 'ecommerce-2021';
GRANT ALL on bd_ecommerce.* to 'usuario_ecommerce'  IDENTIFIED BY 'ecommerce-2021';
*/


CREATE TABLE t_Plantilla
(
  id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  barraSuperior VARCHAR(100) NULL,
	textoSuperior VARCHAR(100) NULL,
	logo VARCHAR(100) NULL,
	icono VARCHAR(100) NULL, 
	colorFondo VARCHAR(100) NULL,
	colorTexto VARCHAR(100) NULL,
	redesSociales TEXT NULL,   
  fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

