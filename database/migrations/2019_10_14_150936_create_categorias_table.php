<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('pkCategoria');
            $table->string('nomActividadesCategoria');
            $table->string('descActividadesCategoria');
            $table->boolean('esActivo');
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
        Schema::dropIfExists('categorias');
    }
}
