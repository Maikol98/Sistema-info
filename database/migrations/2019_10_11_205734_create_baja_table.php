<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baja', function (Blueprint $table) {
            $table->increments('Id');
            $table->date('Fecha');
            $table->string('Descripcion');
            $table->string('TipoBaja');
            $table->integer('Id_Producto')->unsigned();
            $table->foreign('Id_Producto')->references('Id')->on('producto')
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
        Schema::dropIfExists('baja');
    }
}
