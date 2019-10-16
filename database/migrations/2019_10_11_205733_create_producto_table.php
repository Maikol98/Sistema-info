<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Cod_producto')->unique();
            $table->string('Nombre');
            $table->string('Marca');
            $table->float('Precio');
            $table->float('PrecioPromedio');
            $table->integer('Stock');
            $table->integer('Id_Garantia')->unsigned();
            $table->foreign('Id_Garantia')->references('Id')->on('garantia')
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
        Schema::dropIfExists('producto');
    }
}
