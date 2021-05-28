/*
	Tipos de datos de MariaDB
  https://www.anerbarrena.com/tipos-dato-mysql-5024/


-- Ejecutarlo desde una terminal de Mysql 
-- Se debe accesar al directorio donde se encuentra el "script.sql" y ejecutar el comenado "mysql" desde una terminal


-- $ mysql -u nom-usr -p NombreBaseDatos < script.sql
-- Otra Forma :
--    mysql -u usuario -p NombreBaseDatos
--    source script.sql ó \. script.sql
*/

USE bd_ecommerce;

CREATE TABLE t_Categoria
(
  id_categoria SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  categoria TEXT NULL,
	ruta TEXT NULL,
  fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE t_Subcategoria
(
  id_subcategoria SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	id_categoria SMALLINT UNSIGNED NOT NULL,
  subcategoria TEXT NULL,
	ruta TEXT NULL,
  fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY(id_categoria) REFERENCES t_Categoria(id_categoria)
	ON DELETE RESTRICT ON UPDATE CASCADE
);
