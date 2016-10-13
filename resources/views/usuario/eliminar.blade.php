{!! Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
