
@extends ('layouts.principal1')

@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'estante.store','method'=>'POST']) !!}

    @include('estante.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop

	