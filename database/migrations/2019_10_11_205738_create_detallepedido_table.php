<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallepedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepedido', function (Blueprint $table) {
            $table->increments('Id');
            $table->float('SubTotal');
            $table->integer('Cantidad');
            $table->string('Descripcion')->nullable();
            $table->integer('Id_Producto')->unsigned();
            $table->integer('Id_Pedido')->unsigned();
            $table->foreign('Id_Producto')->references('Id')->on('producto')
            ->onDelete('cascade');
            $table->foreign('Id_Pedido')->references('Id')->on('pedido')
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
        Schema::dropIfExists('detallepedido');
    }
}
