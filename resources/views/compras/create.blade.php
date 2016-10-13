
@extends ('layouts.principal1')

@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'compras.store','method'=>'POST']) !!}

    @include('compras.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop
