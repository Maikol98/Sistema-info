<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucion', function (Blueprint $table) {
            $table->increments('Id');
            $table->date('Fecha');
            $table->string('Descripcion');
            $table->integer('Cantidad');
            $table->integer('Id_DetallePedido')->unsigned();
            $table->foreign('Id_DetallePedido')->references('Id')->on('detallepedido')
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
        Schema::dropIfExists('devolucion');
    }
}
