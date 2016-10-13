<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombreSuc');
          $table->string('representanteSuc');
          $table->string('direccionSuc');
          $table->string('telefonoSuc');
          $table->boolean('estadoSuc')->default(true);
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
        Schema::drop('sucursals');
    }
}
