<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('detalleCompra_id')->unsigned();
          $table->foreign('detalleCompra_id')->references('id')->on('detalle_compras');
          $table->integer('cantidad');
          $table->double('descuento');
          $table->integer('precioventa');
          $table->integer('venta_id')->unsigned();
          $table->foreign('venta_id')->references('id')->on('ventas');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_ventas');
    }
}
