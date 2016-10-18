<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table="detalle_compras";
    protected $primaryKey='id';
    protected $fillable = ['producto_id','cantidad', 'precioCompra', 'precioMinVenta','precioMaxVenta','fechaVencimiento','lote','compra_id','IVA','estante_id','presentacion_id'];

 public static function nombreProd($id){
    $n=\SICVFG\producto::find($id);
    return $n->nombreProd;
    }
  //  public static function nombre($id){
  //  return  $producto = DB::table('productos')
  //          ->join('nombreProd', 'producto.id', '=', 'producto_id')
  //          ->select('producto.*', 'producto.nombreProd',)
  //          ->get();
   //    }
}
