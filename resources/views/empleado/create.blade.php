
@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'empleado.store','method'=>'POST']) !!}

    @include('empleado.formulario.forEmpleado')
  {!! Form::submit(' Registrar',['class'=>'btn btn-primary glyphicon glyphicon-floppy-disk']) !!}
{!! Form::close() !!}
	@stop
