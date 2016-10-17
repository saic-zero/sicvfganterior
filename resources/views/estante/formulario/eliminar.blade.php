{!! Form::open(['route'=>['estante.destroy',$estante->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
