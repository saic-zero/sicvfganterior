@extends('layouts.principal1')
@section('content')
@include('alertas.request')
{!! Form::model($estante,['route'=>['estante.update',$estante->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
@include('estante.formulario.usr')
  <button class="btn btn-primary">
      <span class="glyphicon glyphicon-refresh"></span> Actualizar
    </button>
{!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("EstanteController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}

@stop



