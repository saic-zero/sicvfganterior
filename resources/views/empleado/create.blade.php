
@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'empleado.store','method'=>'POST']) !!}
  @include('empleado.formulario.forEmpleado')
  {!! Form::submit(' Registrar',['class'=>'btn btn-primary glyphicon glyphicon-floppy-disk']) !!}
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("EmpleadoController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
