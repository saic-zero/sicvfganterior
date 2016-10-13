@extends ('layouts.principal1')
@section('content')

<div class="box box-primary">
  <div class="panel">
    <div class="enc">
      <center> 
        <strong>
        <h2> {{ $nombreProd }}</h2>
        </strong>
      </center>
     
    </div>
    {!! Form::open(['url'=>['guardarPresentaciones',$producto],'method'=>'POST']) !!}
    @include('Presentaciones.Formularios.formulario')
     <button class="btn btn-primary">
      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
     {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
     {!!link_to_action("PresentacionesController@todosAtras", $title = "Atras", $parameters = $producto, $attributes = ["class"=>"btn btn-danger"])!!}
    {!!Form::close()!!}
  </div>
</div>
@stop
