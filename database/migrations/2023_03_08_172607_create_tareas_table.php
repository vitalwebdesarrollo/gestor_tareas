<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Descripcion');
            $table->dateTime('fecha de inicio');
            $table->bigInteger('Horas estimadas');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->boolean('finalizado');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
};
