<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesTipos', function (Blueprint $table) {
            $table->bigIncrements('pkActividadesTipo');
            $table->unsignedBigInteger('idActividad');
            $table->string('nomActividadesTipo');
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
            $table->foreign('idActividad')->references('pkActividad')->on('actividades');
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
        Schema::dropIfExists('actividadesTipos');
    }
}
