@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'usuario.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    @include('usuario.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
	@stop
