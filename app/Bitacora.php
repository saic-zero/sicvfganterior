<?php

namespace SICVFG;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
  protected $table = 'bitacoras';
  protected $fillable = ['usuario_id','accion'];

  public static function bitacora($accion){

          Bitacora::create([
          'usuario_id'=>Auth::user()->id,
          'accion'=>$accion,
        ]);
      }
      public static function buscar(){
        return Bitacora::orderBy('usuario_id')->get();
      }
    
}
