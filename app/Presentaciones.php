<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Presentaciones extends Model

{
	protected $table="presentaciones";
      protected $fillable = ['nombrePre','producto_id','ganancia','equivale'];

   
}
