<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaventa', function (Blueprint $table) {
            $table->increments('Id');
            $table->float('PrecioTotal');
            $table->date('FechaVenta');
            $table->integer('Id_Cliente')->unsigned();
            $table->integer('Id_Admin')->unsigned();
            $table->foreign('Id_Cliente')->references('Id')->on('cliente')
            ->onDelete('cascade');
            $table->foreign('Id_Admin')->references('Id')->on('administrador')
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
        Schema::dropIfExists('notaventa');
    }
}
