<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
  protected $table = 'cargos';
  protected $fillable = ['nombreCargo']; // elemento que puede ser rellenado

  public static function nombCargo($id){
        $cargo=Cargo::find($id);
        return $cargo->nombreCargo;
      }
}
