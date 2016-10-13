<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('producto_id')->unsigned();
          $table->foreign('producto_id')->references('id')->on('productos');
          $table->integer('cantidad');
          $table->double('precioCompra');
          $table->double('precioMinVenta');
          $table->double('precioMaxVenta');
          $table->date('fechaVencimiento');
          $table->string('lote');
          $table->integer('compra_id')->unsigned();
          $table->foreign('compra_id')->references('id')->on('compras');
          $table->double('IVA');
          $table->integer('estante_id')->unsigned();
          $table->foreign('estante_id')->references('id')->on('estantes');
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
        Schema::drop('detalle_compras');
    }
}
