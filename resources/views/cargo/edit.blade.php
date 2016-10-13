@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($cargos,['route'=>['cargo.update',$cargos->id],'method'=>'PUT']) !!}
    @include('cargo.formulario.frmCargo')
    <button class="btn btn-primary">
      <span class="glyphicon glyphicon-refresh"></span> Actualizar
    </button>
{!! Form::close() !!}
	@stop
