<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesGruposHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesGruposHorarios', function (Blueprint $table) {
            $table->bigIncrements('pkActividadesGruposHprarios');
            $table->unsignedBigInteger('idActividadesGrupos');
            $table->string('lunes');
            $table->string('martes');
            $table->string('miercoles');
            $table->string('jueves');
            $table->string('viernes');
            $table->string('sabado');
            $table->string('domingo');
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
            $table->foreign('idActividadesGrupos')->references('pkActividadesGrupos')->on('actividadesGrupos');
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
        Schema::dropIfExists('actividadesGruposHorarios');
    }
}
