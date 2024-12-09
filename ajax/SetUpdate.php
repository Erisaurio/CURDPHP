<?php
include_once("../BD/funciones.php");
$obj=new mod_conexion;
$id=$_GET['id'];
$datos=$obj->getProducto($id);
//print_r($datos); 
//echo "<script type='text/javascript'>alert('$id');</script>";
?>

<div class="card-body">
    <div class="CardInputs col-12 mt-1">
        <input type="text" id="CPNombre2" name="CPNombre2" placeholder="Nombre" value="<?php echo $datos[0][1];?>">
        <input type="number" id="CPPrecio2" name="CPPrecio2" placeholder="Precio" value=<?php echo $datos[0][2];?>>
        <input type="text"  id="CPDescripcion2" name="CPDescripcion2" placeholder="Descripcion" value="<?php echo $datos[0][3];?>">
        
    </div>
    <button onclick="UpdateProducto(<?php echo $datos[0][0];?>); ">Modificar </button>
</div>