<?php 

  
        //onclick="EditNews(<?php echo $idN>?); "

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    
    <div class="col-10 mt-5 mx-auto">

        <div class="row">
            <div class="col-4">

            <div class="card">
                <div class="card-body">
                <div class="CardInputs col-12 mt-1">
                    <input type="text" id="CPNombre" name="CPNombre" placeholder="Nombre">
                    <input type="number" id="CPPrecio" name="CPPrecio" placeholder="Precio" >
                    <input type="text"  id="CPDescripcion" name="CPDescripcion" placeholder="Descripcion">
                    
                </div>
                <button onclick="guardaProducto(); ">Agregar </button>
                </div>
            </div>
                
                

            </div>
            <div class="col-7">

                <div class="contenedor" id="contenedor">
                                            
                </div>

               
                
                
            </div>
        </div>
    
    </div>
    <div class="col-10 mt-2 mx-auto">
            <div class="contenedor2" id="contenedor2">
                                            
            </div>
    </div>
        

    

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/ajax.js"></script>
<script>cargarProductos();</script>

<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
