
<div class="container-fluid">
 <div class="box box-success">
  <div class="logo-lg">
   <h3><img src="http://localhost:8000/images/caja.jpg" class="img-circle" > REGISTRO DE VENTAS</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">

        <div class="box-body">
          <div class="row">
            
            <!-- boton modal -->
              <div class="col-md-2">
                {!!form::label('N° Factura')!!}
                <input  type="text" class="form-control" id="numfactura" name="numfactura" value="{{$NF}}">
              </div>

              <div class="col-md-3">
                {!!Form::label('lbFecha','Fecha de Venta')!!}
                 <input  type="text" class="form-control" id="fechaVenta" name="fechaVenta" value="<?php echo date('d-M-Y') ?>">
              </div>
            
              <div class="col-md-3">
                {!!form::label('Cliente')!!}
                <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre Cliente" required="required">
              </div>
               
               <div class="col-md-2">
                
                {!!form::label('Cajero:')!!}
                <input  type="text" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">

              </div>
            </div>
          </div>
          
        <!-- Inicio modal agregar -->
      	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        					<center>
          					<div class="modal-dialog modal-lg" role="document"> 
        	            <div class="container-fluid">
                        <div class="box box-primary">
          		            <div class="box-body">
                            <div class="row">
                              <div class="col-md-12">
                   					    <div class="modal-content">
                   					     
                                  <fieldset>
                                  <legend > <h3 class="glyphicon glyphicon-list-alt"></h3>  Datos del Producto</legend>
                                  <!--Tabla que manipulo los datos dentro del modal-->
                                          <table class="table" style="text-align: center;">
                                                <thead>
                                                  <tr>
                                                  
                                                </thead>
                                                <tbody>
                                                  <tr style="background: #48A8DE;color: white;height: 8px;" >
                                                    <th width="200">{!!form::label('Código ')!!}</th>
                                                    <th width="200">{!!form::label('Producto')!!}</th>
                                                    <th width="258">{!!form::label('Presentación')!!}</th>
                                                    <th width="80"> {!!form::label('Cantidad')!!}</th>
                                                    <th width="80">{!!form::label('Descuento')!!}</th>
                                                    <th width="85">{!!form::label('Precio')!!}</th>
                                                    <th></th>
                                                    <th></th>
                                                  </tr>
                                                   <tr>
                                                        <td> 
                                                         <input type="text" class="form-control" name="codProducto" id="codProd" onkeypress="buscarPresentaciones(this);">
                                                        </td>
                                                        <td colspan="1">
                                                          {!!form::text('nombProd',null,['id'=>'nombProd','class'=>'form-control','placeholder'=>'producto'])!!}</td>
                                                        <td >  
                                                          <select id="presentacion_id" class="form-control" name="presentacion_id" ></select>
                                                        </td>
                                                        <td>
                                                            {!!form::number('cantidad',null,['id'=>'cantidad','class'=>'form-control','min'=>'0','placeholder'=>'N°'])!!}
                                                        </td>
                                                        <td>
                                                            {!!form::number('descuento',null,['id'=>'descuento','min'=>0.0,'class'=>'form-control','step'=>'0.01','placeholder'=>'%'])!!}
                                                       
                                                        </td>
                                                        <td>
                                                          {!!form::number('precioventa',null,['id'=>'precioventa','class'=>'form-control','min'=>'0','placeholder'=>'$'])!!}
                                                        </td>
                                                        <td >
                                                            <button class="btn btn-success" name="btnInsertarProducto" value="Agregar" id="btnInsertarProducto" onClick="addProductoVentas()">
                                                              <span class="glyphicon glyphicon-plus-sign"> </span> 
                                                            </button>
                                                       </td>
                                                        <td >
                                                            <button class="btn btn-danger"  value="limpiar" onClick="limpiar()">
                                                              <span class="glyphicon glyphicon-minus-sign"> </span> 
                                                            </button>
                                                       </td>
                                                   </tr>
                                                </tbody>
                                              </table>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Terminar</button><!--btn para Terminar modal agregar-->
                                     </fieldset>
                                 </div> <!--{{-- modal --}} -->
                           </div>
                     </center>
                  </div> 


                      <!-- Inicio de modal para buscar productos del inventario -->
                      <div class="modal fade bs-example-modal-buscar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-lg" role="document"> 
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="modal-content">
                              <div class="box box-primary">
                                <br>
                                <center>
                                  <div class="box-header">
                                    <h3 >Inventario de Medicamentos </h3>
                                  </div><!-- /.box-header -->
                                </center>
                                <div class="box-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <center>
                                      <thead>
                                        <tr>
                                          <th bgcolor="#e5eef7">N° LOTE</th>
                                          <th bgcolor="#e5eef7">PRODUCTO</th>
                                          <th bgcolor="#e5eef7">PRESENTACIÓN</th>
                                          <th bgcolor="#e5eef7">CANTIDAD</th>
                                          <th bgcolor="#e5eef7">CADUCIDAD</th>
                                          <th bgcolor="#e5eef7">P/MIN/V</th>
                                          <th bgcolor="#e5eef7">P/MAX/V</th>
                                          <th bgcolor="#e5eef7">UBICACIÓN</th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                    </div>
                                    <br>
                                    @foreach($detallecompras as $d)
                                    <?php $aux=$d->id;
                                          $cantidad=$d->cantidad;
                                          $fecha=explode('-', $d->fechaVencimiento);
                                          //obtener el total de unidades vendidas de un medicamento
                                          $cant=$detalle->productoVendido($d->id,$d->lote);
                                          // se resta la cantidad comprada menos las cantidades vendidas
                                          $existencias=$d->cantidad-$cant;
                                      ?>
                                          @if($existencias>0)
                                          <tr>
                                            <td>{{$d->lote}}</td>
                                            <td>{{$detalle->nombreProd($d->producto_id)}}</td>
                                            <td>{{$detalle->nombrePresentacion($d->presentacion_id)}}</td>
                                            <td>{{$existencias}}</td>
                                            <td>{{$fecha[2].'-'.$fecha[1].'-'.$fecha[0]}}</td>
                                            <td>{{$d->precioMinVenta}}</td>
                                            <td>{{$d->precioMaxVenta}}</td>
                                            <td>{{$detalle->nombreEstante($d->estante_id)}}</td>
                                          </tr>
                                        @endif
                                      @endforeach
                                    </center>
                                    </tbody>
                                  </table>
                                  <br>
                                  <center>
                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Terminar</button>
                                 </center>
                                  {!! str_replace ('/?', '?', $detallecompras) !!}
                                </div><!-- /.box-body -->
                              </div><!-- /.box success -->
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                         </div> <!--{{-- modal --}} -->
                        </div>
                
                      </div> 

                        <!-- Control de la tabla en la cual se almacenan los productos que se trabajan en el ventas.js-->
                        <div class="box-body">
                          <fieldset>
                            <legend><h3 class="glyphicon glyphicon-shopping-cart"></h3>    Cesta de Productos </legend>
                                   <a>
                                    <img src={!! asset('/images/botonagregar.jpg') !!} alt=" " class="btn-primary"  data-toggle="modal" data-target=".bs-example-modal-lg"/>
                                   </a>
                                   <a !!}>
                                    <img src={!! asset('/images/botonbuscar.jpg') !!} alt=" " class="btn-primary"  data-toggle="modal" data-target=".bs-example-modal-buscar"/>
                                   </a>

                                   <br><br>
                                <table class="table  table-bordered taC table-hover" name="tablaArticulosVenta" id="tblDatosVenta">
                                  <tr>
                                  <th bgcolor="#e5eef7">PRODUCTO</th>
                                  <th bgcolor="#e5eef7">PRESENTACIÓN</th>
                                  <th bgcolor="#e5eef7">CANTIDAD</th>
                                  <th bgcolor="#e5eef7">P/VENTA ($)</th>
                                  <th bgcolor="#e5eef7">DESCUENTO %</th>
                                  <th bgcolor="#e5eef7">SUB-TOTAL ($)</th>
                                  <th bgcolor="#e5eef7">OPCIÓN</th>
                                  </tr>
                                </table>
                         </fieldset>
                      </div>
                      <br>

                            <!--Tabla para controlar los Totales y sub-totales que estan con textField en color negro -->
                            <table class="table" style="text-align: center;">
                                   <thead>
                                   <tr>
                                   </thead>
                                   <tbody>
                                              
                                              <tr>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th>
                                                    <th> 
                                                    {!!form::label('Sub-Total($)')!!}
                                                    </th>
                                                    <th>   
                                                        <input  name="totalVenta" id="totalVenta" value="0" type="number","ReadOnly"
                                                         style="BORDER: rgb(128,100,128) 1px solid; FONT-SIZE: 15pt; FONT-FAMILY: Verdana; 
                                                         COLOR: green; BACKGROUND-COLOR: #000000" />
                                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                    </th>
                                                  
                                                </tr>
                                                  <tr>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th><th></th><th></th>
                                                    <th></th><th></th><th></th><th></th>
                                                    <th> 
                                                    {!!form::label('Total($)')!!}
                                                    </th>
                                                    <th>   
                                                        <input  name="total1" id="total1" value="0" type="number","ReadOnly"
                                                         style="BORDER: rgb(128,100,128) 1px solid; FONT-SIZE: 15pt; FONT-FAMILY: Verdana; 
                                                         COLOR: green; BACKGROUND-COLOR: #000000" />
                                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                                    </th>
                                                  
                                                </tr>
                                                 
                                          </tr>
                                  </tbody>
                             </table>
                          {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                        </div>
           					 </div>
                  </div>
          			</div>
        			</div>
        		</div>
          </div>
      </div>
   </div>
</div>

