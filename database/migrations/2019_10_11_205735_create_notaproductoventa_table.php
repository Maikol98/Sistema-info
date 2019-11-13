<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaproductoventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaproductoventa', function (Blueprint $table) {
            $table->integer('Id_Producto')->unsigned();
            $table->integer('Id_NotaVenta')->unsigned();
            $table->primary(['Id_Producto','Id_NotaVenta']);
            $table->foreign('Id_Producto')->references('Id')->on('producto')
            ->onDelete('cascade');
            $table->foreign('id_NotaVenta')->references('Id')->on('notaventa')
            ->onDelete('cascade');
            $table->integer('Cantidad');
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
        Schema::dropIfExists('notaproductoventa');
    }
}
