
@extends ('layouts.principal1')

@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'detallecompras.store','method'=>'POST']) !!}

    @include('detallecompras.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop

	