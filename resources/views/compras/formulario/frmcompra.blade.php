<div class="logo-lg">
  <h3 >REGISTRO DE COMPRAS</h3>
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
            <button type="button" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target=".bs-example-modal-lg"> Producto</button>
            </div>
            <!-- boton modal -->
        		<div class="col-md-3">
					    {!!form::label('Vendedor')!!}
				      <select id="vendedor_id" class="form-control" name="vendedor_id" >
         				 @foreach($vendedor as $emp)
             			<option value="{{$emp->id}}">{{$emp->nombreVen}}</option>
         				 @endforeach
        				</select>
                {!!Form::label('lbFecha','Fecha de Compra')!!}
                {!!Form::date('fechaCompra',null,['id'=>'fechaCompra','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
              </div>
    					<div class="col-md-3">
    					  {!!form::label('# Comprobante')!!}
    					  <input type="text" class="form-control" id="numComprobanteCompra" name="numComprobanteCompra" placeholder="Numero de comprobate de compra">
                {!!form::label('tipo de compra')!!}
    				    <select id="tipoCompra" class="form-control" name="tipoCompra" >
                  <option value = "Contado" >Contado</option>
      						<option value = "Credito" >Credito</option>
    					 </select>
              </div>
        		  <div class="col-md-3">
      					{!!form::label('Descripcion de la Compra')!!}
                {!!Form::textarea('descripcionCompra',null,['class'=>'form-control', 'placeholder'=>'Descripcion sobre la compra', 'rows'=>'2', 'cols'=>'5'])!!}
              </div>
              <div class="col-md-3">
                {!!form::label('Total')!!}
                <input  name="totalCompra" id="totalCompra" class="form-control" value="0" type="number","ReadOnly" />
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
              </div>
					 </div>
					</div>

					<!-- Large modal -->
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
             				      <div class="col-md-6">
                  					{!!form::label('codigo Producto')!!}
                            <input type="text" class="form-control" name="codProducto" id="codProd" onkeypress="buscarPresentaciones(this);">
                            {!!form::label('presentacion')!!}
                            <select id="presentacion_id" class="form-control" name="presentacion_id" >
                            </select>
                            {!!form::label('Cantidad')!!}
          				          {!!form::number('cantidad',null,['id'=>'cantidad','min'=>1,'class'=>'form-control','min'=>'0','placeholder'=>'Ingrese Cantidad'])!!}
                            {!!form::label('Precio Minimo de venta')!!}
                            {!!form::text('precioMinVenta',null,['id'=>'precioMinVenta','class'=>'form-control','min'=>'0','placeholder'=>'Ingrese Minimo de venta'])!!}
                            {!!Form::label('lbFecVen','Fecha de Vencimiento ')!!}
                  					{!!Form::date('fechaVencimiento',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...'])!!}
                		      </div>
                        <br>
                		    <div class="col-md-6">
                          {!!form::label('Producto')!!}
                          {!!form::text('nombProd',null,['id'=>'nombProd','class'=>'form-control','placeholder'=>'producto'])!!}
                          {!!form::label('Estante de ubicacion')!!}
                          <select id="estante_id" class="form-control" name="estante_id" >
                           @foreach($estantes as $est)
                            <option value="{{$est->id}}">{{$est->nombreEst}}</option>
                           @endforeach
                         </select>
                          {!!form::label('Precio de compra')!!}
                          {!!form::number('precioCompra',null,['id'=>'precioCompra','class'=>'form-control','min'=>'0','placeholder'=>'Ingrese precio de compra'])!!}
                          {!!form::label('Precio Maximo de venta')!!}
                					{!!form::text('precioMaxVenta',null,['id'=>'precioMaxVenta','class'=>'form-control','min'=>'0','placeholder'=>'Ingrese Maximo de venta'])!!}
                          {!!form::label('Lote')!!}
                          {!!form::text('lote',null,['id'=>'lote','class'=>'form-control','placeholder'=>'Numero de lote'])!!}
                			  </div>
        		            <div class="col-md-4">
                          <br><br><br>
                          <input class="btn btn-primary" name="btnInsertarProducto" id="btnInsertarProducto" type="button" value="Agregar" onClick="addProductoCompra()"/>
                          <button type="button" class="btn btn-primary" value="limpiar" onClick="limpiar()" >Limpiar</button>
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
      <th bgcolor="#e5eef7"> ---- </th>
      <th bgcolor="#e5eef7">N° LOTE</th>
      <th bgcolor="#e5eef7">PRODUCTO</th>
      <th bgcolor="#e5eef7">PRESENTACIÓN</th>
      <th bgcolor="#e5eef7">CANTIDAD</th>
       <th bgcolor="#e5eef7">P/C ($)</th>
       <th bgcolor="#e5eef7">P/MINV ($)</th>
       <th bgcolor="#e5eef7">P/MAXV ($)</th>
       <th bgcolor="#e5eef7">CADUCIDAD</th>
			 <th bgcolor="#e5eef7">TOTAL ($)</th>
      </tr>
    </table>
			</div>
		 </div>
		</div>
  </div>
