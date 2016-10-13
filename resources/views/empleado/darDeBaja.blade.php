{!! Form::open(['route'=>['empleado.destroy',$empleado->id],'method'=>'DELETE']) !!}
 <button class="warning cancel delete-modal btn btn-danger"
 alt="" onclick="return swal({
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
    <span class="glyphicon glyphicon-trash"></span> Dar de Baja
  </button>
{!! Form::close() !!}
