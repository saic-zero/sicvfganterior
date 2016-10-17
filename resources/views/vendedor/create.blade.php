@extends ('layouts.principal1')
<?php $bandera=1; ?>
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'vendedor.store','method'=>'POST']) !!}
    @include('vendedor.formulario.forVendedor')
    <button class="btn btn-primary">
      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("VendedorController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
	@endsection




