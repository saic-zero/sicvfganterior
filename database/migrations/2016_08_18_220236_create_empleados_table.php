<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codEmpleado');
            $table->string('nombresEmp');
            $table->string('apellidosEmp');
            $table->string('direccionEmp');
            $table->date('fechaNacimiento');
            $table->string('sexo');
            $table->string('telefonoEmp');
            $table->string('DUI');
            $table->string('NIT');
            $table->string('numAFP');
            $table->string('numISSS');
            $table->string('referenciaLaboral');
            $table->date('fechaIngrSuc');
            $table->boolean('estadoEmp')->default(true);
            $table->timestamps();
            $table->integer('sucursal_id')->unsigned();
            $table->foreign('sucursal_id')->references('id')->on('sucursals');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
