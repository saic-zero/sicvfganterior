
<?php
if($bandera==1){
	$cuenta=null;
}else{
$cuenta = $user->tipoCuenta;
}
 ?>
<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Nuevo Usuario</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
       <div class="box-body">
        <div class="row">
          <div class="col-md-6">

             <div class="form-group">
              {!!Form::label('limagen','Imagen:')!!}
              {!!Form::file('nombre_img',['value'=>'Elija'])!!}
              </div>
            	<div class="form-group">
								@if($bandera==1)
								  {!!Form::label('lbEmpleados','Empleados:')!!}
		              <select class="form-control" name="user_id", id="selectEmpleado">
		                <option value="">[Seleccione una opción]</option>
                    @foreach($empleados as $emp)
                        <option value="{{$emp->codEmpleado}}">{{$emp->nombresEmp.' '.$emp->apellidosEmp}}</option>
                      @endforeach
                  </select>
								@else
									{!!form::hidden('user_id',null,['id'=>'user_id','class'=>'form-control'])!!}
								@endif
							</div><!-- /.form-group -->

                <div class="form-group">
                {!!form::label('* Usuario')!!}
              {!!form::text('name',null,['id'=>'cod','class'=>'form-control','placeholder'=>'usuario','ReadOnly'])!!}
            </div><!-- /.form-group -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <br><br><br>
							<div class="form-group">
								@if($bandera==1)
              	{!!form::label('* Contraseña')!!}
              	{!!form::password('password',['class'=>'form-control','placeholder'=>'ingrese su contraseña de usuario','required'])!!}
							@else
								{!!form::label(' Contraseña')!!}
								{!!form::password('password',['class'=>'form-control','placeholder'=>'sino digita nada en este campo su contraseña no cambia'])!!}
							@endif
							</div><!-- /.form-group -->
              <div class="form-group">
              {!!form::label('* Correo')!!}
              {!!form::email('email',null,['class'=>'form-control','placeholder'=>'ingrese su correo de usuario','required'])!!}

            </div><!-- /.form-group -->
            <div class="form-group">
              {!!Form::label('lbCuenta','* Tipo de Cuenta:')!!}
              <select class="form-control" name="tipoCuenta">
                @if($cuenta==null)
                  <option value="1">Administrador</option>
                  <option value="2">Vendedor</option>
								@endif
                @if($cuenta==1)
                  <option value="1" selected="selected">Administrador</option>
                  <option value="2">Vendedor</option>
                @endif
								@if($cuenta==2)
                  <option value="1">Administrador</option>
                  <option value="2" selected="selected">Vendedor</option>
                @endif
              </select>
            </div><!-- /.form-group -->
          </div><!-- /.col -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
