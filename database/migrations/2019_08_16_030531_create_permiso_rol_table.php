<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->increments('peroID');
            $table->unsignedInteger('rol_ID');
            $table->foreign('rol_ID', 'fk_permisorol_rol')->references('rolID')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('per_ID');
            $table->foreign('per_ID', 'fk_permisorol_permiso')->references('perID')->on('permisos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
