/* INICIO JAVASCRIPT DE COMPRAS*/
  function buscarPresentaciones(evento){
    var char= event.which || event.keyCode;
    var producto=$("#codProd").val();
    if(char==13){
    var presentaciones=$("#presentacion_id");
    var ruta="/compras/productospresentaciones/"+producto;
    $.get(ruta,function(res){
      presentaciones.empty();
      $(res).each(function(key,value){
        presentaciones.append("<option value='"+value.id+"'>"+value.nombrePre+"</option>");
      });
    });
    }
  }

  function addProductoCompra(){
    var total=$("#totalCompra").val();

    var articulo=$("#codProd").val();
    var cantidad=$("#cantidad").val();
    var precioC=$("#precioCompra").val();
    var pmv=$("#precioMinVenta").val();
    var pmav=$("#precioMaxVenta").val();
    var lote=$("#lote").val();
    var iva=$("#IVA").val();
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
            totalC = parseFloat(cantidad*precioC);

            var ruta="/compras/nombrepresentacionCompra/"+presentacion;
            $.get(ruta,function(res){
              var presentationNameSell=res;
            tablaDatos.append("<tr><td>"+
           
            "</td><td><input type=hidden name=lote[] value="+lote+"/>"+lote+
            "</td><td><input type=hidden name=articulos[] value="+articulo+"/>"+articulo+
            "</td><td><input type=hidden name=presentaciones[] value="+presentationNameSell+"/>"+presentationNameSell+
            "</td><td><input type=hidden name=estante[] value="+estante+"/>"+estante+
            "</td><td><input type=hidden name=cantidad[] value="+cantidad+"/>"+cantidad+
            "</td><td><input type=hidden name=precioC[] value="+precioC+"/>"+precioC+
            "</td><td><input type=hidden name=pmv[] value="+pmv+"/>"+pmv+
            "</td><td><input type=hidden name=pmav[] value="+pmav+"/>"+pmav+
            "</td><td><input type=hidden name=vencimiento[] value="+vencimiento+"/>"+vencimiento+
            "</td><td><input type=hidden name=totalC[] value="+totalC+"/>"+totalC+
            "</td><td class='eliminarVenta' style='cursor:pointer;'>Eliminar</td></tr>");
          });
            // document.getElementById("correlativoVenta").value=correlativo;
            // document.getElementById("inputArticulosVenta").value=correlativo;
            document.getElementById("totalCompra").value=total.toFixed(2);
            // reset_camposVenta();
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
