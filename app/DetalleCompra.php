<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table="detalle_compras";
    protected $primaryKey='id';
    protected $fillable = ['producto_id','cantidad', 'precioCompra', 'precioMinVenta','precioMaxVenta','fechaVencimiento','lote','compra_id','estante_id','presentacion_id'];

 public static function nombreProd($id){
    $n=\SICVFG\Producto::find($id);
    return $n->nombreProd;
    }

 public static function nombrePresentacion($id){
    $n=\SICVFG\Presentaciones::find($id);
    return $n->nombrePre;
    }

     public static function nombreEstante($id){
    $n=\SICVFG\Estante::find($id);
    return $n->nombreEst;
    }

  
}
