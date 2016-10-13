
@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'presentaciones.store','method'=>'POST']) !!}

    @include('presentaciones.formulario.forPresentacionesCreate')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
  {!! Form::reset('Cancelar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
	@endsection

   