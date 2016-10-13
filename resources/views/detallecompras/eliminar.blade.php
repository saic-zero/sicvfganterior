{!! Form::open(['route'=>['detallecompras.destroy',$detallecompras->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
