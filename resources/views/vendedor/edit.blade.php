@extends('layouts.principal1')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($vendedor,['route'=>['vendedor.update',$vendedor->id],'method'=>'PUT']) !!}
@include('vendedor.formulario.forVendedor')
 {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("VendedorController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}

@stop


