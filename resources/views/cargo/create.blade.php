@extends('layouts.admin')
@section('content')

{!! Form::open(['route'=>'cargo.store','method'=>'POST']) !!}
    @include('cargo.formulario.frmCargo')
    <button class="btn btn-primary">
      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
{!! Form::close() !!}

@stop
