/* INICIO JAVASCRIPT DE VENTAS*/
  function buscarPresentaciones(evento){
    var char= event.which || event.keyCode;
    var producto=$("#codProd").val();
   
    if(char==13){ //codigo ASCII de la tecla enter
    var presentaciones=$("#presentacion_id");
    var nombProd=$("#nombProd");
    var ruta1="/ventas/nombreproducto/"+producto; //ruta para obtener el nombre del producto
    $.get(ruta1,function(res){
      nombProd.empty(); //se limpia el campo producto
        document.getElementById("nombProd").value=res; //se obtiene el nombre del producto
      });
    var ruta="/ventas/productospresentaciones/"+producto; //ruta para obtener las presentaciones
     $.get(ruta,function(res){
       presentaciones.empty(); //se limpia el combo de presentaciones
       $(res).each(function(key,value){ //se recorre toda la lista de presentaciones obtenida
         presentaciones.append("<option value='"+value.id+"'>"+value.nombrePre+"</option>");
      });
    });
       if(nombProd==" "){
          swal({   title: 'Producto no encontrado',type:'success',  text: 'Se Cerrará en 2 Segundos',   timer: 2700,   showConfirmButton: false });
       }
    

    }
  }

function limpiar(){
    $("#codProd").val("");
    var presentaciones=$("#presentacion_id");
    presentaciones.empty();
    $("#cantidad").val("");
    $("#descuento").val("");
    $("#precioventa").val("");
    $("#nombProd").val("");
}



  function addProductoVentas(){
    var total=$("#totalVenta").val();
    var articulo=$("#codProd").val();
    var producto=$("#nombProd").val();
    var cantidad=$("#cantidad").val();
    var precioventa=$("#precioventa").val();
    var descuento=$("#descuento").val();
   

        var presentacion=$("#presentacion_id").find('option:selected').val();
        if(articulo==0){
          $("#cantidad").val("");
          $("#precioventa").val("");
          return swal("Debe seleccionar un artículo", "No Procesado!", "info");
      
        } else{

         var cantidad=parseInt($("#cantidad").val());
         var tablaDatos= $("#tblDatosVenta");
        
              if(cantidad==" "||!/^([0-9])*$/.test(cantidad)){
               
              }else{

                  // correlativo=parseInt(correlativo)+1;
              

                   totalV = parseFloat(cantidad*precioventa).toFixed(2);
                   Descuento=parseFloat(totalV*descuento).toFixed(2);
                   totalConDescuento=parseFloat(totalV-Descuento).toFixed(2);
                   total=parseFloat(total)+parseFloat(totalConDescuento);
                 
                   aux=parseFloat(cantidad*precioventa);
                 

                
               
                 
                   var ruta="/ventas/nombrepresentacionVenta/"+presentacion;
                  

                  $.get(ruta,function(res){
                  var presentationNameSell=res;
                  tablaDatos.append("<tr>"+    
                  "<td><input type=hidden name=articulos[] value='"+articulo+"'/>"+producto+
                  "</td><td><input type=hidden name=presentaciones[] value='"+presentationNameSell+"'/>"+presentationNameSell+
                  "<td><input type=hidden name=cantidad[] value='"+cantidad+"'/>"+cantidad+
                  "</td><td><input type=hidden name=precioventa[] value='"+precioventa+"'/>"+precioventa+
                  "</td><td><input type=hidden name=descuento[] value='"+descuento+"'/>"+descuento+
                  "</td><td><input type=hidden name=totalV[] value='"+ totalConDescuento+"'/>"+totalConDescuento+
                  "</td><td class='deleteBuy' style='cursor:pointer;'>Eliminar</td></tr>></tr>");
                });

                  document.getElementById("totalVenta").value=aux.toFixed(2);
                  document.getElementById("total1").value=total.toFixed(2);
                   limpiar();
                   swal({   title: 'Producto agregado',type:'success',  text: 'Se Cerrará en 2 Segundos',   timer: 2700,   showConfirmButton: false });

                }
          }
    }