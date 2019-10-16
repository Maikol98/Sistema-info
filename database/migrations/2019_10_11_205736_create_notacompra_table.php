<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotacompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notacompra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FechaCompra');
            $table->float('PrecioTotal');
            $table->integer('Id_Proveedor')->unsigned();
            $table->foreign('Id_Proveedor')->references('Id')->on('proveedor')
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
        Schema::dropIfExists('notacompra');
    }
}
