<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('libID');
            $table->string('libTitulo', 100);
            $table->string('libIsbn',30);
            $table->string('libAutor', 100);
            $table->unsignedTinyInteger('libCantidad');
            $table->string('libEditorial', 50)->nullable();
            $table->string('libFoto', 100)->nullable();
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
        Schema::dropIfExists('libros');
    }
}
