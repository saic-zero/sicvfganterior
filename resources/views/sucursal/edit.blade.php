@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($sucursals,['route'=>['sucursal.update',$sucursals->id],'method'=>'PUT']) !!}
    @include('sucursal.formulario.sucur')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop
