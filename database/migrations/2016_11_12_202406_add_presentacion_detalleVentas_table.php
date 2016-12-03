<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPresentacionDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('detalle_ventas', function (Blueprint $table) {
          $table->integer('presentacion_id')->unsigned();
          $table->foreign('presentacion_id')->references('id')->on('presentaciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('detalle_ventas', function (Blueprint $table) {
            //
        });
    }
}
