<?php
require_once "config.php";
	class conexion{		
		public $conexion;		
		function conectar(){
			$this->conexion = new mysqli(HOST,USER,PASS,DBNAME);
			$this->conexion->set_charset("utf8");
		}
		function cerrar(){
			$this->conexion->close();	
		}
	}
?> 

