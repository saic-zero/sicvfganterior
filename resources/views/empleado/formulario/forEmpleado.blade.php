<?php
if($bandera==1){
	$suc=null;
	$car=null;
	$sex=null;
}else{
	$suc = $empleados->sucursal_id;
	$car = $empleados->cargo_id;
	$sex = $empleados->sexo;
}
 ?>
 <div class="box box-primary">
	 <div class="box-header with-border">
		 <h3 class="box-title">Nuevo Empleado</h3>
		 <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
	 </div><!-- /.box-header -->
	 	<div class="box-body">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab">Datos personales</a></li>
					<li><a href="#tab_2" data-toggle="tab">Documentos de identificación</a></li>
					<li><a href="#tab_3" data-toggle="tab">Datos Laborales</a></li>
				</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1">
					<div class="col-md-6"><br>
						<div class="form-group">
							{!!Form::label('lbNombre','* Nombres:')!!}
						  {!!Form::text('nombresEmp',null,['class'=>'form-control', 'placeholder'=>'Nombres del Empleado...','required'])!!}
						 </div><!-- /.form-group -->
						 <div class="form-group">
							 {!!Form::label('lbApellidos','* Apellidos:')!!}
							 {!!Form::text('apellidosEmp',null,['class'=>'form-control', 'placeholder'=>'Apellidos del Empleado...','required'])!!}
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbSexo','* Sexo:')!!}
							<select class="form-control" name="sexo">
								@if($sex==null)
									<option>Masculino</option>
									<option>Femenino</option>
								@endif
								@if($sex=='Femenino')
									<option>Femenino</option>
								@endif
								@if($sex=='Masculino')
									<option>Masculino</option>
								@endif
							</select>
						</div><!-- /.form-group -->
					</div><!-- /.col primera columna -->
					<div class="col-md-6"><br>
						<div class="form-group">
							{!!Form::label('lbFechaNac','* Fecha de Nacimiento:')!!}
							@if($bandera==1)
							{!!Form::date('fechaNacimiento',null,['class'=>'form-control', 'placeholder'=>'Fecha...','max'=>'1998-12-31','required'])!!}
						@else
							{!!Form::date('fechaNacimiento',null,['class'=>'form-control', 'placeholder'=>'Fecha...','max'=>'1998-12-31','ReadOnly'])!!}
								@endif()
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbTelefono','* Teléfono :')!!}
							{!!Form::text('telefonoEmp',null,['onKeyPress'=>'return validarTelefono(event)','id'=>'telefonoEmp','class'=>'form-control', 'placeholder'=>'Telefono ..','required'])!!}
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbDomicilio','* Domicilio:')!!}
							{!!Form::textarea('direccionEmp',null,['class'=>'form-control', 'placeholder'=>'Domicilio del Empleado...', 'rows'=>'2', 'cols'=>'5','required'])!!}
						</div><!-- /.form-group -->
					</div><!-- /.col segunda columna -->
					<p>formulario 1 de 3</p>
				</div><!-- /.tab-pane  cierre tab 1-->
				<div class="tab-pane" id="tab_2">
					<div class="col-md-6"><br>
						<div class="form-group">
							{!!Form::label('lbDui','* DUI:')!!}
							@if($bandera==1)
							{!!Form::text('DUI',null,['onKeyPress'=>'return validarDUI(event)','id'=>'DUI','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','required'])!!}
						@else
							{!!Form::text('DUI',null,['onKeyPress'=>'return validarDUI(event)','id'=>'DUI','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','ReadOnly'])!!}
						@endif
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbNit','* NIT:')!!}
							@if($bandera==1)
							{!!Form::text('NIT',null,['onKeyPress'=>'return validarNIT(event)','id'=>'NIT','class'=>'form-control', 'placeholder'=>'Numero de Identificación Tributaria...','required'])!!}
							@else
								{!!Form::text('NIT',null,['onKeyPress'=>'return validarNIT(event)','id'=>'NIT','class'=>'form-control', 'placeholder'=>'Numero de Identificación Tributaria...','ReadOnly'])!!}
								@endif
						</div><!-- /.form-group -->
					</div><!-- /.col -->
					<div class="col-md-6"><br>
						<div class="form-group">
							{!!Form::label('lbAFP','Número de AFP:')!!}
							{!!Form::text('numAFP',null,['onKeyPress'=>'return validarNIT(event)','id'=>'numAFP','class'=>'form-control', 'placeholder'=>'Numero de AFP...'])!!}
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbISSS','Número de ISSS:')!!}
							{!!Form::text('numISSS',null,['onKeyPress'=>'return validarISSS(event)','id'=>'numISSS','class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','id'])!!}
						</div><!-- /.form-group -->
					</div><!-- /.col -->
					<p>formulario 2 de 3</p>
				</div><!-- /.tab-pane -->
				<div class="tab-pane" id="tab_3">
					<div class="col-md-6"><br>
						<div class="form-group">
							{!!Form::label('lbCodEmp','* Código_Empleado:')!!}
							@if($bandera==1)
							{!!Form::text('codEmpleado',null,['class'=>'form-control','onKeyPress'=>'return validarCodEmp(event)','id'=>'codEmpleado', 'placeholder'=>'Codigo de Empleado...','required'])!!}
						@else
							{!!Form::text('codEmpleado',null,['class'=>'form-control','onKeyPress'=>'return validarCodEmp(event)','id'=>'codEmpleado', 'placeholder'=>'Codigo de Empleado...','ReadOnly'])!!}
						@endif
							</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbFechaIngSuc','* Fecha de Ingreso:')!!}
							@if($bandera==1)
							{!!Form::date('fechaIngrSuc',null,['id'=>'fechaIngSuc','class'=>'form-control', 'max'=>'','placeholder'=>'Fecha de ingreso a farmacia...','required'])!!}
							@else
								{!!Form::date('fechaIngrSuc',null,['id'=>'fechaIngSuc','class'=>'form-control', 'max'=>'2016-10-20','placeholder'=>'Fecha de ingreso a farmacia...','ReadOnly'])!!}
							@endif
					</div><!-- /.form-group -->
				</div><!-- /.col -->
				<div class="col-md-6"><br>
					<div class="form-group">
						{!!Form::label('lbSucursal','* Sucursal:')!!}
						<select class="form-control" name="sucursal_id">
							@foreach($sucursals as $s)
								@if($suc==$s->id && $suc!=null)
									<option value="{{$s->id}}" selected="selected">{{$s->nombreSuc}}</option>
								@else
									<option value="{{$s->id}}">{{$s->nombreSuc}}</option>
								@endif
							@endforeach
						</select>
					</div><!-- /.form-group -->
					<div class="form-group">
						{!!Form::label('lbCargo','* Cargo:')!!}
						<select class="form-control" name="cargo_id">
							@foreach($cargos as $c)
								@if($car==$c->id && $car!=null)
									<option value="{{$c->id}}" selected="selected">{{$c->nombreCargo}}</option>
								@else
								<option value="{{$c->id}}" >{{$c->nombreCargo}}</option>
								@endif
							@endforeach
						</select>
					</div><!-- /.form-group -->
					<div class="form-group">
						{!!Form::label('lbRefPer','Referencia laboral:')!!}
						{!!Form::text('referenciaLaboral',null,['id'=>'referenciaP','class'=>'form-control', 'placeholder'=>'Referencia Laboral...'])!!}
					</div><!-- /.form-group -->
				</div><!-- /.col -->
				<p>formulario 3 de 3</p>
			</div><!-- /.tab-pane -->
		</div><!-- /.tab-content -->
	</div><!-- nav-tabs-custom -->
 </div><!-- /.row -->
</div><!-- /.box-body -->
