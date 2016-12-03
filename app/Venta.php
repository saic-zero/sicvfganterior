<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table="ventas";
    protected $fillable = ['numfactura','fechaVenta', 'cliente', 'usuario_id','totalVenta'];

     public static function nombreUsuario($id){
        $n=Empleado::find($id);
        return $n->nombresEmp." ".$n->apellidosEmp;
      }

}
