{!! Form::open(['route'=>['compras.destroy',$compras->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
