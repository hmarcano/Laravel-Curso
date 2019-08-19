<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('usroID');
            $table->unsignedInteger('rol_ID');
            $table->foreign('rol_ID', 'fk_usuariorol_roles')->references('rolID')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('usu_ID');
            $table->foreign('usu_ID', 'fk_usuariorol_usuarios')->references('usuID')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('usroEstado');
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
        Schema::dropIfExists('usuario_rol');
    }
}
