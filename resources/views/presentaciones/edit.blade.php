@extends('layouts.admin')
<?php $bandera=1; ?>
@section('content')
@include('alertas.request')

{!! Form::model($presentaciones,['route'=>['presentaciones.update',$presentaciones->id],'method'=>'PUT']) !!}
@include('presentaciones.formulario.forPresentaciones')

{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
{!!link_to_action("frontController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}

{!! Form::close() !!}
@stop
