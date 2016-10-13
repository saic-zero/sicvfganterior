
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
        			<div class="col-md-4">
					{!!form::label('Proveedor')!!}
				    <select id="proveedor_id" class="form-control" name="proveedor_id" >
         				 @foreach($proveedor as $emp)
         				 <option value = "Elegir...." >Elegir....</option>
             				 <option value="{{$emp->id}}">{{$emp->nombreProv}}</option>
         				 @endforeach
        				</select>
        		    </div>


        		    <div class="col-md-4">
					{!!Form::label('lbFecha','Fecha de Compra')!!}
					{!!Form::date('fechaCompra',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
					</div>

					<div class="col-md-4">
					{!!form::label('Numero de comprbante de compra')!!}
					 <input type="text" class="form-control" id="numComprobanteCompra" name="numComprobanteCompra" placeholder="Numero de comprobate de compra">
					</div>

					<div class="col-md-4">
					{!!form::label('tipo de compra')!!}
				     <select id="tipoCompra" class="form-control" name="tipoCompra" >
						<option value = "Elegir...." >Elegir....</option>
						<option value = "Credito" >Credito</option>
						<option value = "Contado" >Contado</option>
					</select>
        		    </div>

        		    	
        		    <div class="col-md-4">
					{!!form::label('Descripcion de la Compra')!!}
					 <input type="text" class="form-control" id="descripcionCompra" name="descripcionCompra" placeholder="Descripcion sobre la compra">
					</div>
					</div>
					</div> 

					<!-- Large modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">DETALLE DE COMPRA</button>

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
        					<h4>DATOS ESPESIFICOS</h4>
             				 </div>  
             				 <div class="col-md-4">
        					{!!form::label('codigo Producto')!!}
        				    <select id="producto_id" class="form-control" name="producto_id" >
                 				 @foreach($productos as $pro)
                 				 <option value = "Elegir...." >Elegir....</option>
                     				 <option value="{{$pro->id}}">{{$pro->codProducto}}</option>
                 				 @endforeach
                				</select>
                		    </div>  

                		     <div class="col-md-4">
        					{!!form::label('presentacion')!!}
        				    <select id="presentacion_id" class="form-control" name="presentacion_id" >
                 				 @foreach($categorias as $cat)
                 				 <option value = "Elegir...." >Elegir....</option>
                     				 <option value="{{$cat->id}}">{{$cat->nombreCategoria}}</option>
                 				 @endforeach
                				</select>
                		    </div>  

                		     <div class="col-md-4">
        					{!!form::label('Estante de ubicacion')!!}
        				    <select id="estante_id" class="form-control" name="estante_id" >
                 				 @foreach($estantes as $est)
                     				 <option value="{{$est->id}}">{{$est->nombreEst}}</option>
                 				 @endforeach
                				</select>
                		    </div>  


                		     <div class="col-md-4">
                            {!!form::label('Cantidad')!!}
        				    {!!form::text('cantidad',null,['id'=>'cantidad','class'=>'form-control','placeholder'=>'Ingrese Cantidad'])!!}
        				    </div>
                			  

                		    <div class="col-md-4">
        					{!!form::label('Precio de compra')!!}
        					{!!form::number('precioCompra',null,['id'=>'precioCompra','class'=>'form-control','placeholder'=>'Ingrese precio de compra'])!!}
        					</div>

                            <div class="col-md-4">
        					{!!form::label('Precio Minimo de venta')!!}
        					{!!form::text('precioMinVenta',null,['id'=>'precioMinVenta','class'=>'form-control','placeholder'=>'Ingrese Minimo de venta'])!!}
        					</div>

        					<div class="col-md-4">
        					{!!form::label('Precio Maximo de venta')!!}
        					{!!form::text('precioMaxVenta',null,['id'=>'precioMaxVenta','class'=>'form-control','placeholder'=>'Ingrese Maximo de venta'])!!}
        				    </div>
        					
        					

                		    <div class="col-md-4">
        					{!!Form::label('lbFechaIngSuc','Fecha de Vencimiento ')!!}
        					{!!Form::date('fechaVencimiento',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
        					</div>


        				    <div class="col-md-4">
                            {!!form::label('IVA')!!}
        				    {!!form::text('IVA',null,['id'=>'IVA','class'=>'form-control','placeholder'=>'Ingrese IVA '])!!}
        				    </div>

        				    <div class="col-md-4">
                            {!!form::label('Lote')!!}
        				    {!!form::text('lote',null,['id'=>'lote','class'=>'form-control','placeholder'=>'Ingrese Cantidad'])!!}
        				    </div>
                		        <div class="col-md-4">
        				      
        				       <input type="button" id="row_add" value="Agregar Fila" onclick="agre()" onKeyPress="agre()" onKeyUp="agre()"/>
        				       </div>   

        				        <div class="col-md-4">
        				        {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!} 
        				         </div>    

        		               <div class="col-md-4">
        		                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
        		                 </div>
        		     
        				     </div>
           					 </div>

          					</div>
        					</div>
        					</div>
      					</div>
					</div>
					</center>
					</div>
					
					</div>
					</table> 
				
					</div>
					     			 
			


				 
				<h4>PRODUCTOS</h4>
				<div >

				 <div class="col-md-4">
				      <input type="button" id="delete" value="Borrar" onclick="deleteRow()"/>

		              <span>columna</span> <input type="number2" id="t" name="somecode" min="0"  onkeypress="return isNumberKey(event)" onKeyUp="agregar()"/>
		               </div>

						<table class="table  table-bordered taC table-hover" id="myTable"  name="table1">
            <thead>
                <tr>
				 <th>Producto</th>
				 <th>Cantidad</th>
				 <th>PrecioCompra</th>
				 <th>precio Minomo</th>
				 <th>precio maximo</th>
				 <th>Fecha Vencimineto</th>
				 <th>lote</th> 
				 <th>presentacion</th>  
				 <th>Compra</th>             
                 <th>iva</th>					   
                 <th>estante</th>
                                     
                    
                </tr>
                  
            </thead>

            <tbody> 
            @foreach($detallecompras as $detallecompras)
             <tr>
    		
   			<td>{{$detallecompras->producto_id}}</td>
    		<td>{{$detallecompras->cantidad}}</td>
   			<td>{{$detallecompras->precioCompra}}</td>
   			<td>{{$detallecompras->precioMinVenta}}</td>
    		<td>{{$detallecompras->precioMaxVenta}}</td>
    		<td>{{$detallecompras->fechaVencimiento}}</td>
    		<td>{{$detallecompras->lote}}</td>
    		<td>{{$detallecompras->presentacion_id}}</td>
    		<td>{{$detallecompras->compra_id}}</td>
    		<td>{{$detallecompras->IVA}}</td>
    		<td>{{$detallecompras->estante_id}}</td>
    		<td>@include('detallecompras.eliminar')</td>

    		</tr> 
 @endforeach
            </tbody>
  
 
               
        </table>
					</div>
				 </div>
				</div>
             </div>
   