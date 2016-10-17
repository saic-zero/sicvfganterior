
<div class="logo-lg">
  <h2 >REGISTRO DE COMPRAS</h2>
</div>
<div class="container-fluid">
 <div class="box box-success">
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
       <table id="tabla1" class="table stacktable">
		    <div class="box-body">
        	<div class="row">
        		<div class="col-md-12">
					    <h4>DATOS GENERALES</h4>
     				</div>
        		<div class="col-md-3">
					    {!!form::label('Proveedor')!!}
				      <select id="proveedor_id" class="form-control" name="proveedor_id" >
                <option value = "Elegir...." >Elegir....</option>
         				 @foreach($proveedor as $emp)
             			<option value="{{$emp->id}}">{{$emp->nombreProv}}</option>
         				 @endforeach
        				</select>
                {!!Form::label('lbFecha','Fecha de Compra')!!}
                {!!Form::date('fechaCompra',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
              </div>
    					<div class="col-md-3">
    					  {!!form::label('# Comprobante')!!}
    					  <input type="text" class="form-control" id="numComprobanteCompra" name="numComprobanteCompra" placeholder="Numero de comprobate de compra">
                {!!form::label('tipo de compra')!!}
    				    <select id="tipoCompra" class="form-control" name="tipoCompra" >
      						<option value = "Elegir...." >Elegir....</option>
      						<option value = "Credito" >Credito</option>
      						<option value = "Contado" >Contado</option>
    					 </select>
              </div>
        		  <div class="col-md-3">
      					{!!form::label('Descripcion de la Compra')!!}
                {!!Form::textarea('descripcionCompra',null,['class'=>'form-control', 'placeholder'=>'Descripcion sobre la compra', 'rows'=>'2', 'cols'=>'5'])!!}
              </div>
              <div class="col-md-3">
                {!!form::label('IVA')!!}
                {!!form::number('IVA',null,['id'=>'IVA','class'=>'form-control','placeholder'=>'Ingrese IVA '])!!}
                {!!form::label('Total')!!}
                <input  name="totalCompra" id="totalCompra" class="form-control" value="0" type="number" disabled/>
              </div>
					 </div>
					</div>
					<!-- Large modal -->
					<button type="button" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target=".bs-example-modal-lg"> Producto</button>
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<center>
  					<div class="modal-dialog modal-lg" role="document">
	            <div class="container-fluid">
                <div class="box box-success">
  		            <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
           					    <div class="modal-content">
           					      <div class="col-md-12">
        					          <h4>PRODUCTO</h4>
             				      </div>
             				      <div class="col-md-3">
                  					{!!form::label('codigo Producto')!!}
                            <div class="input-group margin">
                              <input type="text" class="form-control" name="codProducto" id="codProd" onkeypress="buscarPresentaciones(this);">
                              <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="button" ><font><font class="glyphicon glyphicon-zoom-in"></font></font></button>
                              </span>
                            </div>
                            {!!form::label('presentacion')!!}
                  				  <select id="presentacion_id" class="form-control" name="presentacion_id" >
                  				  </select>
                            {!!form::label('Estante de ubicacion')!!}
                  				  <select id="estante_id" class="form-control" name="estante_id" >
                     				 @foreach($estantes as $est)
                         			<option value="{{$est->id}}">{{$est->nombreEst}}</option>
                     				 @endforeach
                  				</select>
                		    </div>
                        <br>
                		    <div class="col-md-4">
                          {!!form::label('Cantidad')!!}
        				          {!!form::text('cantidad',null,['id'=>'cantidad','class'=>'form-control','placeholder'=>'Ingrese Cantidad'])!!}

                					{!!form::label('Precio de compra')!!}
                					{!!form::number('precioCompra',null,['id'=>'precioCompra','class'=>'form-control','placeholder'=>'Ingrese precio de compra'])!!}

                					{!!form::label('Precio Minimo de venta')!!}
                					{!!form::text('precioMinVenta',null,['id'=>'precioMinVenta','class'=>'form-control','placeholder'=>'Ingrese Minimo de venta'])!!}
                				</div>
              					<div class="col-md-4">
                					{!!form::label('Precio Maximo de venta')!!}
                					{!!form::text('precioMaxVenta',null,['id'=>'precioMaxVenta','class'=>'form-control','placeholder'=>'Ingrese Maximo de venta'])!!}

                					{!!Form::label('lbFecVen','Fecha de Vencimiento ')!!}
                					{!!Form::date('fechaVencimiento',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}

                          {!!form::label('Lote')!!}
        				          {!!form::text('lote',null,['id'=>'lote','class'=>'form-control','placeholder'=>'Ingrese Cantidad'])!!}
        				        </div>
        		            <div class="col-md-4">
                          <br><br><br>
                          <input class="btn btn-primary" name="btnInsertarProducto" id="btnInsertarProducto" type="button" value="Agregar" onClick="addProductoCompra()"/>
                          {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        		           </div>
        				     </div>
           					</div>
                  </div>
          			</div>
        			</div>
        		</div>
      		</div> {{-- modal --}}
				</div>
				</center>
			</div>
		</div>
	</table>
</div>
<div class="box-body">
		<table class="table  table-bordered taC table-hover" name="tablaArticulosVenta" id="tblDatosCompra">
      <tr>
        <th>Lote</th>
			 <th>Producto</th>
			 <th>Presentación</th>
			 <th>Estante</th>
			 <th>cantidad</th>
       <th>P/C ($)</th>
       <th>P/MinV ($)</th>
       <th>P/MaxV ($)</th>
       <th>Caducidad</th>
			 <th>Total ($)</th>
       <th>Opción</th>
      </tr>
    </table>
			</div>
		 </div>
		</div>
  </div>
