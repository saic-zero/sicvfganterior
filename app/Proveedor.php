<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     protected $table="proveedors";

    protected $fillable = ['nombreProv','RUC','correoProv','direccionProv','telefonoProv'];
}


