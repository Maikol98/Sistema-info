<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaproductocompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaproductocompra', function (Blueprint $table) {
            $table->integer('Id_Producto')->unsigned();
            $table->integer('Id_Compra')->unsigned();
            $table->primary(['Id_Producto','Id_Compra']);
            $table->foreign('Id_Producto')->references('Id')->on('producto')
            ->onDelete('cascade');
            $table->foreign('Id_Compra')->references('Id')->on('notacompra')
            ->onDelete('cascade');
            $table->integer('Cantidad');
            $table->float('Precio');
            $table->float('PrecioUnitario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notaproductocompra');
    }
}
