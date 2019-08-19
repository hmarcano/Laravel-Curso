<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->increments('liprID');
            $table->unsignedInteger('usu_ID');
            $table->foreign('usu_ID', 'fk_libroprestamo_usuario')->references('usuID')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('lib_ID');
            $table->foreign('lib_ID', 'fk_libroprestamo_libro')->references('libID')->on('libros')->onDelete('restrict')->onUpdate('restrict');
            $table->date('libFechaPrestamo');
            $table->string('libPrestadoA', 100);
            $table->boolean('libEstado');
            $table->date('libFechaDevolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamo');
    }
}
