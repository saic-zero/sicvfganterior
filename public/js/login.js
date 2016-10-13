// funcion para alertas
document.querySelector('.warning.cancel a').onclick = function(){
  swal({
    title: "¿Recuperar Contraseña?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Aceptar',
    cancelButtonText: "Cancelar ",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      swal("Operación realizada con éxito !!", "", "success");
    } else {
      swal("Operación cancelada !!", "", "error");
    }
  });
};
