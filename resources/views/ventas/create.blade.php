
@extends ('layouts.principal1')

@section('content')
<?php $bandera=1; ?>
@include('alertas.request')
{!! Form::open(['route'=>'ventas.store','method'=>'POST','name'=>'formSell','id'=>'formSell']) !!}

    @include('ventas.formulario.forVentas')
  
{!! Form::close() !!}
	@stop
