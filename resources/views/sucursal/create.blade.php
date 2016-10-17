@extends('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'sucursal.store','method'=>'POST']) !!}
  @include('sucursal.formulario.sucur')
  <button class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
  </button>
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("SucursalController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
