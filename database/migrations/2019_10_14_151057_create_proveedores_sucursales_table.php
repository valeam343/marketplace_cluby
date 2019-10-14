<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedoresSucursales', function (Blueprint $table) {
            $table->bigIncrements('pkProveedorSucursal');
            $table->unsignedBigInteger('idActividadGrupos');
            $table->string('nomProveedorSucursal');
            $table->string('calleProveedorSucursal');
            $table->string('nextProveedorSucursal');
            $table->string('nintProveedorSucursal');
            $table->string('colProveedorSucursal');
            $table->string('munProveedorSucursal');
            $table->string('estadoProveedorSucursal');
            $table->string('cpProveedorSucursal');
            $table->string('esActivo');
            $table->string('emailProveedorSucursal');
            $table->string('telProveedorSucursal');
            $table->double('latitud');
            $table->double('longitud');
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
            $table->foreign('idActividadGrupos')->references('pkActividadGrupos')->on('actividadesGrupos');
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
        Schema::dropIfExists('proveedoresSucursales');
    }
}
