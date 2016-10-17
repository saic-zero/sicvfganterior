
@extends ('layouts.principal1')

@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'compras.store','method'=>'POST','name'=>'formSell','id'=>'formSell']) !!}

    @include('compras.formulario.frmcompra')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop
