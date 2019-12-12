<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetalleentregapedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleentregapedido', function (Blueprint $table) {
            $table->integer('IdPedido')->unsigned();
            $table->integer('IdEntrega')->unsigned();
            $table->primary(['IdPedido','IdEntrega']);
            $table->foreign('IdPedido')->references('Id')->on('pedido')
            ->onDelete('cascade');
            $table->foreign('IdEntrega')->references('Id')->on('entregapedido')
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
        Schema::dropIfExists('detalleentregapedido');
    }
}
