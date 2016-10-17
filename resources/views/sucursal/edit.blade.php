@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($sucursals,['route'=>['sucursal.update',$sucursals->id],'method'=>'PUT']) !!}
  @include('sucursal.formulario.sucur')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("SucursalController@index", $title = "Cancelar", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
