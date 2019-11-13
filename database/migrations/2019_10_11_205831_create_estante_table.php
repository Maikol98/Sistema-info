<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estante', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Capacidad');
            $table->string('Descripcion');
            $table->integer('Estado');
            $table->integer('Id_Almacen')->unsigned();
            $table->integer('Id_Categoria')->unsigned();
            $table->foreign('Id_Almacen')->references('Id')->on('almacen')
            ->onDelete('cascade');
            $table->foreign('Id_Categoria')->references('Id')->on('categoria')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estante');
    }
}
