<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->bigIncrements('pkActividad');
            $table->string('nomActividad');
            $table->string('desActividad');
            $table->smallInteger('edadMinimaActividad');
            $table->smallInteger('edadMaximaActividad');
            $table->string('reqsActividad');
            $table->float('referenciaPrecioActividad',8,2);
            $table->string('keywordsActividad');
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
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
        Schema::dropIfExists('actividades');
    }
}
