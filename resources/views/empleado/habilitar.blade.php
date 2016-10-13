{!! Form::open(['route'=>['empleado.show',$empleado->id],'method'=>'GET']) !!}
  <button  alt="" class="warning cancel delete-modal btn btn-success"
  onclick="return swal({
    title: '¿Estás seguro?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar '',
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      swal('Operación realizada con éxito !!'', '', 'success');
    } else {
      swal('Operación cancelada !!', '', 'error');
    }
  });">
    <span class="glyphicon glyphicon-trash"></span> Activar
  </button>
{!! Form::close() !!}
