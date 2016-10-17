@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'usuario.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    @include('usuario.formulario.usr')
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
    {!!link_to_action("UsuarioController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
