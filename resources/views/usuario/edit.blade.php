@extends('layouts.admin')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
@include('usuario.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
