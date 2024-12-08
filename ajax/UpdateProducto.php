<?php
include_once("../BD/funciones.php");
$obj=new mod_conexion;
$resp="";

$NomP=$_POST['NomP'];
$PreP=$_POST['PreP'];
$DesP=$_POST['DesP'];
$id=$_POST['id'];

echo "<script type='text/javascript'>alert('$NomP');</script>";
echo "<script type='text/javascript'>alert('$PreP');</script>";
echo "<script type='text/javascript'>alert('$DesP');</script>";
echo "<script type='text/javascript'>alert('$id');</script>";

$resp=$obj->Update_producto($NomP,$PreP,$DesP,$id);


?>