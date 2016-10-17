<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table="detalle_compras";
    protected $primaryKey='id';
    protected $fillable = ['producto_id','cantidad', 'precioCompra', 'precioMinVenta','precioMaxVenta','fechaVencimiento','lote','compra_id','IVA','estante_id','presentacion_id'];
}
