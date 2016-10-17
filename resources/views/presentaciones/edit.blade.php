
@extends ('layouts.principal1')
@section('content')
@include('alertas.request')

<div class="box box-primary">
  <div class="panel">
    <div class="enc">
      <center> 
        <strong>
        <h2> {{ $nombreProd }}</h2>
        </strong>
      </center>
     
    </div>
  {!! Form::model($presentaciones,['route'=>['presentaciones.update',$presentaciones->id],'method'=>'PUT']) !!}
    @include('presentaciones.Formularios.formulario')
   <button class="btn btn-primary">
      <span class="glyphicon glyphicon-refresh"></span> Actualizar
    </button>
     {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
     {!!link_to_action("PresentacionesController@todosAtras", $title = "Atras", $parameters = $producto, $attributes = ["class"=>"btn btn-danger"])!!}
    {!!Form::close()!!}
  </div>
</div>
@stop