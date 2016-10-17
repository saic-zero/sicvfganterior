@extends('layouts.admin')
<?php $bandera=0; ?>
@section('content')
@include('alertas.request')
{!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
@include('usuario.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("UsuarioController@index", $title = "Cancelar", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
  {!! Form::close() !!}
@stop
