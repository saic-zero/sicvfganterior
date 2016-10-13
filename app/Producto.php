<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
      protected $table="productos";

    protected $fillable = ['codProducto','nombreProd', 'descripcionProd','stockMinimo', 'stockMaximo', 'categoria_id'];

    public static function nombreCategorias($id){
    $n=\SICVFG\Categoria::find($id);
    return $n->nombreCategoria;
    }

    public static function unidades($presentacion,$cantidad){
    $pres = \SICVFG\Presentaciones::find($presentacion);
    return $pres->equivale * $cantidad;
    }
}
