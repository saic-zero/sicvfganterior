
<div class="container-fluid">
 <div class="box box-success">
  <div class="logo-lg">
   <h3 >REGISTRO DE VENTAS</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
     
		   
        <div class="box-body">
          <div class="row">
            <div class="col-md-11">
            <button type="button" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target=".bs-example-modal-lg"> Producto</button>
            </div> 
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
                <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre Cliente">
              </div>
               
               <div class="col-md-2">
                
                {!!form::label('Cajero:')!!}
                <input  type="text" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">

              </div>
             
           
             </div>
					</div>
          

					<!-- Inicio modal -->
	<!-- 		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<center>
  					<div class="modal-dialog modal-lg" role="document"> -->
	            <div class="container-fluid">
                <div class="box box-primary">
  		            <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
           				<!-- 	 <div class="modal-content">  -->
           					     
                          <fieldset>
                          <legend>Datos del Producto</legend>
                     				           <div class="col-md-4">
                                        {!!form::label('Código Producto')!!}
                                        <input type="text" class="form-control" name="codProducto" id="codProd" onkeypress="buscarPresentaciones(this);">
                                        {!!form::label('Producto')!!}
                                        {!!form::text('nombProd',null,['id'=>'nombProd','class'=>'form-control','placeholder'=>'producto'])!!}
                                        {!!form::label('presentacion')!!}
                                        <select id="presentacion_id" class="form-control" name="presentacion_id" >
                                        </select>
                                        
                                        {!!form::label('Cantidad')!!}
                      				          {!!form::number('cantidad',null,['id'=>'cantidad','class'=>'form-control','required','min'=>'0','placeholder'=>'Ingrese Cantidad'])!!}
                                        {!!form::label('Descuento')!!}
                                        {!!form::number('descuento',null,['id'=>'descuento','min'=>0.0,'class'=>'form-control','step'=>'0.01','placeholder'=>'Ingrese descuento'])!!}
                                        {!!form::label('Precio venta')!!}
                                        {!!form::text('precioventa',null,['id'=>'precioventa','class'=>'form-control','min'=>'0','placeholder'=>'Ingrese precio de venta'])!!}
                                       </div>

                                        <div background-color: "blue" class="col-md-4">
                                        {!!form::label('Total($)')!!} 
                                        <input  name="totalVenta" id="totalVenta" value="0" type="number","ReadOnly"
                                         style="BORDER: rgb(128,128,128) 1px solid; FONT-SIZE: 20pt; FONT-FAMILY: Verdana; 
                                         COLOR: green; BACKGROUND-COLOR: #000000" />
                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                        </div>

                                        <div class="col-md-8">
                                        <br>
                                        <input class="btn btn-primary" name="btnInsertarProducto" id="btnInsertarProducto" type="button" value="Agregar" onClick="addProductoVentas()"/>
                                        <button type="button" class="btn btn-primary" value="limpiar" onClick="limpiar()" >Limpiar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

                                        
                                             <div class="box-body">
                                               <table class="table  table-bordered taC table-hover" name="tablaArticulosVenta" id="tblDatosVenta">
                                                  <tr>
                                                  <th bgcolor="#e5eef7">PRODUCTO</th>
                                                  <th bgcolor="#e5eef7">PRESENTACION</th>
                                                  <th bgcolor="#e5eef7">CANTIDAD</th>
                                                  <th bgcolor="#e5eef7">P/VENTA ($)</th>
                                                  <th bgcolor="#e5eef7">DESCUENTO %</th>
                                                  <th bgcolor="#e5eef7">TOTAL ($)</th>
                                                  </tr>
                                                </table>
                                            </div>
                                      </div>
                      </fieldset>

        				     </div>
           					</div>
                  </div>
          			</div>
        			</div>
        		</div>
      	<!-- 	</div> {{-- modal --}} -->
	      <!-- 	</div>
				</center>
			</div>  -->
		</div>
</div>
</div>
</div>

