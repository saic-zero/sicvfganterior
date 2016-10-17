@extends('layouts.admin')
@section('content')
{!! Form::open(['route'=>'cargo.store','method'=>'POST']) !!}
  @include('cargo.formulario.frmCargo')
  <button class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
  </button>
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("CargoController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
