<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    protected $table="estantes";
    protected $fillable = ['nombreEst','ubicacionEst', 'estadoEst'];
}
