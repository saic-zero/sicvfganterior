@extends('layouts.principal1')
@section('content')
@include('alertas.request')
{!! Form::model($estante,['route'=>['estante.update',$estante->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
@include('estante.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop



