<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresSuscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedoresSuscripciones', function (Blueprint $table) {
            $table->bigIncrements('pkProveedorSuscripcion');
            $table->unsignedBigInteger('idProveedores');
            $table->timestamp('inicioSuscripcion');
            $table->timestamp('finSuscripcion');
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
            $table->foreign('idProveedores')->references('pkProveedor')->on('proveedores');
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
        Schema::dropIfExists('proveedoresSuscripciones');
    }
}
