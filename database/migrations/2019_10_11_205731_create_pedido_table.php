<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('Id');
            $table->float('PrecioTotal');
            $table->date('FechaPedido');
            $table->date('FechaEntrega');
            $table->string('Direccion');
            $table->string('Descripcion')->nullable();
            $table->string('Estado');
            $table->integer('Id_Cliente')->unsigned();
            $table->foreign('Id_Cliente')->references('Id')->on('cliente')
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
        Schema::dropIfExists('pedido');
    }
}
