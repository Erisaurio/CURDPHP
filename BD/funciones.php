<?php

class mod_conexion
{  
  private $conexion;
	function __construct()
	{
			require_once('conexion.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
    }
    
   
	function TraeProductos()
   {
		   
		   $sql = "select * from Productos;";	
		   $arreglo = array();
		   if ($consulta = $this->conexion->conexion->query($sql)) {

			   while ($consulta_VU = mysqli_fetch_array($consulta)) {
				   $arreglo[] = $consulta_VU;
			   }
			   return $arreglo;
			   $this->conexion->cerrar();	
		   }
   }

   function Insert_producto($NomP,$PreP,$DesP)
	{                
		$sql = "insert into Productos set nombre = '".$NomP."' , precio = '".$PreP."', Descripcion  = '".$DesP."';";
		
		//$sql = "INSERT INTO usuarios(nombre,correo,contraseña,fecha,id_rol,Foto)VALUES('".$NomP."','".$Ema."','".$Pas."',CURDATE(),1,'$image');";	
			/*
			echo "<script type='text/javascript'>alert('".$Nom."');</script>";
			echo "<script type='text/javascript'>alert('".$Ema."');</script>";
			echo "<script type='text/javascript'>alert('".$Pas."');</script>";
            */
			
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				
				return 1;
				$this->conexion->cerrar();	
			}
			else
			{
				return 0;
			}
	}

	function eliminarProducto($id)
   {		   
		   $sql = "DELETE FROM Productos WHERE id_Productos = '".$id."' " ;	
		   $arreglo = array();
		   if ($consulta = $this->conexion->conexion->query($sql)) {
			   
			   return 1;
			   $this->conexion->cerrar();	
		   }
		   else
		   {
			   return $sql;
		   }
   }

   function getProducto($id){
	$sql = "select * from Productos where id_Productos ='".$id."'";	
	$arreglo = array();
	 	if ($consulta = $this->conexion->conexion->query($sql)) {

			while ($consulta_VU = mysqli_fetch_array($consulta)) {
				$arreglo[] = $consulta_VU;
			}
			return $arreglo;
			$this->conexion->cerrar();	
		}
	}

	function Update_producto($NomP,$PreP,$DesP,$id)
	{                
		$sql = "UPDATE Productos set nombre = '".$NomP."' , precio = '".$PreP."', Descripcion  = '".$DesP."' WHERE id_Productos = '".$id."' ;";
		
		//$sql = "INSERT INTO usuarios(nombre,correo,contraseña,fecha,id_rol,Foto)VALUES('".$NomP."','".$Ema."','".$Pas."',CURDATE(),1,'$image');";	
			/*
			echo "<script type='text/javascript'>alert('".$Nom."');</script>";
			echo "<script type='text/javascript'>alert('".$Ema."');</script>";
			echo "<script type='text/javascript'>alert('".$Pas."');</script>";
            */
			
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				
				return 1;
				$this->conexion->cerrar();	
			}
			else
			{
				return 0;
			}
	}

}