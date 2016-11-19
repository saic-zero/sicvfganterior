<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Empleado extends Model
{
  protected $table="empleados";
  protected $fillable = ['codEmpleado','nombresEmp', 'apellidosEmp','direccionEmp','fechaNacimiento','sexo','telefonoEmp','DUI','NIT','numAFP','numISSS','referenciaLaboral','fechaIngrSuc','sucursal_id','cargo_id'];

  public static function nombreEmp($id){
        $emp=Empleado::find($id);
        return $emp->nombresEmp." ".$emp->apellidosEmp;
      }
      public static function codigoEmp($id){
            $emp=Empleado::find($id);
            return $emp->codEmpleado;
          }

}
