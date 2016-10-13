<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Empleado extends Model
{
  protected $table="empleados";
  protected $fillable = ['codEmpleado','nombresEmp', 'apellidosEmp','direccionEmp','fechaNacimiento','sexo','telefonoEmp','DUI','NIT','numAFP','numISSS','referenciaLaboral','fechaIngrSuc','sucursal_id','cargo_id'];


}
