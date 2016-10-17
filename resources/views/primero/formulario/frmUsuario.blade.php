<?php $opcion=3; ?>
@extends('layouts.primeraConfi')
@section('primeraConfi')
@include('alertas.request')
{!! Form::open(['route'=>'primerUsuario.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
  <div class="box-header with-border">
    <h3 class="box-title">Nuevo Usuario</h3>
    <h6 class="campoObligatorio2">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           {!!Form::label('limagen','Imagen:')!!}
           {!!Form::file('nombre_img',['value'=>'Elija'])!!}
         </div>
         <div class="form-group">
          {!!Form::label('lbEmpleados','Empleados:')!!}
          <select class="form-control" name="user_id", id="selectEmpleado">
            <option value="">[Seleccione una opción]</option>
            @foreach($empleados as $emp)
            <option value="{{$emp->codEmpleado}}">{{$emp->nombresEmp.' '.$emp->apellidosEmp}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->
      <div class="form-group">
        {!!form::label('* Usuario')!!}
        {!!form::text('name',null,['id'=>'cod','class'=>'form-control','placeholder'=>'usuario','ReadOnly','required'])!!}
      </div><!-- /.form-group -->
    </div><!-- /.col -->
    <div class="col-md-6">
		    <div class="form-group">
          {!!form::label('* Contraseña')!!}
          {!!form::password('password',['class'=>'form-control','placeholder'=>'ingrese su password de usuario','required'])!!}
        </div><!-- /.form-group -->
        <div class="form-group">
          {!!form::label('* Correo')!!}
          {!!form::email('email',null,['class'=>'form-control','placeholder'=>'ingrese su correo de usuario','required'])!!}
        </div><!-- /.form-group -->
        <div class="form-group">
          {!!Form::label('lbcuenta','* Tipo de Cuenta:')!!}
          <select class="form-control" name="tipoCuenta">
            <option value="1">Administrador</option>
            <option value="2">Vendedor</option>
          </select>
        </div><!-- /.form-group -->
      </div><!-- /.col -->
    </div><!-- /.col -->
  </div><!-- /.row -->
    <button class="btn btn-github">
    	<span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
    {!! Form::close() !!}
    @stop
