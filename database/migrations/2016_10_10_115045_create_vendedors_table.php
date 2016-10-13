<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreVen');
            $table->string('DUIVen');
            $table->string('correoVen');
            $table->string('direccionVen');
            $table->string('telefonoVen');
            $table->boolean('estadoVen')->default(true);
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
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
        Schema::drop('vendedors');
    }
}
