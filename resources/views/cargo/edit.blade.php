@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($cargos,['route'=>['cargo.update',$cargos->id],'method'=>'PUT']) !!}
  @include('cargo.formulario.frmCargo')
  <button class="btn btn-primary">
    <span class="glyphicon glyphicon-refresh"></span> Actualizar
  </button>
  {!!link_to_action("CargoController@index", $title = "Cancelar", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
@stop
