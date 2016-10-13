<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDevVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_dev_ventas', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idDetalleVenta');
          $table->integer('cantidad');
          $table->timestamps();
          $table->integer('venta_id')->unsigned();
          $table->foreign('venta_id')->references('id')->on('ventas');
          $table->integer('devVenta_id')->unsigned();
          $table->foreign('devVenta_id')->references('id')->on('devolucion_ventas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_dev_ventas');
    }
}
