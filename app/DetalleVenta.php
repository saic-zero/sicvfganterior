<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;
use SICVFG\DetalleVenta;
use DB;

class DetalleVenta extends Model
{
    protected $table="detalle_ventas";
    protected $primaryKey='id';
    protected $fillable = ['detalleCompra_id','cantidad', 'descuento', 'precioventa','venta_id','presentacion_id'];


    public static function nombreProd($id){
    $n=\SICVFG\Producto::find($id);
    return $n->nombreProd;
    }

    public static function nombrePresentacion($id){
    $n=\SICVFG\Presentaciones::find($id);
    return $n->nombrePre;
    }

    public static function nombreUsuario($id){
    $n=Empleado::find($id);
    return $n->nombresEmp." ".$n->apellidosEmp;
    }

    

}
