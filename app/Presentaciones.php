<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Presentaciones extends Model

{
	protected $table="presentaciones";
      protected $fillable = ['nombrePre','producto_id','equivale'];

       public static function nombreProd($id){
      $n = Producto::find($id);
      return $n->nombreProd;
    }

   
}
