@extends('layouts.admin')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'PUT']) !!}
@include('producto.formulario.forProducto')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop




