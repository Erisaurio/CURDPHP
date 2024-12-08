<?php
include_once("../BD/funciones.php");
$obj=new mod_conexion;
$datos=$obj->TraeProductos();
//print_r($datos); 
?>

<table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        for($i=0;$i<Count($datos);$i++)
                        {
                    ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $datos[$i][1];?></td>
                            <td><?php echo $datos[$i][2];?></td>
                            <td><?php echo $datos[$i][3];?></td>
                            <td><button onclick="FindProductos( <?php echo $datos[$i][0];?>); ">Modificar </button></td>
                            <td><button onclick="DeleteProducto( <?php echo $datos[$i][0];?>); ">Delete </button></td>
                        </tr>
                        <?php
                        }
                    ?>
                        
                    </tbody>
                </table>

                