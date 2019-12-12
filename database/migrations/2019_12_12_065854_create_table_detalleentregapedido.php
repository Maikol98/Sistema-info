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
            $table->integer('Id_Pedido')->unsigned();
            $table->integer('Id_Entrega')->unsigned();
            $table->primary(['Id_Pedido','Id_Entrega']);
            $table->foreign('Id_Pedido')->references('Id')->on('pedido');
            $table->foreign('Id_Entrega')->references('Id')->on('entregapedido');
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
