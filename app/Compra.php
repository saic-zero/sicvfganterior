<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table="compras";
    protected $fillable = ['numComprobanteCompra','tipoCompra', 'fechaCompra', 'descripcionCompra','proveedor_id','usuario_id'];
}
