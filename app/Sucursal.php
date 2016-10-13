<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursals';
    protected $fillable = ['nombreSuc','representanteSuc','direccionSuc','telefonoSuc']; // elemento que puede ser rellenado
}
