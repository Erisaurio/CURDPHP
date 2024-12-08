function cargarProductos()
{
    var url="ajax/GetProductos.php";

    
    $.ajax({
      url:url,
      type:'get',
      beforeSend:function ()
      {  
        //console.log("cargando...");     
        //$('#resultado').html("Procesando");
      },
      success:function(response)
      {
        //console.log(response);
        //var data= JSON.parse(response);
        //alert(response);
        $('#contenedor').html(response); 
          
      }
      });
}

function FindProductos(id)
{
    var url="ajax/SetUpdate.php";
    var parametro={"id":id,};
    
    $.ajax({
      data:parametro,
      url:url,
      type:'get',
      beforeSend:function ()
      {  
        //console.log("cargando...");     
        //$('#resultado').html("Procesando");
      },
      success:function(response)
      {
        //console.log(response);
        //var data= JSON.parse(response);
        //alert(response);
        $('#contenedor2').html(response); 
          
      }
      });
}

function guardaProducto()
{
    //var archivos = document.getElementById("imagen");
		  //var archivo = archivos.files;
		  
      var NomP=$('#CPNombre').val();
      var PreP=$('#CPPrecio').val();    
      var DesP=$('#CPDescripcion').val();
      
      //alert($('#img')[0].files[0]);    
      var parametro={"NomP":NomP,"PreP":PreP,"DesP":DesP};
    if(NomP=="" || PreP=="" || DesP=="")
    {
      swal("warning!", "El Producto no se registró exitosamente!", "warning");
    }
    else
    {
     var url="ajax/InsertProducto.php";    
      $.ajax({
        data:parametro,
        url:url, //Url a donde la enviaremos
        type:'POST', //Metodo que usaremos
        
        beforeSend:function ()
        {
         //$('#resultado').html("Procesando");
         
        },
        success:function(response)
        {
          //alert(response);
          swal("Listo!", "El Reportero se registró exitosamente!", "success");
          location.reload();
        }
      });
    }
}

function DeleteProducto(id)
{
  var archivos = new FormData();

  archivos.append('id', id);
		 var parametro={"id":id};
      
     var url="ajax/DeletProducto.php";    
      $.ajax({
        url:url, //Url a donde la enviaremos
        type:'POST', //Metodo que usaremos
        contentType:false, //Debe estar en false para que pase el objeto sin procesar
        data:archivos, //Le pasamos el objeto que creamos con los archivos
        processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache:false, //Para que el formulario no guarde cache
        beforeSend:function ()
        {
         //$('#resultado').html("Procesando");
         
        },
        success:function(response)
        {
          //alert(response);
          location.reload();
        }
      });
    
      
}


function UpdateProducto(id)
{
    //var archivos = document.getElementById("imagen");
		  //var archivo = archivos.files;
	    var url="ajax/UpdateProducto.php"; 
      var NomP=$('#CPNombre2').val();
      var PreP=$('#CPPrecio2').val();    
      var DesP=$('#CPDescripcion2').val();
      
      //alert($('#img')[0].files[0]);    
      var parametro={"NomP":NomP,"PreP":PreP,"DesP":DesP, "id":id};
    if(NomP=="" || PreP=="" || DesP=="")
    {
      swal("warning!", "El Producto no se actualizo exitosamente!", "warning");
    }
    else
    {
        
      $.ajax({
        data:parametro,
        url:url, //Url a donde la enviaremos
        type:'POST', //Metodo que usaremos
        
        beforeSend:function ()
        {
         //$('#resultado').html("Procesando");
         
        },
        success:function(response)
        {
          //alert(response);
          swal("Listo!", "El Reportero se Actualizo exitosamente!", "success");
          location.reload();
        }
      });
    }
}