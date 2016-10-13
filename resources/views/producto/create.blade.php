
@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'producto.store','method'=>'POST']) !!}
     @include('producto.formulario.forProductoCreate')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
  {!! Form::close() !!}
	@endsection
