<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregapedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregapedido', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->date('Fecha');
            $table->integer('Id_Chofer')->unsigned();
            $table->foreign('Id_Chofer')->references('Id')->on('chofer')
            ->onDelete('cascade');
            $table->string('PlacaVehiculo');
            $table->foreign('PlacaVehiculo')->references('Placa')->on('vehiculo')
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
        Schema::dropIfExists('entregapedido');
    }
}
