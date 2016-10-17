@extends('layouts.principal1')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'PUT']) !!}
@include('producto.formulario.forProducto')
<button class="btn btn-primary">
      <span class="glyphicon glyphicon-refresh"></span> Actualizar
    </button>
{!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
{!!link_to_action("ProductoController@show", $title = "Atras", $parameters = $producto->id, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop




