$("#selectEmpleado").on('change',function(event){
  var empleado=$("#selectEmpleado").find('option:selected');
  var codigo=empleado.val();
  $("#cod").val(codigo);
});

// // funcion para alertas
// document.querySelector('.warning.cancel').onclick = function(){
//   swal({
//     title: "¿Estás seguro?",
//     type: "warning",
//     showCancelButton: true,
//     confirmButtonColor: '#DD6B55',
//     confirmButtonText: 'Aceptar',
//     cancelButtonText: "Cancelar ",
//     closeOnConfirm: false,
//     closeOnCancel: false
//   },
//   function(isConfirm){
//     if (isConfirm){
//       swal("Operación realizada con éxito !!", "", "success");
//     } else {
//       swal("Operación cancelada !!", "", "error");
//     }
//   });
// };
