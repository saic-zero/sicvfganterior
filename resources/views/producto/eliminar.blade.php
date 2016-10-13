{!! Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Habilitar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}