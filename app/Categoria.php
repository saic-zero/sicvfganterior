<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     protected $table="categorias";

    protected $fillable = [ 'nombreCategoria'];
}
