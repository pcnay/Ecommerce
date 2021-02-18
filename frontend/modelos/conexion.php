<?php
	class Conexion
	{
		public function conectar()
		{
			$link = new PDO("mysql:host=localhost;dbname=bd_ecommerce",
			"usuario_ecommerce",
			"ecommerce-2021",
			array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);
			$mitz="America/Tijuana";
			$tz = (new DateTime('now', new DateTimeZone($mitz)))->format('P');
			$link->exec("SET time_zone='$tz';");

			//$link->exec("set names utf8"); // Para caracteres en español
			return $link;		
			
		}
	}
?>
