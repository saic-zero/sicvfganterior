
@extends ('layouts.principal1')
<?php $bandera=1; ?>
@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'producto.store','method'=>'POST']) !!}
 @include('producto.formulario.forProducto')
  <button class="btn btn-primary">
      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
 {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
 {!!link_to_action("ProductoController@index", $title = "Atras", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
 {!! Form::close() !!}
@endsection
