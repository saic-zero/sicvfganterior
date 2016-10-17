<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     protected $table="proveedors";

    protected $fillable = ['nombreProv','RUC','correoProv','direccionProv','telefonoProv'];


      public static function nombreProveedor($id){
    $n=\SICVFG\Proveedor::find($id);
    return $n->nombreProv;
    }

    public static function estadoProveedor($id){
    $e = Proveedor::find($id);
    return $e->estadoProv;
  }

    public static function estadoVendedor($id){
    $e = Vendedor::find($id);
    return $e->estadoVen;
  }

  //   public static function idProveedorDTV($id){
  //   $e = Vendedor::find($id);
  //   return $e->proveedor_id;
  // }

}


