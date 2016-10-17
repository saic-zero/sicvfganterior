@extends ('layouts.admin')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($empleados,['route'=>['empleado.update',$empleados->id],'method'=>'PUT']) !!}
  @include('empleado.formulario.forEmpleado')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("EmpleadoController@index", $title = "Cancelar", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
