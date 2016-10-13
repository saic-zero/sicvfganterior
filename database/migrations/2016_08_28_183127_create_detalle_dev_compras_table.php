<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDevComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_dev_compras', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idDetalleCompra');
          $table->integer('cantidad');
          $table->timestamps();
          $table->integer('Compra_id')->unsigned();
          $table->foreign('Compra_id')->references('id')->on('compras');
          $table->integer('devCompra_id')->unsigned();
          $table->foreign('devCompra_id')->references('id')->on('devolucion_compras');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_dev_compras');
    }
}
