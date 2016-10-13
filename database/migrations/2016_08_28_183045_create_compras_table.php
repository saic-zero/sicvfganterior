<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
          $table->increments('id');
          $table->string('numComprobanteCompra');
          $table->string('tipoCompra');
          $table->date('fechaCompra');
          $table->string('descripcionCompra');
          $table->timestamps();
          $table->integer('proveedor_id')->unsigned();
          $table->foreign('proveedor_id')->references('id')->on('proveedors');
          $table->integer('usuario_id')->unsigned();
          $table->foreign('usuario_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
