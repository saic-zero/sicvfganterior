@extends('layouts.admin')

@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'categoria.store','method'=>'POST']) !!}
    @include('categoria.formulario.forCategoria')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
