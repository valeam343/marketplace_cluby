<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesGrupos', function (Blueprint $table) {
            $table->bigIncrements('pkActividadesGrupos');
            $table->unsignedBigInteger('idActividad');
            $table->string('capActividadesGrupos');
            $table->smallInteger('edadMinimaActividadesGrupos');
            $table->smallInteger('edadMaximaActividadesGrupos');
            $table->timestamp('fInicialActividadesGrupos');
            $table->timestamp('fFinalActividadesGrupos');
            $table->string('periodicidadActividadesGrupos');
            $table->string('notasActividadesGrupos');
            $table->float('precioActividadesGrupos',8,2);
            $table->string('politicasCancelacionActividades');
            $table->boolean('esActivo');
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
        Schema::dropIfExists('actividadesGrupos');
    }
}
