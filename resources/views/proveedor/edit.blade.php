@extends('layouts.principal1')
@section('content')
@include('alertas.request')
{!! Form::model($proveedor,['route'=>['proveedor.update',$proveedor->id],'method'=>'PUT']) !!}
@include('proveedor.formulario.forProveedor')
 {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("ProveedorController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}

@stop
