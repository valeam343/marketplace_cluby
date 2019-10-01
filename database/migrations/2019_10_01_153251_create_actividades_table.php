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
            $table->bigIncrements('idActividad');
            $table->unsignedBigInteger('idCategoria');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('city');
            $table->double('lat');
            $table->double('long');
            $table->string('telefono');
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
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
