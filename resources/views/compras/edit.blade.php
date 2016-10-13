@extends('layouts.principal1')
@section('content')
@include('alertas.request')
{!! Form::model($compras,['route'=>['compras.update',$compras->id],'method'=>'PUT']) !!}
@include('compras.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
