<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table="vendedors";

    protected $fillable = ['nombreVen','DUIVen','correoVen','direccionVen','telefonoVen','proveedor_id'];


      public static function nombreProveedor($id){
    $n=\SICVFG\Proveedor::find($id);
    return $n->nombreProv;
    }
}
