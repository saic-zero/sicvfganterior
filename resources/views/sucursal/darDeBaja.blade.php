{!! Form::open(['route'=>['sucursal.destroy',$sucursal->id],'method'=>'DELETE']) !!}
 <img src={!! asset('/images/faviconnBajaBoton.png') !!} alt="" class="circ" onclick="return swal({
title: '¿Esta seguro?',
text: 'Ya no estara disponible!',   type: 'warning',
showCancelButton: true,   confirmButtonColor: '#DD6B55',
confirmButtonText: 'Aceptar!',
cancelButtonText: 'Cancelar!',
closeOnConfirm: true,
closeOnCancel: false }, function(isConfirm){
if (isConfirm) {
  submit();
  swal({   title: 'Operación realizada con éxito !!',type:'success',
  text: 'Se Cerrará en 2 Segundos',   timer: 2000,
  showConfirmButton: true });
} else {
swal({   title: 'Operación cancelada !!',type:'error',
text: 'Se Cerrará en 2 Segundos',   timer: 2000,
showConfirmButton: false });} });"/>
{!! Form::close() !!}
