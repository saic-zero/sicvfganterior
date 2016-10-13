@extends('layouts.principal1')
@section('content')
@include('alertas.request')
{!! Form::model($compras,['route'=>['detallecompras.update',$detallecompras->id],'method'=>'PUT']) !!}
@include('detallecompras.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
