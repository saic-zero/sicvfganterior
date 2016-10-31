/* INICIO JAVASCRIPT DE COMPRAS*/
  function buscarPresentaciones(evento){
    var char= event.which || event.keyCode;
    var producto=$("#codProd").val();
    if(char==13){ //codigo ASCII de la tecla enter
    var presentaciones=$("#presentacion_id");
    var nombProd=$("#nombProd");
    var ruta1="/compras/nombreproducto/"+producto; //ruta para obtener el nombre del producto
    $.get(ruta1,function(res){
      nombProd.empty(); //se limpia el campo producto
        document.getElementById("nombProd").value=res; //se obtiene el nombre del producto
      });
    var ruta="/compras/productospresentaciones/"+producto; //ruta para obtener las presentaciones
    $.get(ruta,function(res){
      presentaciones.empty(); //se limpia el combo de presentaciones
      $(res).each(function(key,value){ //se recorre toda la lista de presentaciones obtenida
        presentaciones.append("<option value='"+value.id+"'>"+value.nombrePre+"</option>");
      });
    });
    }
  }
function limpiar(){
    $("#codProd").val("");
    var presentaciones=$("#presentacion_id");
    presentaciones.empty();
    $("#nombProd").val("");
    $("#cantidad").val("");
    $("#precioCompra").val("");
    $("#precioMinVenta").val("");
    $("#precioMaxVenta").val("");
    $("#lote").val("");
    $("#estante_id").val("");
    $("#fechaVencimiento").val("");

}
  function addProductoCompra(){
    var total=$("#totalCompra").val();
    var articulo=$("#codProd").val();
    var producto=$("#nombProd").val();
    var cantidad=$("#cantidad").val();
    var precioC=$("#precioCompra").val();
    var pmv=$("#precioMinVenta").val();
    var pmav=$("#precioMaxVenta").val();
    var lote=$("#lote").val();
    var estante=$("#estante_id").val();
    var vencimiento=$("#fechaVencimiento").val();

        var presentacion=$("#presentacion_id").find('option:selected').val();
        if(articulo==0){
          $("#cantidad").val("");
          $("#lote").val("");
          $("#precioCompra").val("");
          $("#IVA").val("");
          return swal("Debe seleccionar un artículo", "No Procesado!", "info");
        }
        else{
         var cantidad=parseInt($("#cantidad").val());
         var tablaDatos= $("#tblDatosCompra");
         if(cantidad==""||!/^([0-9])*$/.test(cantidad)){
          swal({   title: 'La cantidad no es un numero\n o No es permitido',type:'error',  text: 'Se Cerrará en 2 Segundos',   timer: 2700,   showConfirmButton: false });
        }else{
            // correlativo=parseInt(correlativo)+1;
             total=parseFloat(total)+parseFloat(cantidad*precioC);
            totalC = parseFloat(cantidad*precioC).toFixed(2);
            var ruta="/compras/nombrepresentacionCompra/"+presentacion;

            $.get(ruta,function(res){
              var presentationNameSell=res;
            tablaDatos.append("<tr><td>"+

            "</td><td><input type=hidden name=lote[] value='"+lote+"'/>"+lote+
            "</td><td><input type=hidden name=articulos[] value='"+articulo+"'/>"+producto+
            "</td><td><input type=hidden name=presentaciones[] value='"+presentationNameSell+"'/>"+presentationNameSell+
            "</td><input type=hidden name=estante[] value='"+estante+"'/>"+
            "<td><input type=hidden name=cantidad[] value='"+cantidad+"'/>"+cantidad+
            "</td><td><input type=hidden name=precioC[] value='"+precioC+"'/>"+precioC+
            "</td><td><input type=hidden name=pmv[] value='"+pmv+"'/>"+pmv+
            "</td><td><input type=hidden name=pmav[] value='"+pmav+"'/>"+pmav+
            "</td><td><input type=hidden name=vencimiento[] value='"+vencimiento+"'/>"+vencimiento+
            "</td><td><input type=hidden name=totalC[] value='"+totalC+"'/>"+totalC+
            "</td>></tr>");
          });
            document.getElementById("totalCompra").value=total.toFixed(2);
             limpiar();
             swal({   title: 'Producto agregado',type:'success',  text: 'Se Cerrará en 2 Segundos',   timer: 2700,   showConfirmButton: false });

          }
        }
    }
  // function addProductoCompra(){
  //   var cantidad=$("#cantidad").val();
  //   var precioC=$("#precioCompra").val();
  //   var pmv=$("#precioMinVenta").val();
  //   var pmav=$("#precioMaxVenta").val();
  //   var lot=$("#lote").val();
  //   var iva=$("#IVA").val();
  //   var tablaDatos= $("#tblDatosCompra");
  //
  //         tablaDatos.append("<tr><td>"+
  //         cantidad+
  //           "</td><td>"+precioC+
  //           "</td><td>"+pmv+
  //           "</td><td>"+pmav+
  //           "</td><td>"lot+
  //           "</td><td>"iva+
  //           "</td></tr>");
  //     }
