<?php

include_once("../BD/funciones.php");
$obj=new mod_conexion;
$resp="";
$id=$_POST['id'];

//echo "<script type='text/javascript'>alert('$id');</script>";
$resp=$obj->eliminarProducto($id);

//$_SESSION['nombre']=$resp[0][2];
//$_SESSION['correo']=$resp[0][3];
//$_SESSION['correo']=$resp[0][4];

?>