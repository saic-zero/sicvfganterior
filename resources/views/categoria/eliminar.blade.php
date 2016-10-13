{!! Form::open(['route'=>['categoria.destroy',$categoria->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}