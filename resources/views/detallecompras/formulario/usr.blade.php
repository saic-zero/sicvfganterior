<div class="logo-lg">
  <h2 >REGISTRO DE COMPRAS</h2>
</div>
<div class="container-fluid">
     <div class="box box-success">
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
         
                 <table id="tabla1" class="table stacktable">


				 <div class="box-body">
        			<div class="row">

        			<div class="col-md-12">
        			<h4>Datos Generales</h4>
        			</div>

 					<div class="col-md-4">
					{!!form::label('Proveedor')!!}
				    <select class="form-control" name="idcompra" >
         				 @foreach($productos as $prod)
             				 <option value="{{$prod->id}}">{{$prod->proveedor_id}}</option>
         				 @endforeach
        				</select>
        		    </div>


        		    	<div class="col-md-4">
					{!!Form::label('lbFechaIngSuc','Fecha de Compra')!!}
					{!!Form::date('fecha Compra',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
					</div>


					<div class="col-md-4">
					{!!form::label('N° de comprbante de compra')!!}
					{!!form::text('comprobante',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de comprobante de compra'])!!}
					</div>

					<div class="col-md-4">
					{!!form::label('Tipo de compra')!!}
				     <select class="form-control" name="idcompra" >
						<option value = "Elegir...." >Elegir....</option>
						<option value = "Credito" >Credito</option>
						<option value = "Contado" >Contado</option>
					</select>
        		    </div>

  					<div class="col-md-4">
				    {!!form::label('Numero de Lote')!!}
					{!!form::text('lote',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de lote'])!!}
					</div>

					<div class="col-md-4">
					{!!Form::label('lbdireccion','* Descripcion de Compra ')!!}
							{!!Form::textarea('descripcion',null,['class'=>'form-control', 'placeholder'=>'Descripcion...','required', 'rows'=>'1', 'cols'=>'4'])!!}
							</div>

				  <div class="col-md-12">
        			<h4>Datos Especificos</h4>
        			</div>

        			<div class="col-md-4">
                    {!!form::label('Codigo de barra')!!}
				    {!!form::text('',null,['class'=>'form-control','placeholder'=>'Ingrese Codigo de barra'])!!}
				    </div>

				    <div class="col-md-4">
                    {!!form::label('producto')!!}
				    {!!form::text('Cantidad',null,['class'=>'form-control','placeholder'=>' '])!!}
				    </div>
				    <div class="col-md-4">
                    {!!form::label('Cantidad')!!}
				    {!!form::text('Cantidad',null,['class'=>'form-control','placeholder'=>'Ingrese Cantidad'])!!}
				    </div>


				    <div class="col-md-4">
					{!!form::label('Precio de compra')!!}
					{!!form::text('precioCompra',null,['class'=>'form-control','placeholder'=>'Ingrese precio de compra'])!!}
					</div>

                    <div class="col-md-4">
					{!!form::label('Precio Minimo de venta')!!}
					{!!form::text('nprecioMinVenta',null,['class'=>'form-control','placeholder'=>'Ingrese Minimo de venta'])!!}
					</div>

					<div class="col-md-4">
					{!!form::label('Precio Maximo de venta')!!}
					{!!form::text('precioMaxVenta',null,['class'=>'form-control','placeholder'=>'Ingrese Maximo de venta'])!!}
				    </div>
					
					<div class="col-md-4">
					{!!form::label('Descuento %')!!}
				     <select class="form-control" name="idcompra" >
						<option value = "Elegir...." >Elegir....</option>
						<option value = "Credito" >5%</option>
						<option value = "Contado" >10%</option>
						<option value = "Credito" >15%</option>
						<option value = "Contado" >20%</option>
						<option value = "Contado" >25%</option>
					</select>
        		    </div>

					<div class="col-md-4">
					{!!Form::label('lbFechaIngSuc','Fecha de Vencimiento ')!!}
					{!!Form::date('fechaVencimiento',null,['id'=>'fechaVencimiento','class'=>'form-control', 'placeholder'=>'Fecha de Vencimiento...','required'])!!}
					</div>
					

					<div class="col-md-4">
					{!!form::label('Estante de asignacion')!!}
				    <select class="form-control" name="idcompra" >
         				 @foreach($estante as $est)
             				 <option value="{{$est->id}}">{{$est->nombreEst}}</option>
         				 @endforeach
        				</select>
        				</div>

        				 <caption>
				<h4>PRODUCTOS</h4>
				<div class "form-group">
						<table border ="1" class = "table table-hover" >
					</caption>
						<thead>
								<th>codigo</th>
								<th>nombre</th>
								<th>descripcion</th>
								<th>Presentacion</th>
								<th>Categoria</th>
								<th>Total</th>
						</thead>
						<tbody id = "idProd" >
						</tbody>
					</table>
					</div>




				 </div>
				</div>
             </div>
         </div>
     </div>
  </div>
