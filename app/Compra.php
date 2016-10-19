<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table="compras";
    protected $fillable = ['numComprobanteCompra','tipoCompra', 'fechaCompra', 'descripcionCompra','usuario_id','vendedor_id'];


    public static function nombreVen($id){
    $n=\SICVFG\Vendedor::find($id);
    return $n->nombreVen;
    }


}
