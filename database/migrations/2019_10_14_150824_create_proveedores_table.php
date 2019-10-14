<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('pkProveedor');
            $table->unsignedBigInteger('idProveedoresSucursales');
            $table->string('nomProveedor');
            $table->string('logoProveedor');
            $table->string('aliasProveedor');
            $table->string('rfcProveedor');
            $table->string('calleProveedor');
            $table->string('nextProveedor');
            $table->string('nintProveedor');
            $table->string('colProveedor');
            $table->string('munProveedor');
            $table->string('estadoProveedor');
            $table->string('cpProveedor');
            $table->string('esActivo');
            $table->string('emailProveedor');
            //falta un campo
            $table->string('creadoPor');
            $table->string('editadoPor');
            $table->timestamp('fechaCreado');
            $table->timestamp('fechaEditado');
            $table->foreign('idProveedoresSucursales')->references('pkProveedorSucursal')->on('proveedoresSucursales');
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
        Schema::dropIfExists('proveedores');
    }
}
