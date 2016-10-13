@extends ('layouts.admin')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($empleados,['route'=>['empleado.update',$empleados->id],'method'=>'PUT']) !!}
    @include('empleado.formulario.forEmpleado')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop
