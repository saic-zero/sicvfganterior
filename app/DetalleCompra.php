<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;
use DB;

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
// funcion para obtener el total de de medicamentos vendidos de un determinado medicamento
    public static function productoVendido($detalleCompra,$lote){
      $detalle = DetalleVenta::where('detalleCompra_id',$detalleCompra)->sum('cantidad');
      return $detalle;
    }


}
